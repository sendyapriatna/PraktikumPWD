<?php

// Menghubungkan file dengan koneksi.php
include "koneksi.php";

// Query untuk menghapus data sesuai dengan id
$sql = "DELETE FROM users WHERE id_user= '$_GET[id]'";
mysqli_query($con, $sql);
mysqli_close($conn);

// Halaman yang dituju jika berhasil menghapus data
header('location:tampil_user.php');
