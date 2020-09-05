<?php

//o caminho do arquivo, como será usado o arquivo w+ = escrever , a+=
//a variável se torna o tipo resource, ou seja referencia a um arquivo externo
//possibilidade de criar arquivo de log de acesso
$file = fopen("log.txt","a+");

//
fwrite($file, date("Y-m-d H:i:s")."\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";


?>