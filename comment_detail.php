<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/comment.js"></script>
    <title>蜂巢飯店</title>
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!--================背景區=================-->
    <section class="breadcrumb_area blog_banner_two">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle f_48">詳細評論</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">主頁</a></li>
                    <li><a href="blog.php">評論</a></li>
                    <li class="active">詳細評論</li>
                </ol>
            </div>
        </div>
    </section>

    <!--================貼文 =================-->
    <section class="blog_area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <img class="img-fluid" src="
                                    <?php
                                        $pages=$_SESSION['page'];
                                        include "db.php";
                                        $sql = "SELECT * FROM `comments` WHERE id='$pages'";
                                        $result = mysqli_query($db, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo  $row['picture_path'];
                                        }
                                    ?>   
                                " alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <?php
                                        include "db.php";
                                        $sql = "SELECT * FROM `comments` WHERE id='$pages'";
                                        $result = mysqli_query($db, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo  $row['tag'];
                                        }
                                    ?>  
                                </div>
                                <ul class="blog_meta list_style">
                                    <li><a href="#">
                                        <?php
                                            include "db.php";
                                            $sql = "SELECT * FROM `comments` WHERE id='$pages'";
                                            $result = mysqli_query($db, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo  $row['name'];
                                            }
                                        ?>  
                                    <i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">
                                        <?php
                                            include "db.php";
                                            $sql = "SELECT * FROM `comments` WHERE id='$pages'";
                                            $result = mysqli_query($db, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo  $row['date'];
                                            }
                                        ?> 
                                    <i class="lnr lnr-calendar-full"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.google.com"><i class="fa fa-google"></i></a>
                                    <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2>
                                <?php
                                    include "db.php";
                                    $sql = "SELECT * FROM `comments` WHERE id='$pages'";
                                    $result = mysqli_query($db, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo  $row['subject'];
                                    }
                                ?> 
                            </h2>
                            <p class="excert">
                                <?php           
                                    include "db.php";
                                    $sql = "SELECT * FROM `comments` WHERE id='$pages'";
                                    $result = mysqli_query($db, $sql);
                                     while ($row = mysqli_fetch_assoc($result)) {
                                        echo  $row['comment'];
                                        }
                                ?> 
                            </p>

                        </div>

                    </div>
                    <!---      上個貼文連結與下個貼文連結  -->
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="images/blog/prev.jpg" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>上個貼文</p>
                                    <a href="#">
                                        <h4>
                                            <?php
                                                include "db.php";
                                                $pages_last=$_SESSION['page'];
                                                $sql = "SELECT count(*) FROM `comments` WHERE 1";
                                                $result = mysqli_query($db, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $max=$row['count(*)'];
                                                }
                                                if($pages>1){
                                                    $pages_last=$pages-1;                         
                                                }else{
                                                    $pages_last=$max;
                                                }
                                                $sql = "SELECT * FROM `comments` WHERE id='$pages_last'";
                                                $result = mysqli_query($db, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo  $row['subject'];
                                                } 
                                            ?> 
                                        </h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>下個貼文</p>
                                    <a href="#">
                                        <h4>
                                            <?php
                                                $pages_next=$_SESSION['page'];
                                                include "db.php";
                                                if($pages_next==$max){
                                                    $pages_next=1;
                                                }else{
                                                    $pages_next=$pages_next+1;
                                                }
                                                $sql = "SELECT * FROM `comments` WHERE id='$pages_next'";
                                                $result = mysqli_query($db, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo  $row['subject'];
                                                } 
                                            ?> 
                                        </h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="images/blog/next.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---  留言區   -->
                    <?php include("message.php") ?>
                </div>
                <!---      右側頁面  -->
                <?php include("rightside2.php") ?>
            </div>
        </div>
    </section>
    <?php include("footer.php") ?>
</body>

</html>