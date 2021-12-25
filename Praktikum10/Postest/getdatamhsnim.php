<?php
require_once "koneksi.php";
$nim = $_GET['nim'];
if(!empty($nim)){
    $sql = "select * from mahasiswa where nim='$nim'";
    $query = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($query)) {
     $data[] = $row;
    }
    header('content-type: application/json');
    echo json_encode($data);
    mysqli_close($con);
}
else{
    $sql = "select * from mahasiswa";
    $query = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($query)) {
     $data[] = $row;
    }
    header('content-type: application/json');
    echo json_encode($data);
    mysqli_close($con);
    }

?>