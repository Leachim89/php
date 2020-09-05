<?php

/*function ola(){

    //retorna todos os argumentos passados
    $argumentos =func_get_args();

    return $argumentos;
}

var_dump(ola("Bom dia",10));*/

$a =10;

//variável e parâmetro de função são coisas diferentes
//&$a passagem de parâmetro por referência - altera o valor da variável
function trocaValor(&$a){

    
    $a +=50;
    return $a;
}

//passagem de parâmetro por valor - altera somente na função
echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;



?>