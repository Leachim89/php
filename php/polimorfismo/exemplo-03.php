<?php

//registrar mais de uma função como função de autoload
//conjunto de funções para auxílio de lacunas do php
function incluirClasses($nameClass){
    
    if(file_exists($nameClass.".php") === true){
        require_once($nameClass.".php");
    }
    
}

spl_autoload_register("incluirClasses");

spl_autoload_register(function($nameClass){

    if(file_exists("Abstract".DIRECTORY_SEPARATOR.$nameClass.".php") === true){
        require_once("Abstract".DIRECTORY_SEPARATOR.$nameClass.".php");
    }

});

    $carro = new DelRey();

    $carro ->acelerar(80);

?>