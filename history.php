<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蜂巢飯店</title>
    <?php include("import.php") ?>
</head>
<?php
                if(isset($_POST['delete_tno'])){
                    include("db.php");
                    $delete_tno=$_POST['delete_tno'];
                    mysqli_query($link,"DELETE from `transaction` where tno=$delete_tno;");
                    mysqli_query($link,"DELETE from  record where tno=$delete_tno;");
                    mysqli_close($link);
                    header("Location:history.php");
                }
    ?>
<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <section class="breadcrumb_area" style="background-image: url(./images/cart.jpg);  background-size:100% 100%">
    
        <div class="container">
            <div class="page-cover text-center">
                <h2 class="page-cover-tittle">訂單查詢</h2>
                    <ol class=" breadcrumb">
                    <li><a href="index.php">主頁</a></li>
                    <li class="active">訂單查詢</li>
                    </ol>
            </div>
        </div>
    </section>
<div class="container" style="padding-bottom: 3rem;">
    <div class="row" style="justify-content: center; padding: 3rem;">
        <form action="" method="post" style="display:flex">
            <input class="form-control me-2 " type="search" placeholder="訂單編號查詢" name="ser" aria-label="Search" style="width:70%;">
            <button class="btn btn-outline-success" type="submit" style=" margin-left: 0.5rem;" >搜尋</button>
        </form>  
    </div>
    <div class="card text-center">
        <div class="card-header">
            <div class="row">
                <div class="col">訂單編號</div>
                <div class="col">房型名稱</div>
                <div class="col">入住日期</div>
                <div class="col">退宿日期</div>
                <div class="col">數量</div>
                <div class="col">售價</div>
            </div>
        </div>
        <div class="card-body">
            <?php
                if(isset($_SESSION['account_id'])){
                    $total_price=0;
                    include("db.php");
                    $account_id=$_SESSION['account_id'];
                    if(isset($_POST['ser'])){
                        $search=$_POST['ser'];
                        if($result=mysqli_query($link,"SELECT * from transaction as t ,record as r where t.tno=$search and t.tno=r.tno and t.transmid=$account_id;")){
                            while($record=mysqli_fetch_assoc($result)){
                                echo'<div class="row">
                                    <div class="col-3 col-sm">'.$record['tno'].'</div>
                                    <div class="col-3 col-sm">'.$record['pname'].'</div>
                                    <div class="col-3 col-sm">'.$record['checkin'].'</div>
                                    <div class="col-3 col-sm">'.$record['checkout'].'</div>
                                    <div class="col-3 col-sm">'.$record['amount'].'間</div>
                                    <div class="col-3 col-sm">$'.intval($record['saleprice']).'</div>
                                    </div>';
                                $total_price=$total_price+$record['saleprice'];
                            }
                        }
                        echo '<div class="card-footer text-muted">
                          總共: <span>$'.$total_price.'</span>
                          <br><form method="post" action=""><input type="hidden" name="delete_tno" value="'.$search.'"><input type="submit" value="刪除此訂單" class="btn btn-danger"></form>
                          </div>';
                    }else{
                        if($result=mysqli_query($link,"SELECT * from transaction as t ,record as r where t.tno=r.tno and t.transmid=$account_id;")){
                            while($record=mysqli_fetch_assoc($result)){
                                echo'<div class="row">
                                    <div class="col-3 col-sm">'.$record['tno'].'</div>
                                    <div class="col-3 col-sm">'.$record['pname'].'</div>
                                    <div class="col-3 col-sm">'.$record['checkin'].'</div>
                                    <div class="col-3 col-sm">'.$record['checkout'].'</div>
                                    <div class="col-3 col-sm">'.$record['amount'].'間</div>
                                    <div class="col-3 col-sm">$'.intval($record['saleprice']).'</div>
                                    </div>';
                                $total_price=$total_price+$record['saleprice'];
                            }
                        }
                        echo '<div class="card-footer text-muted">
                             總共:<span>$'.$total_price.'</span>';
                    }
                }
                mysqli_close($link); 
            ?>
            
    </div>
</div>
            </div>
<?php include("import.php") ?>
</body>
</html>