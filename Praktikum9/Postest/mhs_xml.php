<?php
// Memamnggil koneksi php untuk menghubungkan ke database
include "koneksi.php";
// deklarasi xml
header('Content-Type: text/xml');
// Query untuk mengambil semua nilai pada tabel mahasiswa
$query = "SELECT * FROM mahasiswa";
$hasil = mysqli_query($con, $query);
$jumField = mysqli_num_fields($hasil);
// Deklarasi versi xml
echo "<?xml version='1.0'?>";
echo "<data>";
// Perulangan untuk menampilkah data mahasiswa
while ($data = mysqli_fetch_array($hasil)) {
    echo "<mahasiswa>";
    echo "<nim>", $data['nim'], "</nim>";
    echo "<nama>", $data['nama'], "</nama>";
    echo "<jkel>", $data['jkel'], "</jkel>";
    echo "<alamat>", $data['alamat'], "</alamat>";
    echo "<tgllhr>", $data['tgllhr'], "</tgllhr>";
    echo "</mahasiswa>";
}
echo "</data>";
