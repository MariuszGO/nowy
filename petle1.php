<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętle 2</title>
</head>
<body>

<?php

for($i=0;$i<101;$i++){

    echo "$i ";
}

echo "<Hr>";
$i=0;
while($i<100){
    echo "$i ";
    $i+=2;
}
echo "<Hr>";
$i=0;
do{
    echo "$i ";
    $i+=2;
}while($i<100);
echo "<Hr>";
//$tab = array("ADAM","JAN","KRZYSZTOF","MARCIN");
$tab[0]= "ADAM";
$tab[1]= "JAN";
$tab[2]= "BARTOSZ";

foreach ($tab as $wartosc){
    echo $wartosc . " ";
}
echo "<Hr>";
for($i=0;$i<3;$i++){
    echo $tab[$i] . " ";
}

echo "<Hr>";
for($i=0;$i<sizeof($tab);$i++){
    echo $tab[$i] . " na ineksie $i ";
}
echo "<Hr>";
for($zmienna=0;$zmienna<200;$zmienna++){

    echo rand(10,250) . " ";
}


?>
    
</body>
</html>