<?php
include "db.php";
if (session_status() === PHP_SESSION_NONE) session_start();
$id = $_SESSION['id'];
$sql = "delete from `details` where id='$id'";
$name = $_SESSION['name'];
mysqli_query($link, $sql);
if (!mysqli_query($link, $sql)) {
	die(mysqli_error());
} else {
	echo "
         <script>
            setTimeout(function(){window.location.href='comment_detail.php?name=" . $name . "&id=" . $id . "';},300);
        </script>";

}
