<?php
    $db=mysqli_connect("localhost", "root", "boris2020", "boristech");
    mysqli_query($db, "SET NAMES UTF8");
    $rez=mysqli_query($db, "SELECT * FROM specification ");
    $sve=mysqli_fetch_all($rez, MYSQLI_ASSOC);
    echo JSON_encode($sve, 256);
?>