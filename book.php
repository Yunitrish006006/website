<!DOCTYPE html>
<html lang="en">
<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!-- 分頁產生內容 -->
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
        $bought_items = array();

        if(isset($_SESSION['account'])) {
            $link = mysqli_connect("localhost","root","");     
            mysqli_select_db($link, "beehotel");
            mysqli_query($link, "SET NAMES UTF8");
            $id_of_account = $_SESSION['account_id'];
            if($cart_result = mysqli_query($link,"SELECT * FROM cart WHERE account_id = $id_of_account")) {
                while ($cart_item = mysqli_fetch_assoc($cart_result)) {
                    array_push($bought_items,$cart_item['pno']);
                }
            }
        }

        while($room = mysqli_fetch_assoc($result)) {
            $pno = $room['pno'];
            $pname = $room['pname'];
            $description = $room['description'];
            $file_type = $room['file_type'];
            $unitprice = $room['unitprice'];
            $cart_item_id = $pno;
            if(isset($_SESSION['account'])) {
                for($i=0;$i<sizeof($bought_items);$i++) {
                    if($pno==$bought_items[$i])
                    {
                        $status_of_item = 'btn-danger';
                        $text_of_item = '移出';
                        $cart_operation = 'remove';
                    }
                    else {
                        $status_of_item = 'btn-primary';
                        $text_of_item = '加入';
                        $cart_operation = 'add';
                    }
                }
            }
            else {
                $status_of_item = 'btn-primary';
                $text_of_item = '加入';
                $cart_operation = 'add';
            }
            
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
                        '<form action="" method="post" >'.
                            '<input type="hidden" name="cart_operation" value="'.$cart_operation.'">'.
                            '<input type="hidden" name="cart_item_id" value="'.$cart_item_id.'">'.
                            '<button id="p'. $pno .'" class="btn '. $status_of_item .'" type = submit>'.
                                $text_of_item .'購物車' .
                            '</button>'.
                        '</form>'.
                    '</figcaption>'.
                '</figure>'.
            '</article>';
            $items .= $item;
        }
    }
    mysqli_close($link);
    $items .= '</div>';
    
?>

<!-- cart sql 操作 -->
<?php 
    if(isset($_POST['cart_operation']) && isset($_SESSION['account'])) {
        $cart_link = mysqli_connect("localhost","root","");     
        mysqli_select_db($cart_link, "beehotel");
        mysqli_query($cart_link, "SET NAMES UTF8");
        $id_of_account = $_SESSION['account_id'];
        switch($_POST['cart_operation']){
            case "add":
                if(!($cart_result = mysqli_query($cart_link,"SELECT * FROM cart WHERE account_id = '$id_of_account' AND pno = '$cart_item_id'"))) {
                    mysqli_query($cart_link,"INSERT INTO cart (account_id, pno) VALUES ('$id_of_account', '$cart_item_id');");
                }
            case "remove":
                if($cart_result = mysqli_query($cart_link,"SELECT * FROM cart WHERE account_id = '$id_of_account' AND pno = '$cart_item_id'")) {
                    mysqli_query($cart_link,"DELETE FROM cart WHERE cart.id = '$cart_item_id'");
                }
            default:
            break;
        }
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
    <?php include("footer.php") ?>
</body>

</html>