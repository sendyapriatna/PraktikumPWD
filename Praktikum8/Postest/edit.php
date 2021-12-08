<?php

// Menghubungkan file dengan koneksi.php
include_once("koneksi.php");

// Melakukan pemeriksaan inputan dari form di atas lalu memasukan ke database
// dimana beberapa variabel dibawah digunakan untuk menampung inputan
if (isset($_POST['update'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgllhr = $_POST['tgllhr'];

    // Query untuk mengupdate data mahasiswa berdarkan nim yang di tentukan
    $result = mysqli_query($con, "UPDATE mahasiswa SET
nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='$tgllhr' WHERE nim='$nim'");

    // Redirect ke halaman index untuk menampilkan data yang di edit / update
    header("Location: index.php");
}
?>
<?php

// Menampung nim mahasiswa yang akan di update
$nim = $_GET['nim'];

// Menampilkan data berdasarkan nim
// Query untuk menampilkan data mahasiswa berdasarkan nim yang di pilih
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$nim'");
while ($user_data = mysqli_fetch_array($result)) {
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgllhr = $user_data['tgllhr'];
}
?>
<html>

<head>
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br /><br />

    <!-- Tag form digunakan untuk menginput data baru yang akan di update-->
    <!-- Method post mengirim data inputan -->
    <form name="update_mahasiswa" method="post" action="edit.php">

        <!-- Deklarasi table -->
        <table border="0">

            <!-- Tag <tr> berungsi untuk membuat baris -->
            <tr>

                <!-- Tag <tr> berungsi untuk membuat kolom -->
                <td>Nama</td>

                <!-- Tag input dengan type text digunakan untuk -->
                <!-- menginput data berupa texe -->
                <td><input type="text" name="nama" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="jkel" value=<?php echo $jkel; ?>></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td><input type="text" name="tgllhr" value=<?php echo $tgllhr; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="nim" value=<?php echo $_GET['nim']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>