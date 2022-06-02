<?php
    if (session_status() == PHP_SESSION_NONE) session_start();
    if (isset($_POST['account']) && isset($_POST['password'])) {
        include("db.php");   
    
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
                    //帳號登入
                    if ($_POST['account'] == $row['account'] && $_POST['password'] == $row['password']) {
                        $_SESSION["account_id"]=$row["id"]; 
                        $_SESSION['account'] = $row["account"];
                        $_SESSION['level'] = $row["level"];
                        $_SESSION['password'] = $row["password"];
                        $_SESSION["email"] = $row["email"];
                        switch ($_SESSION['level']) {
                            case 99:
                                header("Location:manage_account.php");
                                break;
                            case 1:
                                header("Location:book.php");
                                break;
                            default:
                                header("Location:index.php");
                                break;
                        }
                    }
                    else{
                        header("Location:index.php");
                    }
                }
                if(isset($_SESSION['account_id'])) {
                    $num = mysqli_num_rows($result); //查詢結果筆數
                    // 建立購物車的數量
                    $account = $_SESSION['account_id'];
                    $cart_quantity=0;
                    if($cart_result = mysqli_query($link,"SELECT * FROM cart WHERE account_id = $account")) {
                        while ($cart_item = mysqli_fetch_assoc($cart_result)) {
                            $cart_quantity++;
                        }
                    }
                    $_SESSION["cart_quantity"]=$cart_quantity;
                    mysqli_close($link);
                    mysqli_free_result($result); // 釋放佔用的記憶體
                    mysqli_free_result($cart_result); // 釋放佔用的記憶體
                }
            }
            mysqli_close($link); // 關閉資料庫連結
        }
        include("index.php");
    }
    else {
        header("Location:index.php");
    }  
?>