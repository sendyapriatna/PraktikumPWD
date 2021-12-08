<?php

// Menghubungkan file dengan koneksi.php
include_once("koneksi.php");

// Get nim untuk mengambil nim mahasiswa yang akan di hapus
// dimana nim berfungsi sebagai id
$nim = $_GET['nim'];

// Menghapus data mahasiswa berdasarkan nim yang di tampung
// Query DELETE berdungsi menghapus data 
$result = mysqli_query($con, "DELETE FROM mahasiswa WHERE nim='$nim'");

// Setelah mengahpus data akan langsung berpindah ke halaman index untuk 
// menampilkan hasilnya
header("Location:index.php");
