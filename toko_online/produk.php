<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <title>produk</title>
    <style>
        table tr th {
            background-color: blue;
        }
        table tr td {
            background-color: silver;
        }
    </style>
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
            <th>GAMBAR</th>
            <th>AKSI</th>
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
                <td><?= $data ['Nama']?></td>
                <td><?= $data ['kategori']?></td>
                <td><?= $data ['deskripsi']?></td>
                <td><?= $data ['jumlah']?></td>
                <td><?= $data ['harga']?></td>
                <td>
                    <?php
                    if(file_exists('image/'.$data['gambar'])){
                        ?>
                        <img src="<?= 'image/'.$data['gambar']?>" alt="" width="50" height="50">
                        <?php
                    }
                    ?>
                </td>
                <td>
                    <a href="delete-produk.php?id=<?= $data['id']?>" onclick="return confirm('yakin hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>