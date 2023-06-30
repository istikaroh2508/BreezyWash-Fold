<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_NAME','laudry');

//conecting to the database
$conn = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menetapkan pengaturan karakter
mysqli_set_charset($conn, "utf8");

// Mengembalikan objek koneksi
return $conn;
?>