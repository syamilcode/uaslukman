<?php
// Konfigurasi koneksi database
$host = "localhost"; // Ganti dengan host Anda
$username = "root"; // Ganti dengan username Anda
$password = ""; // Ganti dengan password Anda
$database = "laundry_native"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
