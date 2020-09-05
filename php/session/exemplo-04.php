<?php
require_once("config.php");

//diretório onde está sendo salvo a sessão
echo session_save_path();

echo "<br>";

echo session_status();

?>