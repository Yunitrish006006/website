<!DOCTYPE html>
<html lang="en">
<?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    if(isset($_SESSION['cart'])){
        $arr_cart = array_filter(explode(",",$_SESSION['cart']));
    }
?>
<?php
    if(isset($_POST['require_category']))
    {
        $category = $_POST['require_category'];
    }
    else {
        $category = '台北旗艦店';
    }
    $items = "";
    $items .= '<div id="tm-gallery-page-' . $category . '" class="tm-gallery-page">';
    $link = mysqli_connect("localhost","root","");     
    mysqli_select_db($link, "beehotel");
    mysqli_query($link, "SET NAMES UTF8");
    if($result = mysqli_query($link,"SELECT * FROM `product` WHERE `category` = '$category'"))
    {
        while($room = mysqli_fetch_assoc($result)) {
            $pno = $room['pno'];
            $pname = $room['pname'];
            $description = $room['description'];
            $file_type = $room['file_type'];
            $unitprice = $room['unitprice'];
            $item="";
            $item .= '
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">' .
                '<figure>'.
                    '<a href="./product.php">'.
                        '<img src="images/product/' . $file_type .
                        '" alt="Image" class="img-fluid tm-gallery-img" />'.
                    '</a>'.
                    '<figcaption style="text-align: center;">'.
                        '<h4 class="tm-gallery-title">'.
                            $pname.
                        '</h4>'.
                        '<p class="tm-gallery-description">'.
                            $description.
                        '</p>'.
                        '<section class="tm-gallery-price">$'.
                            $unitprice.
                        '</section>'.
                        '<button id="p'. $pno .'" class="btn btn-primary" onclick="cart(1,'. $pno .')">'.
                            '加入購物車'.
                        '</button>'.
                    '</figcaption>'.
                '</figure>'.
            '</article>';
            $items .= $item;
        }
    }
    mysqli_close($link);
    $items .= '</div>';
    
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
    <section style="padding: 5% 20%; display:flex;">
        <span style="margin:0px 2px;"><form action="" method="post" ><input type="hidden" name='require_category' value="台北旗艦店"><input type="submit" class="btn theme_btn button_hover" value = "台北旗艦店"></form></span>
        <span style="margin:0px 2px;"><form action="" method="post" ><input type="hidden" name='require_category' value="台中逢甲店"><input type="submit" class="btn theme_btn button_hover" value = "台中逢甲店"></form></span>
        <span style="margin:0px 2px;"><form action="" method="post" ><input type="hidden" name='require_category' value="高雄愛河店"><input type="submit" class="btn theme_btn button_hover" value = "高雄愛河店"></form></span>
        <span style="margin:0px 2px;"><form action="" method="post" ><input type="hidden" name='require_category' value="彰化鹿港店"><input type="submit" class="btn theme_btn button_hover" value = "彰化鹿港店"></form></span>
        <span style="margin:0px 2px;"><form action="" method="post" ><input type="hidden" name='require_category' value="墾丁恆春店"><input type="submit" class="btn theme_btn button_hover" value = "墾丁恆春店"></form></span>
    </section>
    
    <!-- Gallery -->
    <div class="row tm-gallery">
        <?php echo $items; ?>
    </div>
</body>

</html>