<?php

$student = "Martin Luter King";
$arrayValues = [6, 7, 9];

echo array_sum($arrayValues)."<br>";

echo count($arrayValues) . "<br>";

$average = array_sum($arrayValues) / count($arrayValues);

echo $average . "<br>";

$averageEnd = round($average, 2);

echo $averageEnd . "<br>";

if($averageEnd >= 7){
    echo "Aprovado!";
}elseif($averageEnd >= 4){
    echo "Conselho!";
}else{
    echo "Reprovado!";
}

?>