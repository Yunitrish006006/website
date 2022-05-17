<?php
$db = mysqli_connect("localhost", "root", "root123456", "beehotel") or die(mysqli_error());
if ( !$db ) {
    echo "連結錯誤代碼: ".mysqli_connect_errno()."<br>";//顯示錯誤代碼
    echo "連結錯誤訊息: ".mysqli_connect_error()."<br>";//顯示錯誤訊息
    exit();
}
