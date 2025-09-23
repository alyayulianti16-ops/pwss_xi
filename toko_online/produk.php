<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produk</title>
</head>
<body>
    <form action="" method="get">
        <input type="search" name="cari" id="">
        <input type="submit" value="Cari">

    </form>
    <br>
    <table border=1>
        <tr>
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>KATEGORI</th>
            <th>DESKRIPSI</th>
            <th>STOK</th>
            <th>HARGA</th>
        </tr>
        <?php
        include "koneksi.php";
        if(isset($_GET['cari'])){
            $cari =mysqli_real_escape_string($koneksi, $_GET['cari']);
            $sql = "SELECT*FROM produk WHERE nama_produk LIKE '%$cari%' OR kategori LIKE '%$cari%'";
            // $sql = "SELECT*FROM produk WHERE nama_produk='$cari' OR kategori='$cari'";
        }else{
            $sql = "SELECT*FROM produk";
        }
        $query = mysqli_query($koneksi, $sql);
        $no = 1;
        while ($data=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data ['nama_produk']?></td>
                <td><?= $data ['kategori']?></td>
                <td><?= $data ['deskripsi']?></td>
                <td><?= $data ['jumlah']?></td>
                <td><?= $data ['harga']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>