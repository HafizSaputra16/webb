<?php
$servername = "sqlXXX.epizy.com"; // Ganti dengan server database Anda
$username = "username_database"; // Ganti dengan username database Anda
$password = "password_database"; // Ganti dengan password database Anda
$dbname = "database_name"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>