<?php

    $link = mysqli_connect("localhost", "root", "root123456", "group_24")
    or die("無法開啟MySQL資料庫連結!<br>");


    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
    if ($result = mysqli_query($link, "SELECT * FROM account")) {
        while ($row = mysqli_fetch_assoc($result)) {
            $a['data'][] = 
            array(
                    $row["account"], 
                    $row["level"], 
                    $row["password"],
                    $row["email"]
                );
        }
        mysqli_free_result($result); // 釋放佔用的記憶體
    }
    mysqli_close($link); // 關閉資料庫連結

    echo json_encode($a);

?>