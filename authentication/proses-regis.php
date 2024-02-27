<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"INSERT INTO users(email, username, password, level) VALUES('$email','$username','$password', 'pengunjung')");
if ($login) {
	echo "Sukses Di Tambahkan!";
}
 
?>