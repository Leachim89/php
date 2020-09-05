<?php
/**
 * elseif pode ser tanto junto ou separado
*/

$suaIdade=9;

$crianca=12;
$adulto=18;
$velho=65;

if($suaIdade <= $crianca){

    echo "Pirralha!";
}
else if($suaIdade >= $adulto ){
    
    echo "Punheteiro!";
}
else{

    echo "Pé na cova!";
}

echo "<br>";

//Operador ternário
echo($suaIdade < $adulto)?"catarrento":"Punheteiro";

?>