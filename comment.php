<?php 
if (session_status() === PHP_SESSION_NONE) session_start(); 
include "db.php";
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_general_ci'");
$sql= "SELECT * FROM `comments`ORDER BY `id`";
$result = mysqli_query($link, $sql);
$data_nums = mysqli_num_rows($result); //統計總比數
    $per = 3; //每頁顯示項目數量
    $pagess = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    if(isset($_GET["page"]))//假如$_GET["page"]設置，設定起始貼文與結束貼文
    {
        $start = ($page-1)*$per+1; //每一頁開始的資料序號
        if($_GET["page"]==$pagess)
        {
            $end=$start+$data_nums-($per*($pagess-1))-1;
        }
        else{
            $end=$start+2;
        }
    }else{
        $end=3;
        $start=1;
    }

?>
<!doctype html>
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
    <!--================Banner Area =================-->
    <section class="banner_area blog_banner d_flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="banner_content text-center">
                <h4>我們在此度過了 <br />美好的蜜月旅行</h4>
                <p>謝謝蜂巢飯店為我們提供美好的蜜月套房，我相信這將成為我們一生難忘的回憶。</p>
                <a href="#" class="btn white_btn button_hover">詳細資料</a>
            </div>
        </div>
    </section>

    <!--================  貼文種類區 =================-->
    <section class="blog_categorie_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="images/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>飯店活動</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>關於飯店推出活動的評論</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="images/blog/cat-post/cat-post-2.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="comment_detail.php">
                                    <h5>服務人員與套房</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>關於飯店服務人員與套房的評論</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="images/blog/cat-post/cat-post-1.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="#">
                                    <h5>食物</h5>
                                </a>
                                <div class="border_line"></div>
                                <p>關於飯店食物的評論</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--================ 貼文區 =================-->
    <!--================從資料庫挖出所有資料 =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <?php for($i=$start;$i<=$end;$i++){ //印出每一則貼文?>
                        <form name="<?php echo $i ?>" id="<?php echo $i ?>" action="comment_detail.php" method="POST">
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <?php
                                            $sql = "SELECT * FROM `comments` WHERE id='$i'";
                                            $result = mysqli_query($link, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $tag=  $row['tag'];           //存入第i行tag
                                                $name=  $row['name'];          //存入第i行name
                                                $date=  $row['date'];          //存入第i行date
                                                $path=$row['picture_path']; //存入第i行picture_path
                                                $subject=$row['subject'];          //存入第i行subject
                                                $comment=$row['comment'];            //存入第i行comment
                                                }
                                            mysqli_free_result($result); // 釋放佔用的記憶體
                                            echo $tag;
                                            $sql = "SELECT count(*) FROM `details` WHERE main=$i";//計算子留言數目
                                            $result = mysqli_query($link, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $detail_num=$row['count(*)'];  
                                            }
                                            mysqli_free_result($result); // 釋放佔用的記憶體
                                        ?>                              
                                    </div>
                                    <ul class="blog_meta list_style">
                                        <li><a >
                                            <?php echo  $name;?>  
                                        <i class="lnr lnr-user"></i></a></li>
                                        <li><a>
                                            <?php echo  $date;?> 
                                        <i class="lnr lnr-calendar-full"></i></a></li>
                                        <li><a >
                                            <?php echo  $detail_num."則留言";?> 
                                        <i class="lnr lnr-bubble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="
                                            <?php echo  $path;?> " >
                                    <div class="blog_details">
                                        <a href="comment_detail.php">
                                            <h2>
                                                <?php echo  $subject; ?> 
                                            </h2>
                                        </a>
                                        <p>
                                            <?php  echo  $comment;?> 
                                        </p>
                                        <!--編號每則留言按鈕的名字-->
                                        <button  type="submit"  name="<?php echo $i?>"  class="view_btn button_hover">查看更多</button> 
                                    </div>
                                </div>
                            </div>
                        </article>
                        </form>   
                        <?php }?>
                        <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
                                        <?php echo'<a href=?page=1 class="page-link" aria-label="Previous"'; ?>
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
                                        <?php 
                                            for( $i=1 ; $i<=$pagess ; $i++ ) {
                                                if ( $page-3 < $i && $i < $page+3 ) {
                                                    echo ' <li class="page-item "><a class="page-link" href=?page='.$i.'>'.$i.'</a></li> ';
                                                }
                                            } 
                                        ?>
		                            <li class="page-item">
                                        <?php echo'<a href=?page='.$pagess.' class="page-link" aria-label="Next"'; ?>
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                </nav>
                        <article>
                            <div class="comment-form">
                                <h4>留下您的貼文吧！</h4>
                                <form name="form1" id="form1" action="" method="POST">
                                    <div class="form-group form-inline">
                                        <div class="form-group col-lg-6 col-md-6 name">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="填寫您的姓氏"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = '填寫您的姓氏'">
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 email">
                                            <input type="text" class="form-control" id="tag" name="tag" placeholder="填寫您的文章標籤"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = '填寫您的文章標籤'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control " id="subject" name="subject" placeholder="填寫您的主旨"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = '填寫您的主旨'">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control mb-10" rows="5" name="message"
                                            placeholder="填寫您的內容" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = '填寫您的內容'" required=""></textarea>
                                    </div>
                                    <button type="submit" name='send' class="primary-btn button_hover">傳送</button>
                                </form>
                                <?php
                                    if (isset($_POST['send'])) {
                                        $name = $_POST['name'];
                                        $subject = $_POST['subject'];
                                        $content = $_POST['message'];
                                        $tag = $_POST['tag'];
                                        $image="images/blog/main-blog/m-blog-6.jpg";
                                        $index=$data_nums+1; //把留言數目加一
                                        $account=$_SESSION['account'];
                                        $sql = "INSERT INTO `comments` (`id`, `account`, `name`, `date`, `picture_path`, `tag`, `subject`, `comment`)
                                        VALUES ('$index','$account','$name',now(),'$image','$tag', '$subject', '$content')";
                                        if (!mysqli_query($link, $sql)) {
                                            die(mysqli_error());
                                        }else {
                                                //若成功將留言存進資料庫，會自動跳轉到顯示留言的頁面
                                                echo "
                                                        <script>
                                                        setTimeout(function(){window.location.href='../website/comment.php';},500);
                                                        </script>";
                                        
                                            } 
                                    } else {
                                        echo '<div class="success">Click <strong>Send</strong> when you\'re done.</div>';
                                    }
                                    mysqli_close($link); // 關閉資料庫連結
                                ?>
                            </div>
                        </article>
                    </div>
                </div>
                <!--right side-->
                <?php include("rightside.php") ?>
            </div>
        </div>
    </section>
    <?php include("footer.php") ?>
</body>

</html>