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
            mysqli_select_db($link, "s0961007");
            mysqli_query($link, "SET NAMES UTF8");
            for($i=1;$i<=6;$i++){
                 $sqlstr1 = "SELECT `pno`, `pname`, `description`, `picture`, `unitprice`, `category` FROM `product` WHERE pno=".$i.";";
                 $result=mysqli_query($link, $sqlstr1);
                 $record = mysqli_fetch_object($result);
                 echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="'.$record->picture.'alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
                 echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
                 echo '<p class="tm-gallery-description">'.$record->description;
                 echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
                 echo '<button id="p"'. $i .' class="btn btn-primary" onclick="cart(1,$i)">加入購物車</button></figcaption>
                </figure>
            </article>';
            }
           
            mysqli_close($link);
        ?>
           
        </div> <!-- gallery page 1 -->

        <!-- gallery page 2 -->
        <div id="tm-gallery-page-台中逢甲店" class="tm-gallery-page hidden">
             <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "s0961007");
            mysqli_query($link, "SET NAMES UTF8");
            for($i=7;$i<=11;$i++){
                 $sqlstr1 = "SELECT `pno`, `pname`, `description`, `picture`, `unitprice`, `category` FROM `product` WHERE pno=".$i.";";
                 $result=mysqli_query($link, $sqlstr1);
                 $record = mysqli_fetch_object($result);
                 echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="'.$record->picture.'alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
                 echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
                 echo '<p class="tm-gallery-description">'.$record->description;
                 echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
                 echo '<button id="p"'. $i .' class="btn btn-primary" onclick="cart(1,$i)">加入購物車</button></figcaption>
                </figure>
            </article>';
            }
           
            mysqli_close($link);
        ?>
        </div> <!-- gallery page 2 -->

        <!-- gallery page 3 -->
        <div id="tm-gallery-page-高雄愛河店" class="tm-gallery-page hidden">
             <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "s0961007");
            mysqli_query($link, "SET NAMES UTF8");
            for($i=12;$i<=15;$i++){
                 $sqlstr1 = "SELECT `pno`, `pname`, `description`, `picture`, `unitprice`, `category` FROM `product` WHERE pno=".$i.";";
                 $result=mysqli_query($link, $sqlstr1);
                 $record = mysqli_fetch_object($result);
                 echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="'.$record->picture.'alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
                 echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
                 echo '<p class="tm-gallery-description">'.$record->description;
                 echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
                 echo '<button id="p"'. $i .' class="btn btn-primary" onclick="cart(1,$i)">加入購物車</button></figcaption>
                </figure>
            </article>';
            }
           
            mysqli_close($link);
        ?>
        </div> <!-- gallery page 3 -->

        <!-- gallery page 4 -->
        <div id="tm-gallery-page-彰化鹿港店" class="tm-gallery-page hidden">
             <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "s0961007");
            mysqli_query($link, "SET NAMES UTF8");
            for($i=16;$i<=19;$i++){
                 $sqlstr1 = "SELECT `pno`, `pname`, `description`, `picture`, `unitprice`, `category` FROM `product` WHERE pno=".$i.";";
                 $result=mysqli_query($link, $sqlstr1);
                 $record = mysqli_fetch_object($result);
                 echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="'.$record->picture.'alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
                 echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
                 echo '<p class="tm-gallery-description">'.$record->description;
                 echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
                 echo '<button id="p"'. $i .' class="btn btn-primary" onclick="cart(1,$i)">加入購物車</button></figcaption>
                </figure>
            </article>';
            }
           
            mysqli_close($link);
        ?>

        </div> <!-- gallery page 4 -->

        <!-- gallery page 5 -->
        <div id="tm-gallery-page-墾丁恆春店" class="tm-gallery-page hidden">
             <?php
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "s0961007");
            mysqli_query($link, "SET NAMES UTF8");
            for($i=20;$i<=27;$i++){
                 $sqlstr1 = "SELECT `pno`, `pname`, `description`, `picture`, `unitprice`, `category` FROM `product` WHERE pno=".$i.";";
                 $result=mysqli_query($link, $sqlstr1);
                 $record = mysqli_fetch_object($result);
                 echo '<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"><figure><a href="./product.php"><img src="'.$record->picture.'alt="Image" class="img-fluid tm-gallery-img" /></a><figcaption style="text-align: center;">';
                 echo '<h4 class="tm-gallery-title">'.$record->pname.'</h4>';
                 echo '<p class="tm-gallery-description">'.$record->description;
                 echo '<section class="tm-gallery-price">$'.$record->unitprice.'</section>';
                 echo '<button id="p"'. $i .' class="btn btn-primary" onclick="cart(1,$i)">加入購物車</button></figcaption>
                </figure>
            </article>';
            }
           
            mysqli_close($link);
        ?>
        </div> <!-- gallery page 5 -->
    </div>
    <?php include("footer.php") ?>
</body>

</html>