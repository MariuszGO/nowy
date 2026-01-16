<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<H1> Metoda GET </H1>
<form action="nowy.php" method="GET">

<label for="imie">Imie: </label>
<input type="text" id="imie" name="imie"><br>
<label for="wiek">Ilość lat: </label>
<input type="number" id="wiek" name="wiek" min="18" max="30"><br>
<input type="submit" value="wyślij">

</form>

<br><br>
<H1>Metoda POST</H1>
<form action="nowy1.php" method="POST">

<label for="imie">Imie: </label>
<input type="text" id="imie" name="imie"><br>
<label for="wiek">Ilość lat: </label>
<input type="number" id="wiek" name="wiek" min="18" max="30"><br>
<input type="submit" value="wyślij">

</form>

    
</body>
</html>
