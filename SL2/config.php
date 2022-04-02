<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "user";

    $mysqli = mysqli_connect($server, $username, $password, $db_name) or 
    die(mysqli_connect_error());
?>