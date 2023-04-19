<?php

/*
$i = 10;
while ($i > -7) {
    echo $i . "<br>";
    $i--;
}
*/
$arrayCitiesSergipe = [
    "Aracajú", "N. S. do Socorro", "Lagarto", "Itabaiana", "S. Cristovão", "Estância", "Tobias Barreto"
];

$contador= count($arrayCitiesSergipe);
$i = 0;
while ($i < $contador ) {
    echo $arrayCitiesSergipe[$i] . "<br>";
    if ($i === 2) {
        echo "----------- FIM ---------------";
        break;
    }
    $i++;

}