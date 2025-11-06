<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Jurusan:</td>
                <td><select name="jurusan" id="">
                    <option value="RPL">RPL</option>
                    <option value="DKV">DKV</option>
                    <option value="TKR">TKR</option>
                    <option value="TKJ">TKJ</option>
                    <option value="DPIB">DPIB</option>
                </td>
            </tr>
            <tr>
                <td>Nilai Absen:</td>
                <td><input type="number" name="nilai_absen" id=""></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td><input type="number" name="nilai_tugas"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="number" name="nilai_uts" id=""></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="number" name="nilai_uas" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="LIHAT HASIL" name="submit" ></td>
            </tr>
        </table>
    </form>
</body>
<?php 
if (isset($_POST['submit'])) {
    //input
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nilai_absen = $_POST['nilai_absen'];
    $nila_tugas = $_POST['nilai_tugas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    //proses
    
    //uotput
    echo "HASIL PEMBELAJARAN <br>";
}
?>
</html>