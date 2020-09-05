<?php

//...obter vários valores, funciona somente se forem dos mesmos tipos
//: o tipo de retorno que será obtido, sua conversão
function soma(int ...$valores): float{

    return array_sum($valores);
}

echo soma(2, 2);

echo "<br>";

echo soma(25, 33);

echo "<br>";

echo soma(1.5, 3.2);

echo "<br>";


?>