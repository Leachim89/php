<?php

$name = "images";

//verifica se o diretório existe
if(!is_dir($name)){

    //cria diretório
    mkdir($name);
    echo "Diretório ". $name ." criado com sucesso";
}else{

    //remover diretório
    rmdir($name);
    echo "O diretório $name foi removido";
}

?>