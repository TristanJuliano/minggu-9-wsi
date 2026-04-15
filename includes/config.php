<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "akademik_wsi";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}


mysqli_set_charset($koneksi, "utf8");
?>
