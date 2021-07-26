<?php
$host_name  = "localhost";
$user_db  = "root";
$password_db = "";
$nama_db = "tiket_kai";

$koneksi = mysqli_connect($host_name, $user_db, $password_db);
$database = mysqli_select_db($koneksi, $nama_db);

if (!$koneksi){
echo "Koneksi gagal . .";
} else {
if(!$database){
echo "Database tidak ditemukan . .";
}
}
?>