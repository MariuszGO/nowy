<?php

echo "Witaj świecie ";

$liczba = 11; //zmienna całkowita integer
$zmienna = "Gorlice"; //zmienna łańcuchowa String
$zmienna1 = 3.44; //zmienna zmiennoprzecinkowa
$logicza = true; //zmienna logiczna

$tablica[0] = "Adam";
$tablica[1] = "Krzysztof";
$tablica[2] = "Paweł";

echo $tablica[1];

$liczba_a = 10;
$liczba_b = 20;

$wynik = $liczba_a / $liczba_b;

// +, -,  * , /

echo " Suma liczb $liczba_a i $liczba_b jest równa $wynik";

// && - i logiczne
// || - lub logiczne

$zmienna3 = true;
$zmienna4 = true;

if ($zmienna3 && $zmienna4) {
    echo "Jedno i drugie jest prawda";
} else {
    echo "jedno i drugie są nieprawda lub jedno z nich jest nie prawda";
}

$zmienna5 = 70;

echo "<br><br>";

if ($zmienna5 < 50) {
    echo "Wartość $zmienna5 jest mniejsza od 50";
}

$zmienna6 = 11;

if ($zmienna6 < 50) {
    echo "wartość $zmienna6 jest mniejsza od 50";
    echo "!!!";
} elseif ($zmienna6 > 50) {
    echo "wartość $zmienna6 jest większa od 50";
} else {
    echo "Wartość zmiennej jest równa 50";
}


// if ( warunek ) {
// instrukcje;
//}

// if ( warunek ) {
// instrukcje;
//}
//else
//{
//instrukcje1;
//}

// if ( warunek ) {
// instrukcje;
//}
//elseif( warunek )
//{
//instrukcje1;
//}
//else
//{
//instrukcja2;
//}

echo "<br><br>";
$dzien_tygodnia = 3;
switch ($dzien_tygodnia) {
    case 1:
        echo "<p>Dzisiaj jest poniedziałek.</p>";
        echo "<p>To początek tygodnia.</p>";
        echo "<p>Miłego dnia!</p>";
        echo "Każdy lubi poniedziałki!";
        echo "<hr>";
        break;
    case 2:
        echo "<p>Dzisiaj jest wtorek.</p>";
        break;
    case 3:
        echo "<p>Dzisiaj jest środa.</p>";
        break;
    case 4:
        echo "<p>Dzisiaj jest czwartek.</p>";
        break;
    case 5:
        echo "<p>Dzisiaj jest piątek.</p>";
        break;
    case 6:
        echo "<p>Dzisiaj jest sobota.</p>";
        break;
    case 7:
        echo "<p>Dzisiaj jest niedziela.</p>";
        break;
    default:
        echo "<p>Podałeś wartość spoza zakresu.</p>";
        break;
}

?>
