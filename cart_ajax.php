<?php
session_start();
if(isset($_SESSION['cart']))
    $cart = $_SESSION['cart'];
else
    $cart="";

$oper = $_POST['oper'];
$id = $_POST['id'];

$arr_cart = array_filter(explode(",",$cart));//將購物車Cookie轉成陣列,並移除空值
if ($oper==1)//加入購物車
{
    if (!in_array($id,$arr_cart)){
    $arr_cart[]=$id;//加入陣列
    $link = mysqli_connect("localhost","root","");     
    mysqli_select_db($link, "beehotel");
    mysqli_query($link, "SET NAMES UTF8");
    $sqlstr1 = "SELECT * FROM `product` WHERE pno=".$id.";";
    $result=mysqli_query($link, $sqlstr1);
    $record = mysqli_fetch_object($result);
    $pno=$record->pno;
    $sqlstr2 = "INSERT INTO cart VALUES('".$pno."');";
    mysqli_query($link, $sqlstr2);
    mysqli_close($link);
    }
}
if ($oper==2)//取消購物車
{
    unset($arr_cart[array_search($id,$arr_cart)]);//搜尋陣列元素並移除該元素
    $arr_cart=array_values($arr_cart);//重新排列陣列順序
    $link = mysqli_connect("localhost","root","");     
    mysqli_select_db($link, "beehotel");
    mysqli_query($link, "SET NAMES UTF8");
    $sqlstr3 = "DELETE FROM `cart` WHERE pno=".$id.";";
    mysqli_query($link, $sqlstr3);
    mysqli_close($link);
}

$cart = implode(",",$arr_cart); //將所有商品以逗號連結成一字串
$_SESSION['cart']=$cart;//寫入SESSION

//傳回JSON格式資料
echo json_encode($arr_cart);

?> 