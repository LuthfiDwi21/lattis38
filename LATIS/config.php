<?php
    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $database   = "lattis";

    $koneksi    = mysqli_connect($server, $user, $password, $database);

    if(!$koneksi){
        die("<script>alert('Gagal Tersambung Dengan Database')</script>");
    }
?>