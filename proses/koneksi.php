<?php

$host = "localhost";
$username = "root";
$pass = "";
$db = "laundry";

$koneksi = mysqli_connect($host, $username, $pass, $db);
// Cek koneksi
// if (!$koneksi) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// echo "Koneksi berhasil";