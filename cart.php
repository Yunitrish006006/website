<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php
     if(isset($_POST['cart_pno']) && isset($_SESSION['account'])) {
        $link = mysqli_connect("localhost","root","root123456","beehotel"); 
        mysqli_query($link, "SET NAMES UTF8");
        $cart_pno = $_POST['cart_pno'];
        $cart_account=$_SESSION['account_id'];
        $cart_quantity=0;
        if($cart_result=mysqli_query($link,"SELECT * FROM cart WHERE pno = $cart_pno and account_id=$cart_account")){
            mysqli_query($link,"DELETE FROM cart WHERE pno = '$cart_pno'");
        }
        $links = mysqli_connect("localhost","root","root123456","beehotel");     
        mysqli_query($links, "SET NAMES UTF8");
        if($cart_result = mysqli_query($links,"SELECT * FROM cart WHERE account_id = $cart_account")) {
                while ($cart_item = mysqli_fetch_assoc($cart_result)) {
                        $cart_quantity++;
                    }
                }
        $_SESSION["cart_quantity"]=$cart_quantity;
        mysqli_close($link);         
        mysqli_close($links);   
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
                $link = mysqli_connect("localhost","root","root123456","beehotel");     
                mysqli_query($link, "SET NAMES UTF8");
                $account = $_SESSION['account_id'];
                if($result = mysqli_query($link,"SELECT * FROM cart as c, product as p WHERE  c.pno=p.pno AND c.account_id = $account;")) {
                    while ($record = mysqli_fetch_assoc($result)) {
                        echo '<div class="row" style="padding: 2rem 0rem;">';
                        echo '<div class="col-3 col-sm"><img src="images/product/'.$record['file_type'].'" alt="" width="120px" height="90px"></div>';
                        echo '<div class="col-3 col-sm">'.$record['pname'].'</div>';
                        echo '<div class="col-3 col-sm"><input type="date"></div>';
                        echo  '<div class="col-3 col-sm"><input type="date"></div>';
                        echo'<div class="col-6 col-sm"><select >
                                    <option value="1"> 1間 </option>
                                    <option value="2"> 2間 </option>
                                    <option value="3"> 3間 </option>
                                    <option value="4"> 4間 </option></select></div>';
                        echo '<div class="col-3 col-sm">'.$record["unitprice"].'</div>';
                        echo '<div class="col-3 col-sm"><form method="post" action=""><input type="hidden" name="cart_pno" value="'.$record['pno'].'"><input type="submit" value="刪除" class="btn btn-danger"></form></div></div>';
                    }
                }
                mysqli_free_result($result);
                mysqli_close($link);
            }
        ?>
        <div class="row" style="padding: 2rem 0rem;">
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col-3 col-sm">共一件</div>
            <div class="col-2 col-sm">總計</div>
            <div class="col-2 col-sm">$2300</div>
        </div>
        <div class="row" style="padding: 2rem 0rem;">
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col-2 col-sm"></div>
            <div class="col-2 col-sm">運費</div>
            <div class="col-2 col-sm">$0</div>
        </div>
        <div class="row" style="padding: 2rem 0rem;">
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col-2 col-sm"></div>
            <div class="col-2 col-sm">應計</div>
            <div class="col-2 col-sm">2300</div>
        </div>
        <div class="row" style="margin: 1.5rem 0rem;">
            <div class="col-9 col-sm-10"><input type="text" value="請輸入折扣碼" style="width:95%; height:40px;"></div>
            <div class="col-3 col-sm-2"><input type="submit" value="使用折扣券"></div>
        </div>
        <div class="row" style="margin: 1.5rem 0rem;">
            <div class="col-2 col-sm-2"><a href="book.php" class="btn theme_btn button_hover">回上一頁</a></div>
            <div class="col-2 col-sm-2"></div>
            <div class="col-1 col-sm-2"></div>
            <div class="col-1 col-sm-2"></div>
            <div class="col-2 col-sm-2"></div>
            <div class="col-2 col-sm-2"><button type="submit" value="submit"
                    class="btn theme_btn button_hover">確認結帳</button></div>
        </div>
    
</div>
<?php include("footer.php") ?>
</body>

</html>