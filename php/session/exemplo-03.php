<?php

require_once("config.php");

//id de sessão - sempre manterá a mesma sessão enquanto estiver aberta
//é único entre o servidor e o usuário
//echo session_id();

//gera um novo id de sessão
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>