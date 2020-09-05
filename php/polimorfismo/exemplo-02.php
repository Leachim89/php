<?php
//Autoload
// a classe deve possuir o mesmo nome do arquivo para ser chamado

    function __autoload($nameClass){
        
        require_once("$nameClass.php");
    }

    $carro = new DelRey();

    $carro ->acelerar(80);

?>