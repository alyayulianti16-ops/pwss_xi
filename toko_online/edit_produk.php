<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

use Dom\Mysql;

    if (isset($_GET['id']) == false) {
        echo "<script>Window.location.href='produk.php;</script>";
    }
    include "koneksi.php";
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);

    // proses edit data
    if (isset($_POST['simpan'])) {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $jumlah = mysqli_real_escape_string($koneksi, $_POST['jumlah']);
    $harga = mysqli_real_escape_string($koneksi, $_POST['harga']);

    $gambar = $_FILES['gambar'];
    $nama_gambar = $gambar['name'];
    $size_gambar = $gambar['size'];
    $target_file = 'image/' . $nama_gambar;
    
    if (is_uploaded_file($gambar['tmp_name']) == false) {
        $sql = "UPDATE produk SET nama_produk='$nama', kategori='$kategori', deskripsi='$deskripsi', jumlah='$jumlah', harga='$harga' WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            echo "<script>window.location.href='produk.php';</script>";
        }
    } else {
        if ($size_gambar < 300000) {
            if (move_uploaded_file($gambar['tmp_name'], $target_file)) {
                $sql = "UPDATE produk SET nama_produk='$nama', kategori='$kategori', deskripsi='$deskripsi', jumlah='$jumlah', harga='$harga', gambar='$nama_gambar' WHERE id='$id'";
                $query = mysqli_query($koneksi, $sql);
                if ($query) {
                    echo "<script>window.location.href='produk.php';</script>";
                }
            } else {
                echo "data gagal disimpan karena gambar gagal di upload";
            }
        } else {
            echo "mohon maaf ukuran gambar terlalu besar";
        }
    }
}

//menampilkan data berdasarkan id
    $sql = "SELECT * FROM produk WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_array($query);
    ?>
    <h3>Edit Produk</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>
                    <input type="text" name="nama" id="" value="<?= $data['nama_produk'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <input type="text" name="kategori" id="" value="<?= $data['kategori'] ?>">
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>
                    <textarea name="deskripsi" id="" cols="30" rows="10"><?= $data['deskripsi'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>
                    <input type="number" name="jumlah" id="" value="<?= $data['jumlah'] ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga" id="" value="<?= $data['harga'] ?>">
                </td>
            </tr>
            <tr>
                <td>Upload gambar</td>
                <td>
                    <input type="file" name="gambar" id="" accept="image/*">
                    <?php
                    if (file_exists('image/' . $data['gambar'])) {
                        ?>
                        <img src="<?= 'image/' . $data['gambar'] ?>" alt="" width="50" height="50">
                        <?php
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" name="simpan">
                </td>
            </tr>
        </table>
    
</body>
</html>