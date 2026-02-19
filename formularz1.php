<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz1</title>
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST['imie'];
        $wi = $_POST['wiek'];
        echo "Imie to: $imie a wiek: $wi lat";

        $duze = strtoupper($imie);
        $duzep = mb_strtoupper($imie);
        $male = strtolower($imie);

        echo "<br><br>Zamiana na duże litery strtoupper() lub z polskimi znakami mb_strtoupper(): $duze";
        echo "<br><br>Zamiana na duże litery strtolower() : $male";
    } else {
        echo "<form method='post'>
        <label for='imie'>Imie: </label>
        <input type='text' id='imie' name='imie'><br>
        <label for='w'>Wiek: </label>
        <input type='number' id='w' name='wiek' min='1'><br>
        <button>Prześlij</button></form>";
    }


    //         | Funkcja             | Opis                                |
    // | ------------------- | ----------------------------------- |
    // | `strtoupper()`      | Zmiana na WIELKIE LITERY (ASCII)    |
    // | `strtolower()`      | Zmiana na małe litery               |
    // | `ucfirst()`         | Pierwsza litera wielka              |
    // | `lcfirst()`         | Pierwsza litera mała                |
    // | `ucwords()`         | Każde słowo wielką literą           |
    // | `mb_strtoupper()`   | Wielkie litery UTF-8 ✅              |
    // | `mb_strtolower()`   | Małe litery UTF-8                   |
    // | `mb_convert_case()` | Zaawansowana zmiana wielkości liter |


    // | Funkcja                | Opis                            |
    // | ---------------------- | ------------------------------- |
    // | `trim()`               | Usuwa spacje z początku i końca |
    // | `ltrim()`              | Usuwa z lewej                   |
    // | `rtrim()`              | Usuwa z prawej                  |
    // | `chop()`               | Alias `rtrim()`                 |
    // | `strip_tags()`         | Usuwa HTML                      |
    // | `htmlspecialchars()`   | Zamienia znaki na encje HTML    |
    // | `html_entity_decode()` | Odwraca encje HTML              |
    // | `addslashes()`         | Dodaje ukośniki                 |
    // | `stripslashes()`       | Usuwa ukośniki                  |

    // | Funkcja             | Opis                                          |
    // | ------------------- | --------------------------------------------- |
    // | `strpos()`          | Pozycja pierwszego wystąpienia                |
    // | `stripos()`         | Jak wyżej (bez uwzględniania wielkości liter) |
    // | `strrpos()`         | Ostatnie wystąpienie                          |
    // | `str_contains()`    | Czy zawiera tekst (PHP 8+) ✅                  |
    // | `str_starts_with()` | Czy zaczyna się od (PHP 8+)                   |
    // | `str_ends_with()`   | Czy kończy się na (PHP 8+)                    |
    // | `substr_count()`    | Liczy wystąpienia                             |

    // trim()

    // str_replace()

    // explode() / implode()

    // strlen() / mb_strlen()

    // strpos() / str_contains()

    // substr() / mb_substr()

    // htmlspecialchars()

    // preg_match()


    ?>

</body>
</html>
