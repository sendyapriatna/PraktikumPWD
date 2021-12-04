<?php
// koneksi ke database
include 'koneksi.php';
?>
<h3>Form Pencarian DATA KHS Dengan PHP </h3>
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
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Kode MK</th>
        <th>Nama Mata Kuliah</th>
        <th>Nilai</th>
    </tr>

    <?php
    if (isset($_GET['cari'])) {
        $cari     = $_GET['cari'];

        // Query untuk menampilkan semua data dengan menampilkan field dari tabel lain menggunakan Inner join
        // dan pencarian berdasarkan nim mahasiswa
        $sql     = "SELECT mahasiswa.NIM, khs.nilai, mahasiswa.nama AS namaMahasiswa, kode, matakuliah.nama AS namaMK FROM khs
        INNER JOIN mahasiswa ON khs.NIM=mahasiswa.nim
		INNER JOIN matakuliah ON khs.kodeMK=matakuliah.kode
		WHERE mahasiswa.NIM='$cari'";
        $tampil = mysqli_query($con, $sql);
    } else {
        // Query untuk menampilkan semua data dengan menampilkan field dari tabel lain menggunakan Inner join
        $sql     = "SELECT mahasiswa.NIM, khs.nilai, mahasiswa.nama AS namaMahasiswa, kode, matakuliah.nama AS namaMK FROM khs
        INNER JOIN mahasiswa ON khs.NIM=mahasiswa.nim 
        INNER JOIN matakuliah ON khs.kodeMK=matakuliah.kode";
        $tampil = mysqli_query($con, $sql);
    }
    $no = 1;
    while ($r = mysqli_fetch_array($tampil)) {
    ?>

        <tr>
            <!-- No increment digunakan untuk memberika nomor pada tabel -->
            <td><?php echo $no++; ?></td>
            <!-- Menampilkan data dari hasil pencarian di atas -->
            <td><?php echo $r['NIM']; ?></td>
            <td><?php echo $r['namaMahasiswa']; ?></td>
            <td><?php echo $r['kode']; ?></td>
            <td><?php echo $r['namaMK']; ?></td>
            <td><?php echo $r['nilai']; ?></td>
        </tr>

    <?php } ?>

</table>