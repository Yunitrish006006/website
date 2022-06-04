<?php
$user = trim($_POST['registerAccount']) ;
$link = mysqli_connect("localhost","root","","group_24");

$sql = "SELECT * FROM account where account='$user' ";

mysqli_query($link, 'SET CHARACTER SET utf8');

if ( $result = mysqli_query($link, $sql) ) {
    if( $row = mysqli_fetch_assoc($result) ){
       echo "er";
    }else{
        echo $user;
    }
}
mysqli_free_result($result); 
mysqli_close($link); 
?>