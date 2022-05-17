<?php
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
        
        $msg = "";
        if (isset($_POST['operate'])) {
            switch ($_POST['operate']) {
                case "add":
                    //資料庫新增存檔
                    $sql = "insert into account " . 
                    "(account, level, password, email) values " .
                    "('" . $_POST['account'] . "','" . $_POST['level'] . "','" . $_POST['password'] . "','" . $_POST['email'] . "')";
            
                    if ($result = mysqli_query($link, $sql)) { $msg = "<span style='color:#0000FF'>資料新增成功!</span>"; }
                    else { $msg = "<span style='color:#FF0000'>資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" . mysqli_error($link) . "</span>"; }
                    break;
                case "modify":
                    //資料庫修改存檔
                    $sql = "update account set" . 
                    " account = '" . $_POST['account'] . "'," .
                    " level = '" . $_POST['level'] . "'," .
                    " password = '" . $_POST['password'] . "'," .
                    " email = '" . $_POST['email'] . "'" .
                    " where account.id = '" . $_POST['id'] . "'";
                    if ($result = mysqli_query($link, $sql)){ $msg = "<span style='color:#0000FF'>資料修改成功!</span>"; }
                    else { $msg = "<span style='color:#FF0000'>資料修改失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" . mysqli_error($link) . "</span>"; }
                    break;
                default:
                    $msg = "<span style='color:#FF0000'>無此操作</span>";
                    break;
            }
        }

        // // 資料庫查詢(送出查詢的SQL指令)
        if ($result = mysqli_query($link, "SELECT * FROM account")) {
            $rows = "";
            while ($col = mysqli_fetch_assoc($result)) {
                $rows .= "
                <form action='' method='Post'>    
                    <tr>
                        <td><input type='hidden' name='id' value='" . $col["id"] . "'><input type='text' name='account' value='" . $col["account"] . "'></td>
                        <td><input type='text' name='level' value='" . $col["level"] . "'></td>
                        <td><input type='text' name='password' value='" . $col["password"] . "'></td>
                        <td><input type='text' name='email' value='" . $col["email"] . "'></td>
                        <td><input type='hidden' name='operate' value='modify'><button type='submit'>修改資料</button></td>
                    </tr>
                </form>"
                ;
            };
            $num = mysqli_num_rows($result); //查詢結果筆數
            mysqli_free_result($result); // 釋放佔用的記憶體
        }

        mysqli_close($link); // 關閉資料庫連結
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理</title>
    <style>
        table {
            margin: 0 auto;
            border: 1px blue solid;
            border-collapse: collapse;
        }

        tr, td, th ,button{
            border: 1px blue solid;
            text-align: center
        }
        caption{
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!--================帳號管理 =================-->
    <br><br><br><br>
    <section>
        <table>
            <tr><td colspan="3">資料庫名稱: <?php echo $datagram; ?></td><td colspan="3">帳號資料一共 <?php echo $num; ?> 筆</td></tr>
            <tr>
                <th>帳號</th>
                <th>權限等級</th>
                <th>密碼</th>
                <th>email</th>
                <th>操作</th>
            </tr>
            <?php echo $rows; ?>
            <tr>
                <form action="" method="POST">
                    <td><input type="hidden" name="id"><input type="text" name="account"></td>
                    <td><input type="text" name="level"></td>
                    <td><input type="text" name="password"></td>
                    <td><input type="text" name="email"></td>
                    <td><input type="hidden" name="operate" value="add"><button type="submit">新增存檔</button></td>
                </form>
            </tr>
        </table>
    </section>
    </body>
</html>