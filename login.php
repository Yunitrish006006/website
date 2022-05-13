<?php
session_start();
if (isset($_POST['user_id']) && isset($_POST['user_pwd'])) {
//認證(Authentication):連線資料庫驗證使用者的帳號密碼是否正確
//授權(Authorization):連線資料庫檢查使用者的身分別(會員、管理者....)
if ($_POST['user_id'] == "member" && $_POST['user_pwd'] == "12345") {
$_SESSION['user_id'] = $_POST['user_id'];
$_SESSION['level'] = 2; //一般會員
}

if ($_POST['user_id'] == "admin" && $_POST['user_pwd'] == "12345") {
$_SESSION['user_id'] = $_POST['user_id'];
$_SESSION['level'] = 9; //管理者
}

}

$content = <<<EOT
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">使用者登入</h3>
                </div>
                <div class="panel-body">
                    <form id="form" role="form" name="form1" action="" method="POST">
                        <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="帳號" name="user_id" type="text" required minlength="2" maxlength="20" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="密碼" name="user_pwd" type="password" required minlength="4" maxlength="20" value="">
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" id="login" class="btn btn-lg btn-success btn-block">登入</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
EOT;

include "template.php";

?>