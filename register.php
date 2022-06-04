<?php
    $account=$_POST['registerAccount'];
    $mail=$_POST['registerMail'];
    $password=$_POST['registerPassword'];
    include("db.php");
    if(mysqli_query($link,"INSERT into account(`account`, `password`, `email`) values('$account','$password','$mail');")){
        echo "註冊成功";
    }else{
        echo "註冊失敗";
    }
    mysqli_close($link)

?>