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
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="搜尋貼文">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i
                                            class="lnr lnr-magnifier"></i></button>
                                </span>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="images/blog/author.png" alt="">
                            <h4>林昀佑</h4>
                            <p>曾住過本飯店名人</p>
                            <div class="social_icon">
                                <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.google.com"><i class="fa fa-google"></i></a>
                                <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
                            </div>
                            <p>疫情期間選擇婚期跟宴客場地真的需要時間跟精神。
                                感謝台中蜂巢飯店訂席中心的佩宜從諮詢到當天婚宴都給予我們新人適時的回覆，
                                也感謝當天所有工作人員的協助，讓婚禮流程都順利完成。值得一提的是婚宴菜色也是我們一直稱讚的部分，

                                感謝主廚針對我們的需求進行菜色的細節調整，好幾位食客級親友都表示這手路很可以啊給推。</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">熱門貼文</h3>
                            <div class="media post_item">
                                <img src="images/blog/post1.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>服務人員請不要氣餒</h3>
                                    </a>
                                    <p>5年前</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/blog/post2.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>關於房間設計與服務人員看法</h3>
                                    </a>
                                    <p>2年前</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/blog/post3.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>再也不來這住了</h3>
                                    </a>
                                    <p>2年前</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="images/blog/post4.jpg" alt="post">
                                <div class="media-body">
                                    <a href="blog-details.php">
                                        <h3>這家飯店的婚禮佈置</h3>
                                    </a>
                                    <p>5年前</p>
                                </div>
                            </div>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="images/logo.png" width="300" height="250"></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">貼文種類</h4>
                            <ul class="list_style cat-list">
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>食物</p>
                                        <p>37</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>套房</p>
                                        <p>24</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>服務人員</p>
                                        <p>59</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店活動</p>
                                        <p>29</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店設施</p>
                                        <p>15</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店外觀</p>
                                        <p>09</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex justify-content-between">
                                        <p>飯店cp值</p>
                                        <p>44</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php") ?>
</body>

</html>