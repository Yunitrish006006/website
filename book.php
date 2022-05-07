<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION['cart'])){
        $arr_cart = array_filter(explode(",",$_SESSION['cart']));
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
                    <a href="./product.php"><img src="images/r1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>
            
                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">經典蜂巢房</h4>
                        <p class="tm-gallery-description">參考蜂巢樣式設計，結合科技感打造出的房間。多孔洞的設計使得整個房間是通風的，冬暖夏涼。
                        <section class="tm-gallery-price">$4100</section>
                        </p>
                        <button id="p1" class="btn btn-primary" onclick="cart(1,1)">加入購物車</button>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/t-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">雙人商務套房</h4>
                        <p class="tm-gallery-description">典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。
                        <section class="tm-gallery-price">$2800</section>
                        </p>
                        <button id="p2" class="btn btn-primary" onclick="cart(1,2)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/t-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">單人商務套房</h4>
                        <p class="tm-gallery-description">精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。
                        <section class="tm-gallery-price">$2200</section>
                        </p>
                        <button id="p3" class="btn btn-primary" onclick="cart(1,3)">加入購物車</button>
                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/t-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">雅致客房</h4>
                        <p class="tm-gallery-description">客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。
                        <section class="tm-gallery-price">$2300</section>
                        </p>
                        <button id="p4" class="btn btn-primary" onclick="cart(1,4)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/t-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">經典客房</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$3100</section>
                        </p>
                        <button id="p5" class="btn btn-primary" onclick="cart(1,5)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/t-5.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">總統套房</h4>
                        <p class="tm-gallery-description">明亮的光線、溫馨的陳設及獨具的風格藝術品，打造20坪客房及客廳的專屬私人休憩空間。
                        <section class="tm-gallery-price">$3350</section>
                        </p>
                        <button id="p6" class="btn btn-primary" onclick="cart(1,6)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>

        </div> <!-- gallery page 1 -->

        <!-- gallery page 2 -->
        <div id="tm-gallery-page-台中逢甲店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/k-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">商務套房</h4>
                        <p class="tm-gallery-description">典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。
                        <section class="tm-gallery-price">$3160</section>
                        </p>
                        <button id="p7" class="btn btn-primary" onclick="cart(1,7)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/k-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">海景雙人房</h4>
                        <p class="tm-gallery-description">精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。
                        <section class="tm-gallery-price">$3500</section>
                        </p>
                        <button id="p8" class="btn btn-primary" onclick="cart(1,8)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/K-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">典雅四人房</h4>
                        <p class="tm-gallery-description">客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。
                        <section class="tm-gallery-price">$5000</section>
                        </p>
                        <button id="p9" class="btn btn-primary" onclick="cart(1,9)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/k-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">大道套房</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$4800</section>
                        </p>
                        <button id="p10" class="btn btn-primary" onclick="cart(1,10)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/k-5.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">行政套房</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$3350</section>
                        </p>
                        <button id="p11" class="btn btn-primary" onclick="cart(1,11)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>

        </div> <!-- gallery page 2 -->

        <!-- gallery page 3 -->
        <div id="tm-gallery-page-高雄愛河店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/c-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">商務套房</h4>
                        <p class="tm-gallery-description">典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。
                        <section class="tm-gallery-price">$4200</section>
                        </p>
                        <button id="p12" class="btn btn-primary" onclick="cart(1,12)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/c-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">海景雙人房</h4>
                        <p class="tm-gallery-description">精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。
                        <section class="tm-gallery-price">$4400</section>
                        </p>
                        <button id="p13" class="btn btn-primary" onclick="cart(1,13)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/c-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">典雅四人房</h4>
                        <p class="tm-gallery-description">客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。
                        <section class="tm-gallery-price">$5300</section>
                        </p>
                        <button id="p14" class="btn btn-primary" onclick="cart(1,14)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/c-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">森林套房</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$3750</section>
                        </p>
                        <button id="p15" class="btn btn-primary" onclick="cart(1,15)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>

        </div> <!-- gallery page 3 -->

        <!-- gallery page 4 -->
        <div id="tm-gallery-page-彰化鹿港店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/p-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">英倫皇風</h4>
                        <p class="tm-gallery-description">典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。
                        <section class="tm-gallery-price">$3900</section>
                        </p>
                         <button id="p16" class="btn btn-primary" onclick="cart(1,16)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/p-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">卡米樂</h4>
                        <p class="tm-gallery-description">精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。
                        <section class="tm-gallery-price">$3750</section>
                        </p>
                         <button id="p17" class="btn btn-primary" onclick="cart(1,17)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/p-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">十里洋場</h4>
                        <p class="tm-gallery-description">客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。
                        <section class="tm-gallery-price">$4200</section>
                        </p>
                         <button id="p18" class="btn btn-primary" onclick="cart(1,18)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/p-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">大唐盛世</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$4500</section>
                        </p>
                         <button id="p19" class="btn btn-primary" onclick="cart(1,19)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>

        </div> <!-- gallery page 4 -->

        <!-- gallery page 5 -->
        <div id="tm-gallery-page-墾丁恆春店" class="tm-gallery-page hidden">
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-1.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">枯麻主題一館</h4>
                        <p class="tm-gallery-description">典雅沈穩的空間佈置搭配柔軟舒適床組，營造出全然放鬆環境，讓疲累的身心享有片刻寧靜，換來一夜好眠。
                        <section class="tm-gallery-price">$2350</section>
                        </p>
                         <button id="p20" class="btn btn-primary" onclick="cart(1,20)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-2.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">枯麻主題二館</h4>
                        <p class="tm-gallery-description">精緻且設備齊全的客房，舒適而毫無拘束感，讓您避免外界干擾，暫忘都市的塵囂，感受如家的自在與悠閒。
                        <section class="tm-gallery-price">$2400</section>
                        </p>
                         <button id="p21" class="btn btn-primary" onclick="cart(1,21)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-3.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">枯麻主題三館</h4>
                        <p class="tm-gallery-description">客房空間寬敞明亮，配備遼闊的視野、風格獨特的藝術畫作，疲累的旅人在此可享有舒適的休憩。
                        <section class="tm-gallery-price">$2450</section>
                        </p>
                         <button id="p22" class="btn btn-primary" onclick="cart(1,22)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-4.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">妖怪列車</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$2300</section>
                        </p>
                         <button id="p23" class="btn btn-primary" onclick="cart(1,23)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-5.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">粉紅城堡</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$3350</section>
                        </p>
                         <button id="p24" class="btn btn-primary" onclick="cart(1,24)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-6.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">百老匯</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$3500</section>
                        </p>
                         <button id="p25" class="btn btn-primary" onclick="cart(1,25)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-7.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">歡樂屋</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$4250</section>
                        </p>
                         <button id="p26" class="btn btn-primary" onclick="cart(1,26)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <a href="./product.php"><img src="images/r-8.jpg" alt="Image" class="img-fluid tm-gallery-img" /></a>

                    <figcaption style="text-align: center;">
                        <h4 class="tm-gallery-title">夜森之謎</h4>
                        <p class="tm-gallery-description">運用溫暖色調及富時尚感的傢俱擺設，打造舒適、寬敞的休憩環境，更適合長期商旅住宿。
                        <section class="tm-gallery-price">$3800</section>
                        </p>
                         <button id="p27" class="btn btn-primary" onclick="cart(1,27)">加入購物車</button>

                    </figcaption>
                </figure>
            </article>
        </div> <!-- gallery page 5 -->
    </div>
    <?php include("footer.php") ?>
</body>

</html>