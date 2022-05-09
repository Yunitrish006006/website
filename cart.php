<!DOCTYPE html>
<html lang="en">

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
    <form action="" method="post" name="form1">
            <div class="row" style="padding: 2rem 0rem; color: black; border-bottom: 0.05rem solid rgb(232, 228, 228);">
            <div class="col">縮圖</div>
            <div class="col">房型名稱</div>
            <div class="col">入住日期</div>
            <div class="col">退宿日期</div>
            <div class="col">數量</div>
            <div class="col">售價</div>
            <div class="col">刪除</div>
        
        </div>
        
         <?php
         $link = mysqli_connect("localhost","root","");     
         mysqli_select_db($link, "s0961007");
         mysqli_query($link, "SET NAMES UTF8");
	     $sqlstr = "SELECT * FROM cart as c, product as p WHERE c.pno=p.pno;";
	     $result = mysqli_query($link, $sqlstr);
	     $nrow = mysqli_num_rows($result);
	     $i = 1;
	   while($i<= $nrow)
	   {
	      $record = mysqli_fetch_object($result);
          echo '<div class="row" style="margin: 1.5rem 0rem;">';
          echo '<div class="col-3 col-sm"><img src="'.$record->picture.'" alt="" width="100%" height="90%"></div>';
          echo '<div class="col-3 col-sm">'.$record->pname.'</div>';
          echo '<div class="col-3 col-sm"><input id="date" name="date1" class="date1" type="date"></div>';
          echo  '<div class="col-3 col-sm"><input id="date" name="date2" class="date2" type="date"></div>';
		  echo'<div class="col-6 col-sm"><select class="wide">
                    <option data-display="房間數量">房間數量</option>
                    <option value="1"> 1間 </option>
                    <option value="2"> 2間 </option>
                    <option value="3"> 3間 </option>
                    <option value="4"> 4間 </option></select></div>';
         echo '<div class="col-3 col-sm">'.$record->unitprice.'</div>';
         echo '<div class="col-3 col-sm"><a href="#"><img src="./images/delete.png" alt="" width="30px" height="30px"></a>';
         $i++;
	   }

	   mysqli_free_result($result);
       mysqli_close($link);


        ?>
        <div class="row" style="margin: 1.5rem 0rem;">
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col-3 col-sm">共兩件</div>
            <div class="col-2 col-sm">總計</div>
            <div class="col-2 col-sm">$8600</div>
        </div>
        <div class="row" style="margin: 1.5rem 0rem;">
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col-2 col-sm"></div>
            <div class="col-2 col-sm">運費</div>
            <div class="col-2 col-sm">$0</div>
        </div>
        <div class="row" style="margin: 1.5rem 0rem;">
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col col-sm"></div>
            <div class="col-2 col-sm"></div>
            <div class="col-2 col-sm">應計</div>
            <div class="col-2 col-sm">$8600</div>
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
    </form>
</div>
<?php include("footer.php") ?>
</body>

</html>