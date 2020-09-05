<?php
//Escopo de variável existe somente onde for criado
//fora das chaves e dentro das chaves o php interpreta como variáveis diferentes

$nome ="Michael";

function teste(){

    //informar que são as mesmas variáveis usa-se a variavel global
    global $nome;
    echo $nome;
}

teste();

?>