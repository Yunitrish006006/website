<?php
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (isset($_POST['account']) && isset($_POST['password'])) {
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
            $account_password = $_POST['password']; $account_name = $_POST['account'];
            if ($result = mysqli_query($link, "SELECT * FROM account where password = '$account_password' and account = '$account_name'")) {
                while ($row = mysqli_fetch_assoc($result)) {
                    
                }
                $num = mysqli_num_rows($result); //查詢結果筆數
                
            }
            mysqli_close($link); // 關閉資料庫連結
        }
        include("index.php");
    }
    else {
        header("Location:index.php");
    }  
?>