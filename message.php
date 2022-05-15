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
	$pages=$_SESSION['page'];
	$sql = "SELECT count(*) FROM `details` WHERE main='$pages'";
	$result = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
			$max=$row['count(*)'];
	}
	mysqli_free_result($result); // 釋放佔用的記憶體
    if (isset($_POST['send'])) {
    	$name = $_POST['name'];
        $content = $_POST['content'];
        $account=$_SESSION['account'];
		$index=$max+1;
        $sql = "INSERT INTO `details`(`id`, `account`, `main`, `name`, `content`, `time`) 
                VALUES ('$index','$account','$pages','$name','$content',now())";
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
			$account=$_SESSION['account']; 	
			for($i=1;$i<=$max;$i++){ ?>
				<div class="comment-list">
					<div class="c1 reply-btn">
						<span>
							<?php									         
								$sql = "SELECT * FROM `details` WHERE main='$pages' and id='$i'";
								$result = mysqli_query($db, $sql);
								while ($row = mysqli_fetch_assoc($result)) {
									$name_detail=$row['name'];
									$content_detail=$row['content'];
									$time_detail=$row['time'];
									}
								mysqli_free_result($result); // 釋放佔用的記憶體
								echo $name_detail.":";						                 
							?>  
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