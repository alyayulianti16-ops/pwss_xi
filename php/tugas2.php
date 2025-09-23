<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $kelas='ekonomi';
    $jurusan='Tasik-Jakarta';
    $biaya=0;
    $jumlahtiket=6;

    if ($kelas =='ekskutif' && $jurusan == 'Tasik-Jakarta') {
        $biaya = 200000;
    }else if ($kelas=='eksekutif' && $jurusan == 'Tasik-Bandung'){
        $biaya = 120000;
    }else if ($kelas=='bisnis' && $jurusan == 'Tasik-Jakarta'){
        $biaya = 100000;
    }else if ($kelas == 'bisnis' && $jurusan == 'Tasik-Bandung'){
        $biaya = 80000;
    }else if ($kelas== 'ekonomi' && $jurusan == 'Tasik-Jakarta'){
        $biaya = 85000;
    }else if ($kelas == 'ekonomi' && $jurusan == 'Tasik-Bandung'){
        $biaya = 40000;
    }else if($kelas == 'eksekutif' && $jurusan == 'Tasik-Jakarta') {
        $biaya = 250000;
    }else{
        $biaya = 0;
    }

    if ($jurusan == 'Tasik-Jakarta'){
        if ($jumlahtiket > 5)
        $diskon = 5/100;
        $BiayaDiskon = $biaya*$diskon;
        $totalbiaya = $biaya-$BiayaDiskon;
    }else{
        $totalbiaya=$biaya;
    }

    echo "biaya = $biaya";

    ?>
</body>
</html>