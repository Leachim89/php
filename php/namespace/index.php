<?php

require_once("config.php");

use Client\Cadastro;

$cad = new Cadastro();

$cad -> setName("Djalma Sindeaux");
$cad -> setEmail("dj@gmail.com.br");
$cad -> setPassword("1235456545489");

$cad ->registrarVenda();
?>