<?php
$host="localhost";
$user="root";
$pass="";
$database="barang";

$koneksi=mysqli_connect($host, $user, $pass, $database);
if ($koneksi){
    $buka=mysqli_select_db($koneksi,$database);
    //echo "Database dapat terhubung";
    if (!$buka){
        echo "Database tidak dapat terhubung";
    }
}else {
    echo "MySQL tidak Terhubung";
}

?>