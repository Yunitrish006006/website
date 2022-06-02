<?php
    if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蜂巢飯店</title>
    <link rel="icon" href="images/honeycomb.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!-- 輪播 -->
    <section id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="images/rounding_picture/r1.jpg" class="d-block w-100" width="1148" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>經典蜂巢房</h5>
                    <p>參考蜂巢樣式設計，結合科技感打造出的房間。</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/rounding_picture/r2.jpg" class="d-block w-100" width="1148" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>飯店外觀</h5>
                    <p>一棟棟的小木屋，讓您與大自然能更加靠近！</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="images/rounding_picture/r3.jpg" class="d-block w-100" width="1148" height="500">
                <div class="carousel-caption d-none d-md-block">
                    <h5>飯店外觀</h5>
                    <p>不僅有小木屋，還有高聳的大樓供您選擇。</p>
                </div>
            </div>
        </div>
        <button onclick="play()" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">上一頁</span>
        </button>
        <button onclick="play()" class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">下一頁</span>
        </button>
    </section>
    <!--================ 推薦區 =================-->
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">房型推薦</h2>
                <p>在工作之餘，不妨放下世俗得煩惱，來場輕鬆悠閒的假期！</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="images/index_picture/room1.jpg" alt="">
                            <a href="book.php" class="btn theme_btn button_hover" onclick="play()">立即訂房</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">雙人房</h4>
                        </a>
                        <h5>$3150<small>/一晚</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="images/index_picture/room2.jpg" alt="">
                            <a href="book.php" class="btn theme_btn button_hover" onclick="play()">立即訂房</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">單人房</h4>
                        </a>
                        <h5>$1680<small>/一晚</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="images/index_picture/room3.jpg" alt="">
                            <a href="book.php" class="btn theme_btn button_hover" onclick="play()">立即訂房</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">蜜月房</h4>
                        </a>
                        <h5>$4500<small>/一晚</small></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="accomodation_item text-center">
                        <div class="hotel_img">
                            <img src="images/index_picture/room4.jpg" alt="">
                            <a href="book.php" class="btn theme_btn button_hover" onclick="play()">立即訂房</a>
                        </div>
                        <a href="#">
                            <h4 class="sec_h4">經濟雙人房</h4>
                        </a>
                        <h5>$2430<small>/一晚</small></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ 飯店設施 =================-->
    <section class="facilities_area section_gap">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_w">蜂巢飯店設施</h2>
                <p>享受飯店假期，當然要提供好的設施!</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-dinner"></i>餐廳</h4>
                        <p>蜂巢飯店匯集各國風味美食、不同類型的高級餐飲選擇，擁有安全可靠的HACCP及ISO 22000食品安全衛生認證。</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-bicycle"></i>健身房</h4>
                        <p>位於蜂巢飯店地下1樓，備有設備齊全的各種健身設備，讓您度假之餘仍保有健康與活力。</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>游泳池</h4>
                        <p>位於蜂巢飯店頂樓，陽光、寬敞的嬉戲空間，悠游在湛藍泳池，度過每一個愜意的池畔時光。</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-car"></i>租車服務</h4>
                        <p>蜂巢飯店附近有許多景點，租車服務可以讓你免除交通的困擾，只要在退房錢歸還，就可以免費租車!</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-construction"></i>娛樂中心</h4>
                        <p>位於蜂巢飯店三樓，一個舒適歡樂的度假空間，提供各項娛樂設施，小型包廂 KTV 讓您盡情歡唱！ </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="facilities_item">
                        <h4 class="sec_h4"><i class="lnr lnr-coffee-cup"></i>小型酒吧</h4>
                        <p>位於蜂巢飯店頂樓，酒吧內輕鬆愜意的氛圍，讓您放下疲憊的肩膀，並在喝酒之餘也可享受戶外的城市夜景。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ 關於飯店歷史 =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">飯店歷史&未來願景</h2>
                        <p>2012
                            蜂巢飯店於台中賣快建成，剛開幕就獲得熱烈的回響，直至今日也依舊...飯店在2018年決定擴大營業，於彰化、高雄、墾丁開立分館。飯店外部使用了花崗岩的材料，以三種顏色推疊出蜂巢的形狀，別具獨特和創新的外觀設計，
                            吸引了不少慕名而來的顧客。
                        </p>
                        <a href="about.php" class="button_hover theme_btn_two" onclick="play()">了解更多</a>
                    </div>
                </div>
                <div class="col-md-6" style="padding: 1rem;">
                    <img src="images/rounding_picture/r3.jpg" width="500px" height="200px">
                </div>
            </div>
        </div>
    </section>
    <!--================ 飯店留言板 =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                <h2 class="title_color">蜂巢飯店留言板</h2>
                <p>凡事住過的旅客都能在此留言，有興趣的旅客也能透過客人的評論，來決定是否入住本飯店。</p>
            </div>
            <div class="row mb_30">
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="images/index_picture/blog-1.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="book.php" class="button_hover tag_btn" onclick="play()">立即訂房</a>
                                <a href="comment.php" class="button_hover tag_btn" onclick="play()">更多評論</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">來自花蓮的方小姐</h4>
                            </a>
                            <p>我覺得房間很舒適，服務人員也相當親切，讓我在疲憊的工作之餘放鬆了不少。</p>
                            <h6 class="date title_color">27st January,2021</h6>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="images/index_picture/blog-2.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="book.php" class="button_hover tag_btn" onclick="play()">立即訂房</a>
                                <a href="comment.php" class="button_hover tag_btn" onclick="play()">更多評論</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">來自台北的陳先生</h4>
                            </a>
                            <p>我覺得飯店服務都很好，但是飯店的空調不夠強，今天晚上那麼熱，讓我一整晚都很難入睡！</p>
                            <h6 class="date title_color">3st July,2020</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-recent-blog-post">
                        <div class="thumb">
                            <img class="img-fluid" src="images/index_picture/blog-3.jpg" alt="post">
                        </div>
                        <div class="details">
                            <div class="tags">
                                <a href="book.php" class="button_hover tag_btn" onclick="play()">立即訂房</a>
                                <a href="comment.php" class="button_hover tag_btn" onclick="play()">更多評論</a>
                            </div>
                            <a href="#">
                                <h4 class="sec_h4">來自宜蘭的林先生</h4>
                            </a>
                            <p>飯店的人員都很親切，可是隔壁房間的小孩一直在尖叫，害我整晚都睡不著！</p>
                            <h6 class="date title_color">14st December,2018</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php") ?>
</body>
</html>