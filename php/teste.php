<?php

    $numeros = array(0,1,2,3,4,5,6,7,8,9);
    $total_num = count($numeros)-1;
    $numPedido = $id . $numeros[rand(0,$total_num)]. $numeros[rand(0,$total_num)] . $numeros[rand(0,$total_num)];
    $gerador = "#".$numPedido;

   
    echo $gerador;
?>