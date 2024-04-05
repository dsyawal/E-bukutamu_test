<?php
$_SERVER = "localhost";
$user = "root";
$password = "";
$database = "db_bukutamu";


$koneksi = mysqli_connect("$_SERVER", "$user", "$password", "$database");

// Memeriksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}