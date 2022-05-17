<?php
$link = mysqli_connect("localhost", "root", "", "group_24") or die(mysqli_error());
if ( !$link ) {
    echo "連結錯誤代碼: ".mysqli_connect_errno()."<br>";//顯示錯誤代碼
    echo "連結錯誤訊息: ".mysqli_connect_error()."<br>";//顯示錯誤訊息
    exit();
}
