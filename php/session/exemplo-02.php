<?php

/**toda página que houver sessão tem que iniciar com session_start */
//session_start();
require_once("config.php");

//limpa as variáveis de sessão
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//limpa a variável e remove o usuário do servidor
session_destroy();




?>