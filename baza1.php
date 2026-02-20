<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Baza</title>
</head>
<body>

<?php
//Pierwsza najprostsza wersja wysyłania
    $polaczenie = mysqli_connect("localhost","root","","szkola");
    $zapytanie ="INSERT into uczniowie values (NULL, 'Jan', 'Kowalski', 20)";
    $rezultat = mysqli_query($polaczenie,$zapytanie);
  
//pobieranie
    //połączenie już jest id połączenia to : $polaczenie
    $zapytanie1 = "SELECT * FROM uczniowie";
    $rezultat1 = mysqli_query($polaczenie,$zapytanie1);
    echo "<table>";
    while($tablica = mysqli_fetch_array($rezultat1)){
        echo "<tr><td>". $tablica['imie'] . "</td><td>" . $tablica['nazwisko'] . "</td><td>" . $tablica['wiek'] . "</td></tr>";
    }

    echo "</table>";


//koniec pracy rozłączenie się z bazą
    mysqli_close($polaczenie);
?>
    
</body>
</html>