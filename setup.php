<?php
require_once 'config/database.php';

$sql = "CREATE TABLE IF NOT EXISTS anggota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomor_anggota VARCHAR(50) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    alamat TEXT,
    telepon VARCHAR(20),
    email VARCHAR(100) NOT NULL,
    tanggal_daftar DATE,
    status ENUM('aktif', 'nonaktif') DEFAULT 'aktif'
)";

if ($conn->query($sql) === TRUE) {
    echo "Table anggota created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>