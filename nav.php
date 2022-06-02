<?php
    if (session_status() == PHP_SESSION_NONE) session_start();
?>
<!-- icon import -->
<link rel="icon" href="images/honeycomb.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!-- 註冊視窗 -->
<div class="modal fade" id="registerWindow" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" id="register">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerWindow">註冊視窗</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="registerAccount" class="col-form-label">帳號:</label>
                        <input type="text" class="form-control" id="registerAccount" name="registerAccount">
                        <label for="registerAccount" class="error"></label>
                    </div>
                    <div class="mb-3">
                        <label for="registerMail" class="col-form-label">電子郵件:</label>
                        <input type="email" class="form-control" id="registerMail" name="registerMail">
                        <label for="registerMail" class="error"></label>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="col-form-label">密碼:</label>
                        <input type="password" class="form-control" id="registerPassword" name="registerPassword">
                        <label for="registerPassword" class="error"></label>
                    </div>
                    <div class="mb-3">
                        <label for="registerCheckPassword" class="col-form-label">確認密碼:</label>
                        <input type="password" class="form-control" id="registerCheckPassword"
                            name="registerCheckPassword">
                        <label for="registerCheckPassword" class="error"></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">註冊</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- 登入視窗 -->
<div class="modal fade" id="loginWindow" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="login.php" method="post" id="login">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">登入視窗</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="loginAccount" class="col-form-label">帳號:</label>
                        <input type="text" class="form-control" id="loginAccount" name="account">
                        <label for="loginAccount" class="error"></label>
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="col-form-label">密碼:</label>
                        <input type="password" class="form-control" id="loginPassword" name="password">
                        <label for="loginPassword" class="error"></label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">登入</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- 會員資料 -->
<div class="modal fade" id="informationWindow" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="account_data_modify.php" method="POST" id="information">
                <div class="modal-header">
                    <h5 class="modal-title" id="informationWindow">會員資料修改</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="informationAccount" class="col-form-label">帳戶:</label>
                        <input type="text" class="form-control" id="informationAccount" name="account"
                            value="<?php 
                                        if(isset($_SESSION['account'])) echo $_SESSION['account'];
                                        else echo "none";
                                    ?>">
                        <label for="informationAccount" class="error"></label>
                    </div>
                    <div class="mb-3">
                        <label for="informationMail" class="col-form-label">信箱:</label>
                        <input type="text" class="form-control" id="informationMail" name="email"
                            value="<?php 
                                        if(isset($_SESSION['email'])) echo $_SESSION['email'];
                                        else echo "none";
                                    ?>">
                        <label for="informationMail" class="error"></label>
                    </div>
                    <div class="mb-3">
                        <label for="informationPassword" class="col-form-label">密碼:</label>
                        <input type="informationPassword" class="form-control" id="password"
                            name="password" value="<?php 
                                        if(isset($_SESSION['password'])) echo $_SESSION['password'];
                                        else echo "none";
                                    ?>">
                        <label for="informationPassword" class="error"></label>
                    </div>
                    <div class="mb-3">
                        <label for="informationPasswordCheck" class="col-form-label">確認密碼:</label>
                        <input type="informationPasswordCheck" class="form-control" id="informationPasswordCheck"
                            name="password_check">
                        <label for="informationPasswordCheck" class="error"></label>
                    </div>
                    <div class="form-check">
                        <label><input type="checkbox" name="sport" id="getADD" data-bs-dismiss="modal"> 接收廣告</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">寄送驗證信</button>
                    <!-- <button type="submit" class="btn btn-primary" onclick="sendVerifyMail()">寄送驗證信</button> -->
                </div>
            </form>
        </div>
    </div>
</div>
<header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light navbar-light bg-light">
            <!-- 手機版下拉式選單-->
            <a class="navbar-brand logo_h" href="index.php"><img src="images/comment_picture/logo.png" width="50" height="50">蜂巢飯店
            </a>
            <button onclick="play()" class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse offset " id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto  ">
                    <!--
                        <form class="d-flex nav-link form-inline">
                            <input class="form-control me-2 " type="search" placeholder="搜尋" aria-label="Search">
                            <button onclick="play()" class="btn  btn-outline-secondary " type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form> 
                    -->
                    <li class="nav-item"><a class="nav-link" href="index.php">首頁</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false" onclick="play()">聯絡/關於</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="about.php">關於我們</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">聯絡我們</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="book.php">房型介紹</a></li>
                    <li class="nav-item"><a class="nav-link" href="comment.php">留言板</a></li>
                    <?php
                                if(isset($_SESSION['account'])) {
                                    if($_SESSION['level']>5) {
                                        echo '
                                        <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" onclick="play()">管理</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="manage_account.php">帳號列表</a></li>
                                            <li class="nav-item"><a class="nav-link" href="manage_commodity.php">商品列表</a></li>
                                        </ul>
                                    </li>
                                        ';
                                    }
                                }
                    ?>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" onclick="play()">帳戶</a>
                        <ul class="dropdown-menu">
                            <?php 
                                if(isset($_SESSION['account'])) {
                                    echo "<li class='nav-item'><a class='nav-link' href='logout.php'>登出</a></li>";
                                    echo "<li class='nav-item'><a class='nav-link' data-bs-toggle='modal' data-bs-target='#informationWindow' data-bs-whatever='@getbootstrap'>會員資料</a></li>";
                                    echo "<li class='nav-item'><a class='nav-link' href='cart.php'>購物車<span class='toolbar-num'>(".$_SESSION['cart_quantity'].")</span></a></li>";
                                    echo "<li class='nav-item'><a class='nav-link' href='history.php'>訂房紀錄</a></li>";
                                }
                                else {
                                    echo "<li class='nav-item'><a class='nav-link' data-bs-toggle='modal' data-bs-target='#loginWindow' data-bs-whatever='@getbootstrap' >登入</a></li>";
                                    echo "<li class='nav-item'><a class='nav-link' data-bs-toggle='modal' data-bs-target='#registerWindow' data-bs-whatever='@getbootstrap'>註冊</a></li>";
                                }
                            ?>
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
                    <!-- <li class="nav-item"><audio autoplay="autoplay"><source src="sounds/minecraft_bgm.mp3" /></audio></li> -->
                </ul>
            </div>
        </nav>
    </div>
</header>