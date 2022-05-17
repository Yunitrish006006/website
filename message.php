<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/comment.css">
</head>

<body>
	<form name="form3" id="form3" action="" method="POST">
		<div class="comment-form">
			<h4>留下您的意見吧！</h4>
			<div class="form-group form-inline col-lg-6 col-md-6 name">
				<input type="text" class="form-control" placeholder="填寫您的名字" name="name" />
			</div>
			<div class="form-group">
				<textarea class="form-control" name="content"  maxlength="10" placeholder="填寫您的內容"></textarea>
			</div>
			<div id="div3">
				<button type="submit" name='send' class="primary-btn button_hover">傳送</button>
			</div>
		</div>
	</form>
	<?php
	if (session_status() === PHP_SESSION_NONE) session_start();
	$pages=$_SESSION['page'];
	$sql = "SELECT count(*) FROM `details` WHERE 1";
	$result = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
			$total=$row['count(*)'];
	}
	mysqli_free_result($result); // 釋放佔用的記憶體
	$sql = "SELECT count(*) FROM `details` WHERE main='$pages'";
	$result = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
			$index=$row['count(*)'];
	}
	mysqli_free_result($result); // 釋放佔用的記憶體
    if (isset($_POST['send'])) {
    	$name = $_POST['name'];
        $content = $_POST['content'];
		if (isset($_SESSION['account'])) {
			$account=$_SESSION['account'];
		}
		$total=$total+1;
		$index_plus=$index+1;
        $sql = "INSERT INTO `details`(`id`, `account`,`index`, `main`, `name`, `content`, `time`) 
                VALUES ('$total','$account','$index_plus','$pages','$name','$content',now())";
                if (!mysqli_query($db, $sql)) {
                    die(mysqli_error());
                    }else {
                    //若成功將留言存進資料庫，會自動跳轉到顯示留言的頁面
                        echo "
                            <script>
                            setTimeout(function(){window.location.href='../website/comment_detail.php';},500);
                            </script>";
                    } 
                    } else {
                        echo '';
                    }
    ?>
	<div  class="comments-area">
		<h4>留言版</h4>
		<div id="box">
			<?php
			for($i=1;$i<=$index;$i++){ ?>
				<div class="comment-list">
					<div class="c1 reply-btn">
						<?php 
							$sql = "SELECT * FROM `details` WHERE main='$pages' and `index`='$i'";
							$result = mysqli_query($db, $sql);
							while ($row = mysqli_fetch_assoc($result)) {
								$_SESSION['id']=$row['id'];
								$_SESSION['name']=$row['name'];
								$name_detail=$row['name'];
								$content_detail=$row['content'];
								$time_detail=$row['time'];
								if (isset($_SESSION['account'])) {
									$account=$_SESSION['account'];
									if($account == 'admin') {  //若登入者名稱和留言者名稱一致，顯示出編輯和刪除的連結
										echo '
										<a href="delete.php?no=' . $row['id'] . '" class="btn-reply text-uppercase">刪除</a>';
										}										
									else if ($account == $row['account']) {  //若登入者名稱和留言者名稱一致，顯示出編輯和刪除的連結
									echo '
										<a href="delete.php?no=' . $row['id'] . '" class="btn-reply text-uppercase">刪除</a>';
										}
									}
								}
							mysqli_free_result($result); // 釋放佔用的記憶體
						?>
						<span>
							<?php echo $name_detail.":";?>  
						</span>
						<span><?php echo $content_detail; ?></span>
					</div>
					<div ><?php echo $time_detail; ?></div>
				</div>
			<?php } 
			mysqli_close($db); // 關閉資料庫連結?>
		</div>
	</div>
</body>

</html>