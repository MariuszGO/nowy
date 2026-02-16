<?php




for ($i=0; $i<100; $i++){

    $liczba = rand(10,1000);

    if($liczba%2 ==0){
        $jaka = "parzyta";
    }
    else{
        $jaka = "nieparzysta";
    }

    if($liczba<500)  $min="mniejsza"; else  $min="wieksza";


    echo "<a href='drugi1.php?liczba=$liczba&jaka=$jaka&min=$min'>$liczba</a><br>";

}


?>