<?php 
if (session_status() === PHP_SESSION_NONE) session_start();
	$pages=$_SESSION['page'];
	$sql = "SELECT max(id) FROM `details` WHERE 1";
	$result = mysqli_query($link, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
			$detail_max=$row['max(id)'];//計算details資料表id的數目
	}
	mysqli_free_result($result); // 釋放佔用的記憶體
	if (isset($_SESSION['page'])){
        $pages=$_SESSION['page'];                                    
        $sql = "SELECT max(`index`) FROM `details` WHERE main='$pages'";
        $result = mysqli_query($link, $sql);                                                                        
        while ($row = mysqli_fetch_assoc($result)) {
            $detail_pages_index=$row['max(`index`)'];//計算details資料表在同個貼文index的數目
        }
        mysqli_free_result($result); // 釋放佔用的記憶體
    }  
?>
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
    if (isset($_POST['send'])) {
    	$name = $_POST['name'];
        $content = $_POST['content'];
		if (isset($_SESSION['account'])) {
			$account=$_SESSION['account'];
		}
		$detail_index=$detail_max+1;
		$page_index=$detail_pages_index+1;
        $sql = "INSERT INTO `details`(`id`, `account`,`index`, `main`, `name`, `content`, `time`) 
                VALUES ('$detail_index','$account','$page_index','$pages','$name','$content',now())";
        if (!mysqli_query($link, $sql)) {
            die(mysqli_error());
            }
		else{
            //若成功將留言存進資料庫，會自動跳轉到顯示留言的頁面
            echo "<script>
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
				for($i=1;$i<=$detail_pages_index;$i++){
				$sql = "SELECT * FROM `details` WHERE main='$pages' and `index`='$i'";
				$result = mysqli_query($link, $sql);
				$nums=mysqli_num_rows($result);//回傳sql查詢筆數，若為0則跳過該迴圈
				if($nums>0){
				while ($row = mysqli_fetch_assoc($result)) {
					$_SESSION['id']=$row['id'];
					$_SESSION['name']=$row['name'];
					$account_detail=$row['account'];
					$name_detail=$row['name'];
					$content_detail=$row['content'];
					$time_detail=$row['time'];			
				}	
				mysqli_free_result($result); // 釋放佔用的記憶體
				?>
				<div class="comment-list">
					<div class="c1 reply-btn">
						<?php 
							if (isset($_SESSION['account'])) {
								$account=$_SESSION['account'];
								if($account == 'admin') {  //若登入者名稱和留言者名稱一致，顯示出刪除的連結
									echo '<a href="delete.php?no=' . $_SESSION['id']. '" class="btn-reply text-uppercase">刪除</a>';
								}										
								else if ($account == $account_detail) {  //若登入者名稱和留言者名稱一致，顯示出刪除的連結
									echo '<a href="delete.php?no=' . $_SESSION['id'] . '" class="btn-reply text-uppercase">刪除</a>';
								}
							}
						?>
						<span>
							<?php echo $name_detail.":";?>  
						</span>
						<span><?php echo $content_detail; ?></span>
					</div>
					<div ><?php echo $time_detail; ?></div>
				</div>
			<?php }} 
			mysqli_close($link); // 關閉資料庫連結
			?>
		</div>
	</div>
</body>

</html>