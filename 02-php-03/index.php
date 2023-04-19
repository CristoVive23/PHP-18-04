<?php

$sorteio = rand(0,5);
echo "$sorteio <br>";

switch ($sorteio) {
    case 1:
        echo "Perdeu a chance!";
        break;
    case 2:
        echo "Avance 1 casa!";
        break;
    case 3:
        echo "Avance 2 casas!";
        break;
    case 4:
        echo "Avance 2 casas e jogue novamente!";
        break;
    case 5:
        echo "Avance 1 casa e os adversários voltam 2 casas!";
        break;
        default;   
        echo "Volte 5 casas!";
        break;
      
}

?>