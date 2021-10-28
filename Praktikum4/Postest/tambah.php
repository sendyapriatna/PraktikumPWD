<?php
// define variables and set to empty values
$nimErr = $namaErr = $genderErr = $alamatErr = $tglErr = "";
// Melakukan pemeriksaan inputan dari form di atas lalu memasukan ke database
// dimana beberapa variabel dibawah digunakan untuk menampung inputan
if (isset($_POST['Submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgllhr = $_POST['tgllhr'];


    if (empty($_POST["nim"])) {
        $nimErr = "* Nim harus diisi";
    } else {
        $nim;
    }

    if (empty($_POST["nama"])) {
        $namaErr = "* Nama harus diisi";
    } else {
        $nama;
    }
    if (empty($_POST["jkel"])) {
        $genderErr = "* Jenis Kelamin harus diisi";
    } else {
        $jkel;
    }
    if (empty($_POST["alamat"])) {
        $alamatErr = "* Alamat harus diisi";
    } else {
        $alamat;
    }
    if (empty($_POST["tgllhr"])) {
        $tglErr = "*Tanggal Lahir harus diisi";
    } else {
        $tgllhr;
    }

    if ($_POST['nim'] && $_POST['nama'] && $_POST['alamat'] && $_POST['jkel'] && $_POST['tgllhr']) {
        # code...

        // Menghubungkan file dengan koneksi.php
        include_once("koneksi.php");

        // Insert data ke tabel database
        $result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr) VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");

        // Kondisi jika koneksi berhasil dan data berhasil di input ke database
        echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
    }
}
?>
<html>

<head>
    <title>Tambah data mahasiswa</title>
    <style>
        .error {
            color: #FFF;
            background-color: #FF0000;
        }
    </style>
</head>

<body>

    <!-- Hyperlink ke halaman index.php -->
    <a href="index.php">Go to Home</a>
    <br /><br />

    <!-- Tag form digunakan untuk menginput data baru -->
    <!-- Method post untuk mengirim data inputan -->
    <form action="tambah.php" method="post" name="form1">

        <!-- Deklarasi table -->
        <table border="0">

            <!-- Tag <tr> berungsi untuk membuat baris -->
            <tr>

                <!-- Tag <tr> berungsi untuk membuat kolom -->
                <td>Nim</td>

                <!-- Tag input dengan type text digunakan untuk -->
                <!-- menginput data berupa texe -->
                <td><input type="text" name="nim"></td>
                <td><span class="error"> <?php echo $nimErr; ?></span></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
                <td><span class="error"> <?php echo $namaErr; ?></span></td>
            </tr>
            <tr>
                <td>Gender (L/P)</td>
                <td><input type="text" name="jkel"></td>
                <td><span class="error"> <?php echo $genderErr; ?></span></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
                <td><span class="error"> <?php echo $alamatErr; ?></span></td>
            </tr>
            <tr>
                <td>Tgl Lahir</td>
                <td><input type="text" name="tgllhr"></td>
                <td><span class="error"> <?php echo $tglErr; ?></span></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

</body>

</html>