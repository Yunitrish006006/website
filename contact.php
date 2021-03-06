<?php
    if (session_status() == PHP_SESSION_NONE) session_start();
    if(isset($_POST['email'])) {
        $headers = "From:". $_POST['email'] ."(".$_POST['name'].")"."\r\n";
        $mailto = "beehoteltw@gmail.com";
        mail($mailto,$_POST['subject'],$_POST['message'],$headers);
        if (count($_POST) > 0) { $_POST = array(); }
    }
?>
<!doctype html>
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
    <link rel="stylesheet" href="css/responsive.css">
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>

    <!--================背景圖片區=================-->
    <section class="breadcrumb_area">
        <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
        </div>
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">聯絡我們</h2>
                <ol class="breadcrumb">
                    <li><a href="index.php">主頁</a></li>
                    <li class="active">聯絡我們</li>
                </ol>
            </div>
        </div>
    </section>

    <!--================聯絡資訊=================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div id="mapBox" class="mapBox" data-lat="24.081335854888408 " data-lon="120.55705327013183" data-zoom="16"
                data-info="Taiwan." data-mlat="24.081335854888408" data-mlon="120.55705327013183">
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>台灣,彰化市</h6>
                            <p>進德路1號</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">00(886)27002323</a></h6>
                            <p>早上7點至晚上10點</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">beehoteltw@gmail.com</a></h6>
                            <p>任何時候皆可寫信！</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <form class="row contact_form" action="" method="POST" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="請輸入姓名">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="請輸入你的email地址">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="請輸入信件主旨">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1"
                                    placeholder="請輸入信件內容"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn theme_btn button_hover">寄送訊息</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php") ?>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/custom.js"></script>
<!-- contact js -->
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
</html>