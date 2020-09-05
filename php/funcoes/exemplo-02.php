<?php

//parâmetros que não tiverem padrão, os que forem obrigatórios a esquerda
function ola($texto="mundo", $periodo="Bom dia"){

  return "Olá $texto! $periodo <br>";
}

//chamando a função
echo ola("mundo");
echo ola("","Bom noite");
echo ola("Trouxa","Boa tarde");
echo ola("Trouxa 2","");
?>