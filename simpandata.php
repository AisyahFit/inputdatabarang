<?php
include "koneksi.php";

$no = $_POST['no'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$jumlah = $_POST['jumlah'];

$simpan = mysqli_query($koneksi, "insert into printer values ('$no', '$nama', '$warna', '$jumlah')");

if ($simpan){
    echo "<script> alert ('Data Berhasil Disimpan')</script>";
    header ("refresh:0;index.php");
}else {
    echo "<script> alert ('Data Tidak Berhasil Disimpan')</script>";
    header ("refresh:0;index.php)");
}

?>