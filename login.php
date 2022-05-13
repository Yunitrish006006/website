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
            if ($result = mysqli_query($link, "SELECT * FROM account")) {
                while ($row = mysqli_fetch_assoc($result)) {
                    //認證(Authentication):連線資料庫驗證使用者的帳號密碼是否正確
                    //授權(Authorization):連線資料庫檢查使用者的身分別(會員、管理者....)
                    if ($_POST['account'] == $row['account'] && $_POST['password'] == $row['password']) {
                        $_SESSION['account'] = $row["account"];
                        $_SESSION['level'] = $row["level"];
                        $_SESSION['password'] = $row["password"];
                        $_SESSION["email"] = $row["email"];
                        switch ($_SESSION['level']) {
                            case 99:
                                header("Location:backend.php");
                                break;
                            case 1:
                                header("Location:book.php");
                                break;
                            default:
                                header("Location:index.php");
                                break;
                        }
                    }
                }
                $num = mysqli_num_rows($result); //查詢結果筆數
                mysqli_free_result($result); // 釋放佔用的記憶體
            }
            mysqli_close($link); // 關閉資料庫連結
        }
        include("index.php");
    }
    else {
        header("Location:index.php");
    }  
?>