<!DOCTYPE html>
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
        <div class="container">
            <div class="option">
                <ul class="nav nav-pills nav-fill">
                    <li><a href="index.php">首頁/</a></li>
                    <li><a href="book.php">訂房/</a></li>
                    <li><a href="product.php">雙人商務套房</a></li>
                </ul>
            </div>
            <main>
                <div class="left">
                    <div class="cards" style="width: 35rem; margin-left: 3rem;">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./images/t-1.jpg" class="d-block w-100" alt="..." width="600px" height="390px">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/t-1-2.jpg" class="d-block w-100" alt="..." width="600px" height="390px">
                            </div>
                            <div class="carousel-item">
                                <img src="./images/t-1-3.jpg" class="d-block w-100" alt="..." width="600px" height="390px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                        <div class="card-body">
                            <h3>商品介紹</h3>
                            <hr>
                            <p class="card-text">位於3~4樓低樓層一系列商務套房，安靜舒適、空間精巧、設備齊全，現代簡約風格為商旅出差或輕旅住宿最佳選擇。</p>
                            <h3>主要設備</h3>
                            <hr>
                            <p class="card-text">–獨立淋浴間(開放式洗手台)　–冰箱　–液晶電視　–免費有線及無線寬頻上網　–快煮電熱水壺　–電話　–免費礦泉水　–免費咖啡及茗茶沖飲包
                            </p>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="card-body">
                        <h3>雙人商務套房</h3>
                        <h1>NT$3500</h1>
                        <label for="date1">入住日期</label>
                        <input id="date" name="date1" class="date1" type="date"><br>
                        <label for="date2">退住日期</label>
                        <input id="date" name="date2" class="date2" type="date"><br>
                        <div class="input-group" style="margin-bottom: 1rem;">
                            <select class="wide" name="night" style="margin-left:0.5rem; width: 140px;">
                                <option data-display="房間數量">房間數量</option>
                                <option value="1"> 1間 </option>
                                <option value="2"> 2間 </option>
                                <option value="3"> 3間 </option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="width:300px;">加入購物車</button>
                        <h5>注意事項</h5>
                        <hr>
                        <p>無</p>
                    </div>
                </div>

            </main>
        </div>
            
            <!--================ 推薦區 =================-->
            <section class="accomodation_area section_gap">
                <div class="container">
                    <div class="section_title text-center">
                        <h2 class="title_color">房型推薦</h2>
                    </div>
                    <div class="row mb_30">
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="images/t-1.jpg" alt="" width="263px" height="270px">
                                    <a href="#" class="btn theme_btn button_hover">加入購物車</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">雙人商務套房</h4>
                                </a>
                                <h5>$2800<small>/一晚</small></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="images/c-1.jpg" alt="" width="263px" height="270px">
                                    <a href="#" class="btn theme_btn button_hover">加入購物車</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">商務套房</h4>
                                </a>
                                <h5>$4200<small>/一晚</small></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="images/r-1.jpg" alt="" width="263px" height="270px">
                                    <a href="#" class="btn theme_btn button_hover">加入購物車</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">枯麻主題一館</h4>
                                </a>
                                <h5>$2350<small>/一晚</small></h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="accomodation_item text-center">
                                <div class="hotel_img">
                                    <img src="images/k-1.jpg" alt="" width="263px" height="270px">
                                    <a href="#" class="btn theme_btn button_hover">加入購物車</a>
                                </div>
                                <a href="#">
                                    <h4 class="sec_h4">商務套房</h4>
                                </a>
                                <h5>$3160<small>/一晚</small></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php include("import.php") ?>
    </body>    
</html>