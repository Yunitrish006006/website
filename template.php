<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蜂巢飯店</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <?php include("import.php") ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand logo_h" href="index.php"><img src="images/logo.png" width="50" height="50" class="brand">蜂巢飯店
        </a>
        <button onclick="play()" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <form class="d-flex nav-link form-inline">
                    <input class="form-control me-2 " type="search" placeholder="搜尋" aria-label="Search">
                    <button onclick="play()" class="btn  btn-outline-secondary " type="submit"><i
                            class="bi bi-search"></i></button>
                </form>
                <li class="nav-item"><a class="nav-link" href="index.php">首頁</a></li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false" onclick="play()">聯絡/關於</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="about.php">關於我們</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">聯絡我們</a></li>
                    </ul>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false" onclick="play()">訂房</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="book.php">訂房/房型介紹</a></li>
                        <li class="nav-item"><a class="nav-link" href="history.php">訂房紀錄</a></li>
                        <li class="nav-item"><a class="nav-link" href="cart.php">購物車<span class="toolbar-num"
                                    id="cart_cnt"></span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="comment.php">留言板</a></li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false" onclick="play()">登入|註冊</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                                data-bs-target="#loginWindow" data-bs-whatever="@getbootstrap">登入</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                                data-bs-target="#registerWindow" data-bs-whatever="@getbootstrap">註冊</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                                data-bs-target="#informationWindow" data-bs-whatever="@getbootstrap">會員資料</a></li>
                    </ul>
                </li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false" onclick="play()">EN/中</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="book.php">繁體中文</a></li>
                        <li class="nav-item"><a class="nav-link" href="history.php">English</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="login.php">登入</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">登出</a></li>
                <li class="nav-item"><audio autoplay="autoplay">
                        <source src="sounds/minecraft_bgm.mp3" />
                    </audio></li>
            </ul>
        </div>
    </nav>
    <section id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <?php echo $content ?>
    </section>
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">聯絡我們</h6>
                    </div>
                    <div class="single-footer-widget">
                        <div>
                            <ul class="list_style">
                                <li>
                                    <a href="tel:0937565253"><i class="bi bi-telephone-fill"></i> +886 2 27002323</a>
                                </li>
                            </ul>

                        </div>
                        <div>
                            <ul class="list_style">
                                <li>
                                    <a href="mailto:beehoteltw@gmail.com"><i class="bi bi-envelope"></i> reservation@beehotel.com.tw</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="list_style">
                                <li>
                                    <a href="http://facebook.com"><i class="bi bi-facebook"></i> 蜂巢飯店</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="list_style">
                                <li>
                                    <a href="http://instagram.com"><i class="bi bi-instagram"></i> @beehotel20220601</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">其他連結</h6>
                        <div class="row ">
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="index.php"><i class="bi bi-house"></i> 主頁</a></li>
                                    <li><a href="about.php">關於</a></li>
                                    <li><a href="contact.php">聯絡</a></li>

                                </ul>
                            </div>
                            <div class="col-4">
                                <ul class="list_style">
                                    <li><a href="book.php">訂房</a></li>
                                    <li><a href="history.php">紀錄</a></li>
                                    <li><a href="comment.php">留言板</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="footer_title">全台分店</h6>
                        <div>
                            <ul class="list_style">
                                <li><a href="book.php">台中蜂巢飯店</a></li>
                                <li><a href="book.php">彰化蜂巢飯店</a></li>
                                <li><a href="book.php">高雄蜂巢飯店</a></li>
                                <li><a href="book.php">墾丁蜂巢飯店</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h6 class="footer_title">優惠資訊</h6>
                        <ul class="list_style instafeed d-flex flex-wrap">
                            <li><img src="images/discount.jpeg" width="ˇ200" height="100"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="border_line"></div>
            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p>
                    Copyright@ bees-hotels., LTD.
                    <script>document.write(new Date().getFullYear());</script> All Right Reserved.
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.facebook.com"><i class="bi bi-facebook"></i> </i></a>
                    <a href="https://www.twitter.com"><i class="bi bi-twitter"></i> </i></a>
                    <a href="https://www.google.com"><i class="bi bi-google"></i> </i></a>
                    <a href="https://www.youtube.com"><i class="bi bi-youtube"></i> </i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>