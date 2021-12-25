<h3>Form Pencarian Mahasiswa Dengan NIM </h3>
<form action="" method="POST">
    <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php
    if (isset($_POST['cari'])) {
        $cari = $_POST['cari'];
        $url = "https://sndy.000webhostapp.com/getdatamhsnim.php?nim=$cari";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        $result = json_decode($response);
        foreach ($result as $r) {
            echo "<p>";
            echo "NIM : " . $r->nim . "<br />";
            echo "Nama : " . $r->nama . "<br />";
            echo "jenis kel : " . $r->jkel . "<br />";
            echo "Alamat : " . $r->alamat . "<br />";
            echo "Tgl Lahir : " . $r->tgllhr . "<br />";
            echo "</p>";
        }
    }else{
        $url = "https://sndy.000webhostapp.com/getdatamhsnim.php";
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($client);
        $result = json_decode($response);
        foreach ($result as $r) {
            echo "<p>";
            echo "NIM : " . $r->nim . "<br />";
            echo "Nama : " . $r->nama . "<br />";
            echo "jenis kel : " . $r->jkel . "<br />";
            echo "Alamat : " . $r->alamat . "<br />";
            echo "Tgl Lahir : " . $r->tgllhr . "<br />";
            echo "</p>";
        }
    }
    