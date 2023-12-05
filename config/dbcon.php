<?php
    $server = 'localhost';
    $host   = 'root';
    $pass   = '';
    $name   = 'ieat_map';

    $conn = mysqli_connect($server, $host, $pass, $name);

    if($conn){
        die('Connection Error!').mysqli_connect_error();
    }
    else{
        echo "connected";
    }
?>