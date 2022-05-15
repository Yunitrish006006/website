<?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (isset($_SESSION['account']) && isset($_SESSION['password'])) {
        $host = 'localhost';
        $user ='root';
        $access = '';
        $datagram = 'beehotel';
        $link = mysqli_connect($host,$user,$access,$datagram);
    
        if ( !$link ) {
            echo "連結錯誤代碼: ".mysqli_connect_errno()."<br>";//顯示錯誤代碼
            echo "連結錯誤訊息: ".mysqli_connect_error()."<br>";//顯示錯誤訊息
            exit();
        }
        else
        {
            mysqli_query($link, 'SET CHARACTER SET utf8');
            mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
    
            // // 資料庫查詢(送出查詢的SQL指令)
            if( $_POST['password'] ==  $_POST['password_check']) {
                $account_id = $_SESSION['account_id'];
                $account_name = $_SESSION['account'];
                $account_password = $_SESSION['password'];
                $account_email = $_SESSION["email"];

                $sql = "update account set" . 
                        " account = '" . $_POST['account'] . "'," .
                        " password = '" . $_POST['password'] . "'," .
                        " email = '" . $_POST['email'] . "'" .
                        " where account.id = '" . $account_id . "'";     
                mysqli_query($link, $sql);
                mysqli_close($link); // 關閉資料庫連結
            }
            else {
                echo "<script> alert('密碼不符合'); </script>";
            }
        }
        include("index.php");
    }
    else {
        header("Location:index.php");
    }  
?>