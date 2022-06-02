<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蜂巢飯店</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/style.css">
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <?php
            include("db.php");        
            mysqli_query($link, "SET NAMES UTF8");
            $a=$_GET['pid'];
            if($result = mysqli_query($link,"SELECT * FROM product  WHERE  pno=$a;")) {
            while ($record = mysqli_fetch_assoc($result)) {
                echo '<div class="row"style="margin:8rem auto;"><div class="col"><img width="600px" height="390px" src="images/product/'.
                    $record['file_type'].
                    '" alt=""></div><div class="col"><h1 style="padding:1rem 10rem">'.
                    $record['pname'].
                    '</h1><h3>房型介紹</h3><hr><p>'.
                    $record['description'].
                    '</p><h3>主要設備</h3><hr><p>'.
                    $record['equipment'].
                    '</p><h4>$'.
                    $record['unitprice'].
                    '</h4></div></div>';
            }
        }
            ?>
        <?php include("import.php") ?>
    </body>    
</html>