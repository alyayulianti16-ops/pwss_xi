<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // for($i=1; $i<=100; $i++){
    //     if($i % 10 == 0){
    //         echo "ingin pulang!!!";
    //     }else if($i % 3 == 0){
    //         echo "tidak ngantuk!!!";
    //     }else{
    //         echo $i;
    //     }
    //     echo"<br>";
    // }
    // for ($i=1; $i<=5; $i++) {

    //     for($j=0; $j < $i; $j++) {
    //         echo "1";
    //     }

    //     echo "<br>";
    // }
    // for ($i=5; $i>=1; $i--) {

    //     for($j=1; $j <= $i; $j++) {
    //         echo $j;
    //     }

    //     echo "<br>";
    // }
    // for ($i=1; $i<=6; $i++) {

    //     for($j=0; $j < $i; $j++) {
    //         echo $i;
    //     }

    //     echo "<br>";
    // }
    for ($i=5; $i>=1; $i--) {
        $hasil = $i;

        for($j=$i; $j >= 1; $j--) {
            if($j==$i){
                echo abs("-".$j);
            }else{
                $hasil=$hasil-$j;
            echo "-".$j;
        }
        
    }
    echo "=".$hasil;
    echo "<br>";
    }
    
    ?>
</body>
</html>