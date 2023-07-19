<html>
<head>
    <title>Input Barang</title>
</head>
<body>
    <h2 align="center">Tambah Data Barang</h2>

    <form action="simpandata.php" method="post">
    <table align="center" bgcolor="yellow" width="100%">
        <tr>
            <td>No</td>
            <td>:</td>
            <td>
                <input type="text" name="no" size="20" placeholder="Masukkan No Barang">
            </td>
        </tr>
        <tr>
            <td>Nama Merek</td>
            <td>:</td>
            <td>
                <input type="text" name="nama" size="20" placeholder="Masukkan Merek Barang">
            </td>
        </tr>
        <tr>
            <td>Warna Barang</td>
            <td>:</td>
            <td>
                <input type="text" name="warna" size="20" placeholder="Masukkan Warna Barang">
            </td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td>:</td>
            <td>
                <input type="text" name="jumlah" size="20" placeholder="Masukkan Jumlah Barang">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="Simpan">
                <input type="reset" name="ulangi" value="Ulangi">
                <input type="button" name="kembali" value="Kembali" onclick="self.history.back() ">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>