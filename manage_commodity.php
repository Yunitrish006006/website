<?php
    include("db.php");
    $num = 0;
    $rows = "";
    $items = "";
    if(isset($_SESSION['account'])) {
        if($_SESSION['level'] > 5) {
            $sql="SELECT * FROM product";
            mysqli_query($link, "SET NAMES UTF8");
                $result=mysqli_query($link,$sql);
                $data_nums = mysqli_num_rows($result);
                $per = 8; 
                $pages = ceil($data_nums/$per);
                if (!isset($_GET["page"])){ 
                    $page=1;
                } else {
                    $page = intval($_GET["page"]);
                }
                $start = ($page-1)*$per; 
                mysqli_free_result($result);
                $sql=$sql.' LIMIT '.$start.', '.$per;
            if($result = mysqli_query($link,$sql)) {
                while($room = mysqli_fetch_assoc($result)) {
                    $pno = $room['pno'];
                    $pname = $room['pname'];
                    $description = $room['description'];
                    $file_type = $room['file_type'];
                    $unitprice = $room['unitprice'];
                    $cart_operation='';
                    $status_of_item='';
                    $text_of_item='';
                    
                    $item="";
                    // $item .=
                    // '<p>'.
                    //     '<img src="images/product/' . $file_type . '" width="150" height="100"/>'.
                    //     $pno.','.
                    //     $pname.','.
                    //     $description.','.
                    //     $unitprice.','.
                    //     $cart_operation.','.
                    //     $status_of_item.','.
                    //     $text_of_item.','.
                    // '</p>';
                    $item .=
                    '
                        <form action="" method="">    
                            <tr>
                                <td><img src="images/product/' . $file_type . '" width="150" height="100"/></td>
                                <td><input type="hidden" name="pno" value="' . $pno . '"><input type="text" name="pname" value="'.$pname.'"></td>
                                <td colspan="7"><input type="text" name="description" value="' . $description . '"></td>
                                <td><input type="text" name="unitprice" value="' . $unitprice . '"></td>
                                <td><input type="hidden" name="operate" value="modify"><button type="submit">????????????</button></td>
                            </tr>
                        </form>'
                    ;
                    $items .= $item;
                }
            }
        }
        else {
            echo '<script>alert("????????????????????????!\n????????????????????????");window.location.href="/website/login.php"</script>';
        }
    }
    else {
        echo '<script>alert("???????????????????????????????????????!");window.location.href="/website/login.php"</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>????????????</title>
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <?php include("import.php") ?>
</head>

<body>
    <!--================Header Area =================-->
    <?php include("nav.php") ?>
    <!--================???????????? =================-->
    <br><br><br><br>
    <section>
        <table>
            <tr><td colspan="3">???????????????: <?php echo "group_24"; ?></td><td colspan="9">?????????????????? <?php echo $num; ?> ???</td></tr>
            <tr>
                <th>??????</th>
                <th>????????????</th>
                <th colspan="7">??????</th>
                <th>??????</th>
                <th>??????</th>
            </tr>
            <?php echo $items; ?>
            <tr>
                <form action="" method="POST">
                    <td><input type="hidden" name="picture"><input type="text" name="account"></td>
                    <td><input type="text" name="pname"></td>
                    <td colspan="7"><input type="text" name="description"></td>
                    <td><input type="text" name="price"></td>
                    <td><input type="hidden" name="operate" value="add"><button type="submit">????????????</button></td>
                </form>
            </tr>
        </table>
    </section>
    </body>
</html>