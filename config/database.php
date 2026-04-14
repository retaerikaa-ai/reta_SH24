<?php
$host = "localhost";
$user = "root";      // default XAMPP
$pass = "";          // kosong kalau XAMPP
$db   = "reta_ca4"; // sesuaikan dengan nama database kamu

$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>