<?php
// Menghubungkan file dengan koneksi.php
include "koneksi.php";

// Deklarasi variable untuk menampung data input dengan method Post
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];

// md5 digunakan untuk enkripsi password
$pass = md5($_POST['password']);

// Insert data ke tabel database
$sql = "INSERT INTO users(id_user,password,nama_lengkap,email,level) VALUES ('$id_user', '$pass','$nama','$email',0)";
$query = mysqli_query($con, $sql);
mysqli_close($con);
header('location:tampil_user.php');
