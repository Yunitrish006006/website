<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
     if(isset($_POST['cart_pno']) && isset($_SESSION['account'])) {
        include("db.php");   
        mysqli_query($link, "SET NAMES UTF8");
        $cart_pno = $_POST['cart_pno'];
        $cart_account=$_SESSION['account_id'];
        $cart_quantity=0;
        if($cart_result=mysqli_query($link,"SELECT * FROM cart WHERE pno = $cart_pno and account_id=$cart_account")){
            mysqli_query($link,"DELETE FROM cart WHERE pno = '$cart_pno'");
        }    
        mysqli_query($link, "SET NAMES UTF8");
        if($cart_result = mysqli_query($link,"SELECT * FROM cart WHERE account_id = $cart_account")) {
                while ($cart_item = mysqli_fetch_assoc($cart_result)) {
                        $cart_quantity++;
                    }
                }
        $_SESSION["cart_quantity"]=$cart_quantity;
        mysqli_close($link);         
        header("Location:cart.php");
     }
    ?>
    <?php
    if(isset($_POST['a0'])){
        include("db.php");
        mysqli_query($link,"SET NAMES UTF8");
        $time=date("Y-m-d h:i:s");
        $account = $_SESSION['account_id'];
        $count=$_SESSION["cart_quantity"];
        mysqli_query($link,"INSERT INTO `transaction`(transmid,transtime) values ('$account','$time');");
        if($result = mysqli_query($link,"SELECT * from `transaction` where transmid=$account;")){
            $nrow = mysqli_num_rows($result);
            while ($record = mysqli_fetch_assoc($result)) {
                if($nrow==1){
                    $tno=$record['tno'];
                }
                $nrow--;
            }  
        }
        for($x=0;$x<$count;$x++){
            $q=$_POST['a'.$x];
            $w=$_POST['b'.$x];
            $e=$_POST['c'.$x];
            $r=$_POST['d'.$x];
            $t=$_POST['e'.$x];
            $result = mysqli_query($link,"INSERT INTO record(tno,pname,saleprice,amount,checkin,checkout) values ('$tno','$q','$w','$e','$r','$t');");
        }
        mysqli_query($link,"DELETE FROM cart where account_id=$account;");
        mysqli_close($link); 
        $_SESSION["cart_quantity"]=0;    
        header("Location:cart.php");
    }

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蜂巢飯店</title>
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!--================圖片區=================-->
    <section class="breadcrumb_area" style="background-image: url(./images/cart.jpg);  background-size:100% 100%">
        
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle" ">購物車</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">主頁</a></li>
                    <li class="active">購物車</li>
                </ol>
            </div>
        </div>
    </section>
