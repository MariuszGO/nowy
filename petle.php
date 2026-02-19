<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle w PHP</title>
</head>
<body>

<?php
for ($i = 0; $i < 10; $i++) {
    echo "<p>$i</p>";
}

$i = 0;
while ($i < 10) {
    echo "<p>$i</p>";
    $i++; // alternatywny zapis: $i = $i + 1 lub $i += 1
}

$i = 0;
do {
    echo "<p>$i</p>";
    $i++;
} while ($i < 10);

$tablica = array(12, 2323, 33, 43, 635, 78, 18, 9);

foreach ($tablica as $wartosc) {
    echo "<p>$wartosc</p>";
}

foreach ($tablica as $index => $wartosc) {
    echo "<p>Indeks tablicy: $index a przechowywana wartość: $wartosc</p>";
}
?>

</body>
</html>
