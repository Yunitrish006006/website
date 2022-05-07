<!-- icon import -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <!-- 手機版下拉式選單-->
            <a class="navbar-brand logo_h" href="index.php"><img src="images/logo.png" width="50" height="50">蜂巢飯店
            </a>
            <button onclick="play()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse offset " id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto  ">
                    <form class="d-flex nav-link form-inline">
                        <input class="form-control me-2 " type="search" placeholder="搜尋" aria-label="Search">
                        <button onclick="play()" class="btn  btn-outline-secondary " type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <li class="nav-item"><a class="nav-link" href="index.php">首頁</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"  onclick="play()">聯絡/關於</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="about.php">關於我們</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">聯絡我們</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"  onclick="play()">訂房</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="book.php">訂房/房型介紹</a></li>
                            <li class="nav-item"><a class="nav-link" href="history.php">訂房紀錄</a></li>
                            <li class="nav-item"><a class="nav-link" href="cart.php">購物車<span class="toolbar-num">2</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="comment.php">留言板</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"  onclick="play()">登入|註冊</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                                    data-bs-target="#loginWindow" data-bs-whatever="@getbootstrap">登入</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                                    data-bs-target="#registerWindow" data-bs-whatever="@getbootstrap">註冊</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                                    data-bs-target="#informationWindow" data-bs-whatever="@getbootstrap">會員資料</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"  onclick="play()">EN/中</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="book.php">繁體中文</a></li>
                            <li class="nav-item"><a class="nav-link" href="history.php">English</a></li>
                            <li class="nav-item"><a class="nav-link" href="history.php">日本語</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><audio autoplay="autoplay"><source src="minecraft_bgm.mp3"/></audio></li>
                </ul>
            </div>
        </nav>
    </div>
</header>