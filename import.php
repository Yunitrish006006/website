<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<link rel="icon" href="images/honeycomb.png" type="image/x-icon">
<!--  boostrap css  -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="vendors/linericon/style.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<!-- main css -->
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/nav-style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!---JQuery-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
<!-- else -->
<script>
    $(document).ready(function () {
        // Handle click on paging links
        $('.tm-paging-link').on("click", function () {
            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
            <?php $_SESSION['require_category']?>
        });
    });
</script>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendVerifyMail() {
        Email.send({
            Host: "smtp.beehotel.com",
            Username: "username",
            Password: "password",
            To: 'them@website.com',
            From: "you@isp.com",
            Subject: "This is the subject",
            Body: "And this is the body"
        }).then(
            message => alert(message)
        );
    }
</script>
<!-- 註冊視窗 -->
<div class="modal fade" id="registerWindow" tabindex="-1" aria-labelledby="registerWindow" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" id="register">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerWindow">註冊視窗</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
<div class="modal fade" id="loginWindow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="loginPassword" class="form-control" id="loginPassword" name="password">
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
<div class="modal fade" id="informationWindow" tabindex="-1" aria-labelledby="informationWindow" aria-hidden="true">
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
 <!--================寄件成功表單 =================-->
<div id="error" class="modal modal-message fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-close"></i>
                </button>
                <h2>感謝您！</h2>
                <p>你的郵件已順利寄出....</p>
            </div>
        </div>
    </div>
</div>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendVerifyMail() {
        Email.send({
            Host: "smtp.beehotel.com",
            Username: "username",
            Password: "password",
            To: 'them@website.com',
            From: "you@isp.com",
            Subject: "This is the subject",
            Body: "And this is the body"
        }).then(
            message => alert(message)
        );
    }
</script>
<script>
    function play() {
        var audio = new Audio('button.mp3');
        audio.play();
    }
</script>
<script src="js/sign.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.validate.min.js"></script>