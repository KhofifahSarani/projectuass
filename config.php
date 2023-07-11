<?php
    $host = "34.101.174.140";
    $username = "BeautyMe.";
    $password = "freeyork123";
    $database = "signup"; //nama databsenya

    // Membuat koneksi ke database
    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Memeriksa koneksi
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
?>