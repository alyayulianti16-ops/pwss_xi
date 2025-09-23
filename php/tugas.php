<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $text = "Saya suka belajar php. php sangat menyenangkan karena php bisa digunakan untuk membuat aplikasi web dan juga API. semangat belajar php";
    echo $text;
    echo "<br>";
    echo str_replace("php", "PHP", $text);
    echo "<br>";
    $word = explode(" ",$text);
    echo str_word_count("PHP");
    echo "<br>";
    ?>
</body>
</html>