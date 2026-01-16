<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<?php

$imie =  $_GET['imie'];
$wiek = $_GET['wiek'];

echo "Twoje imie to: $imie a twój wiek to: $wiek lat <br>";

echo "Twoje imie to: "  . $imie . " a twój wiek to: " . $wiek . " lat"; 

?>

    
</body>
</html>