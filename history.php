<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蜂巢飯店</title>
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <section class="breadcrumb_area" style="background-image: url(./images/cart.jpg);  background-size:100% 100%">
    
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">訂單查詢</h2>
                    <ol class=" breadcrumb">
                    <li><a href="index.html">主頁</a></li>
                    <li class="active">訂單查詢</li>
                    </ol>
            </div>
        </div>
    </section>
<div class="container" style="padding-bottom: 3rem;">
    <div class="row" style="justify-content: center; padding: 3rem;">
        <form action="" method="post" name="" style="display:flex">
            <input class="form-control me-2 " type="search" placeholder="訂單編號查詢" aria-label="Search" style="width:70%;">
            <button class="btn btn-outline-success" type="submit" style=" margin-left: 0.5rem;" >搜尋</button>
        </form>  
    </div>
    <div class="card text-center">
        <div class="card-header">
            <div class="row">
                <div class="col">交易編號</div>
                <div class="col">縮圖</div>
                <div class="col">房型名稱</div>
                <div class="col">入住日期</div>
                <div class="col">退宿日期</div>
                <div class="col">數量</div>
                <div class="col">售價</div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="col-3 col-sm">A0001</div>
            <div class="col-3 col-sm"><a href="#"><img src="./images/c-1.jpg" alt="" width="50px" height="50px" style="padding-bottom: 0.5rem;"></a></div>
            <div class="col-3 col-sm">商務套房</div>
            <div class="col-3 col-sm">2022/04/26</div>
            <div class="col-3 col-sm">2022/04/27</div>
            <div class="col-3 col-sm">2間</div>
            <div class="col-3 col-sm">$8400</div>
            </div>
            <div class="row">
                <div class="col-3 col-sm">A0001</div>
                <div class="col-3 col-sm"><a href="#"><img src="./images/c-2.jpg" alt="" width="50px" height="50px" style="padding-bottom: 0.5rem;"></a></div>
                <div class="col-3 col-sm">海景雙人房</div>
                <div class="col-3 col-sm">2022/04/11</div>
                <div class="col-3 col-sm">2022/04/12</div>
                <div class="col-3 col-sm">1間</div>
                <div class="col-3 col-sm">$4400</div>
            </div>
        </div>
        <div class="card-footer text-muted">
            總共: <span>$12800</span>
        </div>
    </div>
</div>
<?php include("import.php") ?>
</body>
</html>