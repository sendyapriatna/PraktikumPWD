<?php
include "koneksi.php";
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5($_POST['password']);
$sql = "INSERT INTO users(id_user,password,nama_lengkap,email,level) VALUES ('$id_user', '$pass','$nama','$email',0)";
$query = mysqli_query($con, $sql);
mysqli_close($con);
header('location:tampil_user.php');
