<?php

//variável pré-definidas ou arrays superglobais - $_GET : após o fim da URL inserir ? a variável e o valor da variável 
//forçar casting na variável
//url- uniform resource locator
//uri - uniform resource identifier: parte de uma url que identifica algo

//$nome= (int)$_GET["A"];
//var_dump($nome);

//pega informações do ambiente, servidor e usuário -REMOTE_ADDR
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>