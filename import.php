<?php
    if (session_status() === PHP_SESSION_NONE) {session_start();}
?>
<!-- <link rel="icon" href="images/honeycomb.png" type="image/x-icon"> -->
<!--  boostrap css  -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- main css -->
<link rel="stylesheet" href="css/nav-style.css">
<!---JQuery-->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/localization/messages_zh_TW.js "></script>
<!-- else -->
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
