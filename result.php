<?php 
$string = $_GET["string"];
$banned_word = $_GET["restrict"];
$result = str_replace($banned_word, "***", $string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div>
            <div class="title">Frase senza censure:</div>
            <?php
            echo $string;
            ?>
            <br>
            <?php
            echo "La frase contiene " . strlen($string) . " caratteri";
            ?>

        </div>
    
        <div>
            <div class="title">Parola da censurare:</div>
            <?php
            echo $banned_word;
            ?>
        </div>
    
        <div>
            <div class="title">Risultato finale:</div>
            <?php
            echo $result;
            ?>
            <br>
            <?php
            echo "La frase contiene " . strlen($result) . " caratteri";
            ?>

        </div>
    </div>
</body>
</html>