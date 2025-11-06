<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="number" name="nama_barang" id=""></td>
            </tr>
            <tr>
                <td>Jumlah beli</td>
                <td><input type="number" name="jumlah_beli" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="BAYAR" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
<?php 
if (isset($_POST['submit'])) {
    //input
    $nm_barang = $_POST['nama_barang'];
    $hrg_barang = $_POST['harga_barang'];
    $jml_beli = $_POST['jumlah_beli'];

    //proses
    $total_bayar = $hrg_barang*$jml_beli;

    //output
    echo "BARANG YANG DIBELI: ". $nm_barang . "<br>";
    echo "HARGA BARANG". $hrg_barang."<br>";
    echo "JUMLAH BELI". $jml_beli."<br>";
    echo "TOTAL BAYAR". $total_bayar."<br>";
}
?>
</html>