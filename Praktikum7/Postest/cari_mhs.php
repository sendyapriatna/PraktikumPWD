<?php

// koneksi ke database
include 'koneksi.php';
?>
<h3>Form Pencarian Dengan PHP MAHASISWA</h3>

<!-- Form dengan method POST -->
<form action="" method="get">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];

    // Menampilkan variable yang akan di cari
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}
?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
    </tr>
    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];

        // Query untuk menampilkan semua data dari tabel mahasiswa berdasarkan nama yang mirip
        $sql = "select * from mahasiswa where nama like'%" . $cari . "%'";
        $tampil = mysqli_query($con, $sql);
    } else {

        // Query menampilkan semua data dari tabel mahasiswa
        $sql = "select * from mahasiswa";
        $tampil = mysqli_query($con, $sql);
    }
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
    ?>
        <tr>

            <!-- No increment digunakan untuk memberika nomor pada tabel -->
            <td><?php echo $no++; ?></td>

            <!-- Menampilkan nama mahasiswa dari hasil pencarian di atas -->
            <td><?php echo $r['nama']; ?></td>
        </tr>
    <?php } ?>
</table>