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
    }
    else
        {
        echo"<form method='post'>
        <label for='imie'>Imie: </label>
        <input type='text' id='imie' name='imie'><br>
        <label for='w'>Wiek: </label>
        <input type='number id='w' name='wiek' min='1'><br>
        <button>Prześlij</button></form>";
        
    
        }
    ?>

    
</body>
</html>