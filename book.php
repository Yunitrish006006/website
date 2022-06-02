<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!-- 購物車數量 -->
<?php
if(isset($_SESSION['account'])){
    include("db.php");     
    mysqli_query($link, "SET NAMES UTF8");
        $account = $_SESSION['account_id'];
        $cart_quantity=0;
        if($cart_result = mysqli_query($link,"SELECT * FROM cart WHERE account_id = $account")) {
            while ($cart_item = mysqli_fetch_assoc($cart_result)) {
                $cart_quantity++;
            }
        }
        $_SESSION["cart_quantity"]=$cart_quantity;
    mysqli_close($link);
}
?>
<!-- 分頁產生內容 -->
<?php
    if(isset($_GET["sid"])) {
        $sid=$_GET["sid"];
        switch($sid){
            case 1:
                $category="全部房型";
                break;
            case 2:
                $category="台北旗艦店";
                break;
            case 3:
                $category="台中逢甲店";
                break;
            case 4:
                $category="高雄愛河店";
                break;
            case 5:
                $category="彰化鹿港店";
                break;
            case 6:
                $category="墾丁恆春店";
                break;
            // default:
            break;
        }   

    }else {
        $category = '全部房型';
    }
    if($category=="全部房型"){
        $sql="SELECT * FROM product";

    }else{
        $sql="SELECT * FROM product WHERE category = '$category'";
    }
    if(isset($_POST['ser'])){
        $search=$_POST['ser'];
        if($category!="全部房型"){
            $sql="SELECT * FROM product where category = '$category' and pname like '%".$search."%'";
        }else{
            $sql="SELECT * FROM product where pname like '%".$search."%'";
        }
    }
    $items = "";
    $items .= '<div id="tm-gallery-page-' . $category . '" class="tm-gallery-page">';
    include("db.php");   
    mysqli_query($link, "SET NAMES UTF8");
    $result=mysqli_query($link,$sql);
        $data_nums = mysqli_num_rows($result);
        $per = 8; 
        $pages = ceil($data_nums/$per);
        if (!isset($_GET["page"])){ 
            $page=1;
        } else {
            $page = intval($_GET["page"]);
        }
        $start = ($page-1)*$per; 
        mysqli_free_result($result);
        $sql=$sql.' LIMIT '.$start.', '.$per;
    if($result = mysqli_query($link,$sql)) {
        $bought_items = array();
        if(isset($_SESSION['account'])) {
            include("db.php");        
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
            $cart_operation='';
            $status_of_item='';
            $text_of_item='';
            if(isset($_SESSION['account'])) {
                if(sizeof($bought_items)!=0){
                    for($i=0;$i<sizeof($bought_items);$i++) {
                    if($pno==$bought_items[$i])
                    {
                        $status_of_item = 'btn-danger';
                        $text_of_item = '移出';
                        $cart_operation = 'remove';
                        break;
                    }
                    else {
                        $status_of_item = 'btn-primary';
                        $text_of_item = '加入';
                        $cart_operation = 'add';
                    }
                }
                }else{
                    $status_of_item = 'btn-primary';
                    $text_of_item = '加入';
                    $cart_operation = 'add';
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
                '<figure><img src="images/product/' . $file_type .
                    '" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption style="text-align: center;">'.
                        '<a href="product.php?pid='.$pno.'"><h4 class="tm-gallery-title">'.
                            $pname.
                        '</h4></a>'.
                        '<p class="tm-gallery-description" style="height:140px">'.
                            $description.
                        '</p>'.
                        '<section class="tm-gallery-price">$'.
                            $unitprice.
                        '</section>'.
                        '<form action="" method="post" >'.
                            '<input type="hidden" name="cart_operation" value="'.$cart_operation.'">'.
                            '<input type="hidden" name="cart_item_id" value="'.$pno.'">'.
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
    $items .= '</div>';
    if(isset($_POST['cart_operation']) && isset($_SESSION['account'])) {
        include("db.php");        
        mysqli_query($link, "SET NAMES UTF8");
        $add_cart=$_POST['cart_item_id'];
        $id_of_account = $_SESSION['account_id'];
        switch($_POST['cart_operation']){
            case "add":
                mysqli_query($link,"INSERT INTO cart (account_id, pno) VALUES ('$id_of_account', '$add_cart');");
                break;
            case "remove":
                if($cartop_result = mysqli_query($link,"SELECT * FROM cart WHERE account_id = '$id_of_account' AND pno = '$add_cart'")) {
                    mysqli_query($link,"DELETE FROM cart WHERE cart.pno = '$add_cart'");
                }
                break;
            // default:
            break;
        }   
            mysqli_query($link, "SET NAMES UTF8");
            $account = $_SESSION['account_id'];
            $cart_quantity=0;
            if($cart_result = mysqli_query($link,"SELECT * FROM cart WHERE account_id = $account")) {
                while ($cart_item = mysqli_fetch_assoc($cart_result)) {
                        $cart_quantity++;
                    }
                }
            $_SESSION["cart_quantity"]=$cart_quantity;
        mysqli_close($link);        
        header("Location:book.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/book.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/honeycomb.png" type="image/x-icon">
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
    <section style="padding: 2.5rem 15%; display:flex;">
        <span  class="col col-sm"><a class="btn theme_btn button_hover" href="book.php?sid=1">全部房型</a></span>
        <span  class="col col-sm"><a class="btn theme_btn button_hover" href="book.php?sid=2">台北旗艦店</a></span>
        <span  class="col col-sm"><a class="btn theme_btn button_hover" href="book.php?sid=3">台中逢甲店</a></span>
        <span  class="col col-sm"><a class="btn theme_btn button_hover" href="book.php?sid=4">高雄愛河店</a></span>
        <span  class="col col-sm"><a class="btn theme_btn button_hover" href="book.php?sid=5">彰化鹿港店</a></span>
        <span  class="col col-sm"><a class="btn theme_btn button_hover" href="book.php?sid=6">墾丁恆春店</a></span>
    </section>
    <?php
    if(!isset($_GET['page']) || ($_GET['page']==1)){
        echo '<div class="row" style="justify-content: center; margin-bottom:2rem;">
            <form action="" method="post" style="display:flex">
            <input class="form-control me-2 " type="search" name="ser" placeholder="商品關鍵字搜尋" aria-label="Search" style="width:70%;"><input type="hidden" name="require_category" value="商品關鍵字查詢">
            <button class="btn btn-outline-success" type="submit">搜尋</button>
            </form></div>';
    }

    ?>
    
    <!-- Gallery -->
    <div class="row tm-gallery">
        <?php echo $items; ?>
    </div>
    <nav class="blog-pagination justify-content-center d-flex" > 
            <ul class="pagination">
                <li class="page-item">
                    <?php 
                    if(isset($_GET['sid'])){
                                    $s=$_GET['sid'];
                                }else{
                                    $s=1;
                                }
                    echo'<a href="book.php?sid='.$s.'&page=1" class="page-link" aria-label="Previous"'; ?>
                            <span aria-hidden="true">
                                    <span class="lnr lnr-chevron-left"></span>
                                    </span>
                                </a>
                                </li>
                                <?php 
                                if(isset($_GET['sid'])){
                                    $s=$_GET['sid'];
                                }else{
                                    $s=1;
                                }
                                
                                    for( $i=1 ; $i<=$pages ; $i++ ) {
                                        if ( $page-3 < $i && $i < $page+3 ) {
                                                echo ' <li class="page-item "><a class="page-link" href="book.php?sid='.$s.'&page='.$i.'">'.$i.'</a></li> ';
                                            }
                                        } 
                                        ?>
                                <li class="page-item">
                                    <?php echo'<a href="book.php?sid='.$s.'&page='.$pages.'" class="page-link" aria-label="Next"'; ?>
                                        <span aria-hidden="true">
                                            <span class="lnr lnr-chevron-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
    <?php include("footer.php") ?>
</body>

</html>