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
                                <img class="img-fluid" src="images/blog/feature-img1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">食物,</a>
                                    <a href="#">飯店活動,</a>
                                    <a href="#">服務人員,</a>
                                    <a href="#">套房</a>
                                </div>
                                <ul class="blog_meta list_style">
                                    <li><a href="#">林小姐<i class="lnr lnr-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="lnr lnr-calendar-full"></i></a></li>
                                    <li><a href="#">1.2M 觀看者<i class="lnr lnr-eye"></i></a></li>
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
                            <h2>服務人員請不要氣餒</h2>
                            <p class="excert">
                                好幾年公司尾牙都在此舉辦，今年當然也不例外，疫情當下在台灣還能大啖美食很幸福。今年有個小插曲，
                                服務員在送餐時（玉露海石斑）不小心湯汁濺灑在我衣服整隻袖子。
                            </p>
                            <p>
                                感覺服務員很生澀應該是工讀生，
                                用餐過程到結束來了好幾位主管來跟我致歉，及詢問我需要什麼善後服務之類，還說要拿件衣服給我換，
                                或者把衣服送過來清洗都沒關係，我回沒關係不介意別責怪那位服務員，希望那位工讀生別往心裡去，
                                服務業辛苦了。
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
                                        <h4>這家飯店的婚禮佈置</h4>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>下個貼文</p>
                                    <a href="#">
                                        <h4>關於房間設計與服務人員看法</h4>
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