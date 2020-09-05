<?php

$file = fopen("teste.txt","w+");

fclose($file);

//remover arquivo
unlink("teste.txt");

echo "Arquivo removido com sucesso!";


?>