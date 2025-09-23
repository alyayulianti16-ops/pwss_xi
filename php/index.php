<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$nama = "ALYA";
    //$umur = 12;
    // echo "Nama saya: $nama <br>";
    //echo "Nama saya:  $nama  <br>";
    //echo "umur: $umur";
    //echo "<br>";
    $text = "SMK YPC TASIKMALAYA";
    //echo $text;
    //echo "<br>";
    echo str_replace("SMK YPC TASIKMALAYA", "SMK YPC TASIKMALAYA", $text);
    $word = explode(" ", $text);
    echo $word[1];
    echo "<br>";
    echo implode("-", $word);
    echo "<br>";
    echo strlen($text); 
    ?>
</body>
</html>