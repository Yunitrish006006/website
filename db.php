<?php
    if (session_status() == PHP_SESSION_NONE) {session_start();}
    $link = mysqli_connect("localhost", "root", "", "group_24") or die(mysqli_error());
?>