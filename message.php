<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/comment.css">
</head>

<body>
	<div class="comment-form">
		<h4>留下您的意見吧！</h4>
		<div class="form-group form-inline col-lg-6 col-md-6 name">
			<input type="text" class="form-control" placeholder="填寫您的名字" id="txt1" />
		</div>
		<div class="form-group">
			<textarea class="form-control" name="" id="txt2" maxlength="10" placeholder="填寫您的內容"></textarea>
		</div>
		<div id="div3">
			<input type="button" value="送出" class="primary-btn button_hover" id="btn" />
			<span id="span1">還能輸入<span id="span2">10</span>個字</span>
		</div>
	</div>
	<div  class="comments-area">
		<h4>留言版</h4>
		<div id="box">
			<div class="comment-list">
				<div class="c1 reply-btn">
					<span>林昀佑:</span>
					<span>這個人好智障</span>
				</div>
				<div >01月04日 01：28</div>
			</div>
			<div class="comment-list" >
				<div class="c1 reply-btn">
					<span>匿名:</span>
					<span>服務人員真辛苦</span>
				</div>
				<div >01月04日 01：28</div>
			</div>
		</div>
	</div>
</body>
<script src="js/comment.js"></script>

</html>