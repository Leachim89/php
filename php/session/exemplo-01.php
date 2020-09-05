<?php
/**Variáveis de sessão são enxergadas em todo o código
enquanto o usuário está na página */

//para a sessão funcionar
//session_start();
require_once("config.php");

$_SESSION["nome"] = "Hcode";

?>