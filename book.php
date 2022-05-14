<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION['cart'])){
        $arr_cart = array_filter(explode(",",$_SESSION['cart']));
    }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/book.css" rel="stylesheet" />
    <?php include("import.php") ?>
    <title>訂房</title>
</head>
<script>
        function cart(add_remove,id) {
            $.ajax({
                url: 'cart_ajax.php',
                data: {
                    oper: add_remove, //1:add 2:remove
                    id: id
                },
                type: 'POST',
                dataType: "json",
                success: function(Jdata) {
                    for(var i=1 ; i<=28;i++)
                    {
                        if (jQuery.inArray(i.toString(), Jdata)>=0)//物品已在購物車
                        {
                            $("#p"+i).text("取消購物車");
                            $("#p"+i).attr("onclick","cart(2,"+ i +")");
                        }
                        else
                        {
                            $("#p"+i).text("加入購物車");
                            $("#p"+i).attr("onclick","cart(1,"+ i +")");
                        }
                 }
                $("#cart_cnt").html(Jdata.length);//顯示購物車物品數量
            },
            error: function(xhr, ajaxOptions, thrownError) {}
        });
    }
    </script>
<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0"
                data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>拋下來世俗的煩惱</h6>
                    <h2>放鬆自己吧！</h2>
                    <p>提早訂房可享有早鳥優惠，偷偷告訴你可以打65折喔...<br>聰明的你，不會錯過這次機會吧～</p>     
                </div>
            </div>
        </div>
        </div>
    </section>
    <section style="padding: 5%;">
        <div class="container_2">
            <!-- Logo & Site Name -->
            <div class="tm-paging-links">
                <nav>
                    <ul>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link active">台北旗艦店</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">台中逢甲店</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">高雄愛河店</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">彰化鹿港店</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">墾丁恆春店</a></li>
                    </ul>
                </nav>
            </div>
    </section>
    <!-- Gallery -->
    <div class="row tm-gallery">
        <!-- gallery page 1 -->
        <div id="tm-gallery-page-台北旗艦店" class="tm-gallery-page">
        <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=1;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p1" class="btn btn-primary" onclick="cart(1,1)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=2;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p2" class="btn btn-primary" onclick="cart(1,2)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=3;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p3" class="btn btn-primary" onclick="cart(1,3)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=4;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p4" class="btn btn-primary" onclick="cart(1,4)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=5;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-5.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p5" class="btn btn-primary" onclick="cart(1,5)">加入購物車</button></figcaption>
            </figure>
            </article>
        </div> <!-- gallery page 1 -->

        <!-- gallery page 2 -->
        <div id="tm-gallery-page-台中逢甲店" class="tm-gallery-page hidden">
           <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=6;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-6.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p6" class="btn btn-primary" onclick="cart(1,6)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=7;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-7.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p7" class="btn btn-primary" onclick="cart(1,7)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=8;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-8.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p8" class="btn btn-primary" onclick="cart(1,8)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=9;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-9.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p9" class="btn btn-primary" onclick="cart(1,9)">加入購物車</button></figcaption>
            </figure>
            </article>
        </div> <!-- gallery page 2 -->

        <!-- gallery page 3 -->
        <div id="tm-gallery-page-高雄愛河店" class="tm-gallery-page hidden">
             <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=10;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-10.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p10" class="btn btn-primary" onclick="cart(1,10)">加入購物車</button></figcaption>
            </figure>
            </article>
           
           <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=11;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-11.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p11" class="btn btn-primary" onclick="cart(1,11)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=12;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-12.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p12" class="btn btn-primary" onclick="cart(1,12)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=13;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-13.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p13" class="btn btn-primary" onclick="cart(1,13)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=14;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-14.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p14" class="btn btn-primary" onclick="cart(1,14)">加入購物車</button></figcaption>
            </figure>
            </article>
        </div> <!-- gallery page 3 -->

        <!-- gallery page 4 -->
        <div id="tm-gallery-page-彰化鹿港店" class="tm-gallery-page hidden">
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=15;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-15.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p15" class="btn btn-primary" onclick="cart(1,15)">加入購物車</button></figcaption>
            </figure>
            </article>
             <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=16;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-16.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p16" class="btn btn-primary" onclick="cart(1,16)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=17;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-17.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p17" class="btn btn-primary" onclick="cart(1,17)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=18;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-18.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p18" class="btn btn-primary" onclick="cart(1,18)">加入購物車</button></figcaption>
            </figure>
            </article>
            
        </div> <!-- gallery page 4 -->

        <!-- gallery page 5 -->
        <div id="tm-gallery-page-墾丁恆春店" class="tm-gallery-page hidden">
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=19;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-19.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p19" class="btn btn-primary" onclick="cart(1,19)">加入購物車</button></figcaption>
            </figure>
            </article>
             <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=20;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-20.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p20" class="btn btn-primary" onclick="cart(1,20)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=21;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-21.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p21" class="btn btn-primary" onclick="cart(1,21)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=22;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-22.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p22" class="btn btn-primary" onclick="cart(1,22)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=23;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-23.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p23" class="btn btn-primary" onclick="cart(1,23)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=24;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-24.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p24" class="btn btn-primary" onclick="cart(1,24)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=25;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-25.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p25" class="btn btn-primary" onclick="cart(1,25)">加入購物車</button></figcaption>
            </figure>
            </article>
            <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $sqlstr1 = "SELECT * FROM `product` WHERE pno=26;";
            $result=mysqli_query($link, $sqlstr1);
            $record = mysqli_fetch_object($result);
            echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="images/product/p-26.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
            echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
            echo '<p class="tm-gallery-description">'.$record->description;
            echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
            mysqli_close($link);
        ?>
           <button id="p26" class="btn btn-primary" onclick="cart(1,26)">加入購物車</button></figcaption>
            </figure>
            </article>
            
        </div> <!-- gallery page 5 -->
</div>
</body>

</html>