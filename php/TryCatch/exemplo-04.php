<?php

/*Sobrescrever os erros (opcional ou pode ser feito no arquivo php.ini)*/
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;
?>