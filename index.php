<!DOCTYPE html>
<html>
    <head>
        <title>Tampilkan Barang</title>
    </head>
    <body>
    <h2 align="center">Data Barang</h2>
    <table border="1" align="center" width="100%">
        <tr bgcolor="yellow">
            <th>No</th>
            <th>Nama Merek</th>
            <th>Warna Barang</th>
            <th>Jumlah Barang</th>
        </tr>
        <?php
                include "koneksi.php";
                $query = mysqli_query ($koneksi, "SELECT *FROM printer");
                while ($data = mysqli_fetch_array($query)) {
            ?>
        <tr>
            <td><?php echo $data['no']; ?></td>
            <td><?php echo $data['nama_merek']; ?></td>
            <td><?php echo $data['warna']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
        </tr>
        <?php
                }
        ?>
</table>
        <p align="center"><a href="tambahdata.php">Tambah Data</a></p>
</body>
</html>