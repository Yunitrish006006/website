<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理</title>
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.2" data-stellar-vertical-offset="0" data-background=""></div>
        </div>
        <div class="hotel_booking_area position">
            <div class="container">
                <div class="hotel_booking_table">
                    <div class="col-md-3">
                        <h2>選擇分館</h2>
                    </div>
                    <div class="col-md-9">
                        <div class="boking_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="book_tabel_item">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
                                                <input type='text' class="form-control" placeholder="日期篩選" />
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
            
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">經典蜂巢房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格"
                                    onfocus="this.placeholder = '$2200'" onblur="this.placeholder = '$4100'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/t-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">雙人商務套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$2200'" onblur="this.placeholder = '$2200'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/t-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">單人商務套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$2200'" onblur="this.placeholder = '$2200'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/t-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">雅致客房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$2300'" onblur="this.placeholder = '$2300'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/t-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">經典客房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3100'" onblur="this.placeholder = '$3100'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/t-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">經典客房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3500'" onblur="this.placeholder = '$3500'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/t-5.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">經典套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3350'" onblur="this.placeholder = '$3350'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
        </div> <!-- gallery page 1 -->

        <!-- gallery page 2 -->
        <div id="tm-gallery-page-台中逢甲店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/k-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">商務套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3160'" onblur="this.placeholder = '$3160'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/k-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">海景雙人房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3500'" onblur="this.placeholder = '$3500'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/K-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">典雅四人房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3500'" onblur="this.placeholder = '$3500'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/k-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">大道套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$4800'" onblur="this.placeholder = '$4800'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/k-5.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">行政套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3350'" onblur="this.placeholder = '$3350'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>

        </div> <!-- gallery page 2 -->

        <!-- gallery page 3 -->
        <div id="tm-gallery-page-高雄愛河店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/c-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">商務套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$4200'" onblur="this.placeholder = '$4200'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/c-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">海景雙人房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$4400'" onblur="this.placeholder = '$4400'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/c-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">典雅四人房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$5300'" onblur="this.placeholder = '$5300'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/c-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">森林套房</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3750'" onblur="this.placeholder = '$3750'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
        </div> <!-- gallery page 3 -->

        <!-- gallery page 4 -->
        <div id="tm-gallery-page-彰化鹿港店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/p-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">英倫皇風</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3900'" onblur="this.placeholder = '$3900'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/p-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">卡米樂</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3750'" onblur="this.placeholder = '$3750'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/p-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">十里洋場</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$4200'" onblur="this.placeholder = '$4200'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/p-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">大唐盛世</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$4500'" onblur="this.placeholder = '$4500'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
        </div> <!-- gallery page 4 -->

        <!-- gallery page 5 -->
        <div id="tm-gallery-page-墾丁恆春店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">枯麻主題一館</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$2350'" onblur="this.placeholder = '$2350'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">枯麻主題二館</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$2400'" onblur="this.placeholder = '$2400'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">枯麻主題三館</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$2450'" onblur="this.placeholder = '$2450'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">妖怪列車</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$2300'" onblur="this.placeholder = '$2300'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-5.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">粉紅城堡</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3350'" onblur="this.placeholder = '$3350'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-6.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">百老匯</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3500'" onblur="this.placeholder = '$3500'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-7.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">歡樂屋</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$4250'" onblur="this.placeholder = '$4250'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.html"><img src="images/r-8.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">夜森之謎</h4>
                        <div class="book_tabel_item">
                            <div class="input-group">
                                <select class="wide">
                                    <option data-display="房號">房號</option>
                                    <option value="202">202</option>
                                    <option value="403">403</option>
                                    <option value="201">201</option>
                                </select>
                            </div>
                            <p class="tm-gallery-description"><input type="text" class="form-control" id="price" placeholder="價格" onfocus="this.placeholder = '$3800'" onblur="this.placeholder = '$3800'"></p>
                            <a class="book_now_btn button_hover" href="">更改定價</a>
                        </div>
                    </figcaption>
                </figure>
            </article>
        </div> <!-- gallery page 5 -->
    </div>
    </main>
    <?php include("footer.php") ?>
    </body>
</html>