<!-- <?php
    include("db.php");
    if(isset($_SESSION['account'])) {
        if($_SESSION['level'] < 5) {
            echo '<script>alert("帳號等級權限不足!\n登入後使用此功能");window.location.href="/website/login.php"</script>';
        }
        else {
            if ( !$link ) {
                echo "連結錯誤代碼: ".mysqli_connect_errno()."<br>";//顯示錯誤代碼
                echo "連結錯誤訊息: ".mysqli_connect_error()."<br>";//顯示錯誤訊息
                exit();
            }
            else {
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
                            if($_POST['level'] >= $_SESSION['level'] || $_POST['level'] < $_POST['old_level']) {
                                $_POST = array();
                                echo '<script>alert("帳號等級權限不足!");</script>';
                            }
                            else {
                                $sql = "update account set" . 
                                " account = '" . $_POST['account'] . "'," .
                                " level = '" . $_POST['level'] . "'," .
                                " password = '" . $_POST['password'] . "'," .
                                " email = '" . $_POST['email'] . "'" .
                                " where account.id = '" . $_POST['id'] . "'";
                                if ($result = mysqli_query($link, $sql)){ $msg = "<span style='color:#0000FF'>資料修改成功!</span>"; }
                                else { $msg = "<span style='color:#FF0000'>資料修改失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" . mysqli_error($link) . "</span>"; }
                            }
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
                                <td><input type='hidden' name='operate' value='modify'><input type='hidden' name='old_level' value='" . $col["level"] . "'><button type='submit'>修改資料</button></td>
                            </tr>
                        </form>"
                        ;
                    };
                    $num = mysqli_num_rows($result); //查詢結果筆數
                    mysqli_free_result($result); // 釋放佔用的記憶體
                }
        
                mysqli_close($link); // 關閉資料庫連結
            }
        }
    }
    else {
        echo '<script>alert("請先登入以啟用帳號管理功能!");window.location.href="/website/login.php"</script>';
    }
?> -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>帳號管理</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-3.3.1.js"></script>
        <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script src="//cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <?php include("import.php") ?>
        <script>
            $(function() {
                $('#example').DataTable({
                    "ajax": 'manage_account_ajax.php'
                });
            });
        </script>
    </head>

    <body>
        <!--================Header Area =================-->
        <?php include("nav.php") ?>
        <!--================帳號管理 =================-->
        <br><br><br><br>
        <!-- <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center">
                <table>
                    <tr><td colspan="3">資料庫名稱: <?php //echo "group_24"; ?></td><td colspan="3">帳號資料一共 <?php echo $num; ?> 筆</td></tr>
                    <tr>
                        <th>帳號</th>
                        <th>權限等級</th>
                        <th>密碼</th>
                        <th>email</th>
                        <th>操作</th>
                    </tr>
                    <?php //echo $rows; ?>
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
            </div>
            <div class="col-md-1"></div>
        </div> -->
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 text-center">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">帳號</th>
                        <th class="text-center">權限等級</th>
                        <th class="text-center">密碼</th>
                        <th class="text-center">email</th>
                        <!-- <th class="text-center">操作</th> -->
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </body>
</html>