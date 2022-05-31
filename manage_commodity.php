<?php
    include("db.php");
    $num = 0;
    $rows = "";
    if(isset($_SESSION['account'])) {
        if($_SESSION['level'] < 5) {
            echo '<script>alert("帳號等級權限不足!\n登入後使用此功能");window.location.href="/website/login.php"</script>';
            
        }
    }
    else {
        echo '<script>alert("請先登入以啟用帳號管理功能!");window.location.href="/website/login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品管理</title>
    <style>
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        tr, td, th ,button{
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
            <tr><td colspan="3">資料庫名稱: <?php echo "group_24"; ?></td><td colspan="3">帳號資料一共 <?php echo $num; ?> 筆</td></tr>
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