<div class="container" style="text-align: center; padding:1rem; font-size: 1rem;">
            <div class="row" style="padding: 2rem 0rem; color: black; border-bottom: 0.05rem solid rgb(232, 228, 228);">
            <div class="col-3 col-sm">縮圖</div>
            <div class="col-3 col-sm">房型名稱</div>
            <div class="col-3 col-sm">入住日期</div>
            <div class="col-3 col-sm">退宿日期</div>
            <div class="col-3 col-sm">數量</div>
            <div class="col-3 col-sm">售價</div>
            <div class="col-3 col-sm">刪除</div>
        
        </div>
        <?php
            if(isset($_SESSION['account'])){
                include("db.php");        
                mysqli_query($link, "SET NAMES UTF8");
                $account = $_SESSION['account_id'];
                $count=$_SESSION["cart_quantity"];
                $i=0;
                $j=0;
                if($result = mysqli_query($link,"SELECT * FROM cart as c, product as p WHERE  c.pno=p.pno AND c.account_id = $account;")) {
                    while ($record = mysqli_fetch_assoc($result)) {
                        echo '<div class="row" style="padding: 2rem 0rem;">';
                        echo '<div class="col-3 col-sm"><img src="images/product/'.$record['file_type'].'" alt="" width="120px" height="90px"></div>';
                        echo '<div class="col-3 col-sm"><span name="pname">'.$record['pname'].'</span></div>';
                        echo '<div class="col-3 col-sm"><input type="date" name="in"></div>';
                        echo '<div class="col-3 col-sm"><input type="date" name="out"></div>';
                        echo '<div class="col-3 col-sm"><span style="display:flex"><input type="hidden" name="price" value="'.$record['unitprice'].'"><input type="button" name="minus" value="-" onclick="minus('.$i.')"><input type="text" name="amount" size="3" value="0"><input type="button" name="plus" value="+" onclick="plus('.$i.')"></div></span>';
                        echo '<div class="col-3 col-sm"><span id="price'.$i.'">'.intval($record['unitprice']).'</span></div>';
                        echo '<div class="col-3 col-sm"><form method="post" action=""><input type="hidden" name="cart_pno" value="'.$record['pno'].'"><input type="submit" value="刪除" class="btn btn-danger"></form></div></div>';
                        $i++;
                    }
                }
                mysqli_free_result($result);
                if($result = mysqli_query($link,"SELECT * FROM cart as c, product as p WHERE  c.pno=p.pno AND c.account_id = $account;")) {
                    while ($record = mysqli_fetch_assoc($result)) {
                       if($j==0){
                            echo '<form method="post" action=""><h3>確認訂單</h3>';
                        }
                        echo '<input type="text" name="a'.$j.'"id="a'.$j.'" value="'.$record['pname'].'"required><input type="text" name="b'.$j.'"id="b'.$j.'" required><input type="text" name="c'.$j.'"id="c'.$j.'" required><input type="text" name="d'.$j.'"id="d'.$j.'" required><input type="text" name="e'.$j.'"id="e'.$j.'"required>';
                        $j++;
                    }
                }
                 mysqli_free_result($result);
                mysqli_close($link);
            }
        echo '<div class="row" style="padding: 2rem 0rem;">
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>共
            <div class="col-3 col-sm"><span id="room">零</span></div>件
            <div class="col-2 col-sm">總計</div>
            <div class="col-2 col-sm">$<span id="er">0</span></div>
        </div>
        <div class="row" style="margin: 1.5rem 0rem;">
            <div class="col-2 col-sm-2"><a href="book.php" class="btn theme_btn button_hover">回上一頁</a></div>
            <div class="col-2 col-sm-2"></div>
            <div class="col-1 col-sm-2"></div>
            <div class="col-1 col-sm-2"></div>
            <div class="col-2 col-sm-2"></div>
            <div class="col-2 col-sm-2"><input type="submit" value="確認結帳"
                    class="btn theme_btn button_hover"></div>
        </div></form></div>';
        ?>
    

<?php include("footer.php") ?>
</body>
<script>
    var quantitys=document.getElementsByName('amount');
    var unitprice=document.getElementsByName('price');
    var pnames=document.getElementsByName('pname');
    var ins=document.getElementsByName('in');
    var outs=document.getElementsByName('out');
    function minus(num){
        quantity=quantitys[num].value-1;
        if(quantity<0){
            alert("商品的數量不可為負");
            quantity=1;
        }
        if(quantity==0){
            quantity=1;
        }
        document.getElementsByName('amount')[num].value=quantity;
        total();
    }
    function plus(num){
        quantity=parseInt(quantitys[num].value)+1;
        document.getElementsByName('amount')[num].value=quantity;
        if(quantity==0){
            quantity=1;
        }
        total();
    }
    function total(){
        var total=0;
        var totals=0;
        for(let i=0;i<unitprice.length;i++){
            var sum=parseInt(quantitys[i].value*unitprice[i].value);
            document.getElementById('price'+i).innerHTML=sum;
            totals=totals+parseInt(quantitys[i].value);
            total=total+sum;
            document.getElementById('a'+i).value=pnames[i].innerHTML;
            document.getElementById('b'+i).value=sum;
            document.getElementById('c'+i).value=quantitys[i].value;
            document.getElementById('d'+i).value=ins[i].value;
            document.getElementById('e'+i).value=outs[i].value;
        }
        document.getElementById('room').innerHTML=totals;
        document.getElementById('er').innerHTML=total;
    }
</script>

</html>
