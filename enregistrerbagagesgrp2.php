<?php

echo "Saisir le nombre de passagers pour le groupe : ";
$nbPassagers = trim(fgets(STDIN));

$poidsTotal = 0;

for ($numeroPassager = 1; $numeroPassager <= $nbPassagers; $numeroPassager++) {

    echo "Saisir le poids (en kg) des bagages du passager ", $numeroPassager, ": ";
    
    $poids = rtrim(fgets(STDIN));

    $poidsTotal += $poids;
}

echo "Le poids total des bagages pour ce groupe est de ";
echo $poidsTotal, " kg.\n";
?>
