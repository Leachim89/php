<?php

//Função Date, Função Time e Timestamp

//date precisa do parâmetro (formato d/m/Y H:i:s)
//não sensível ao setlocale
// parâmetros entre colchetes significa que já há um valor padrão mas pode ser alterado
echo date("d/m/Y H:i:s");

echo "<br>";

//timestamp - quantidade de segundos
echo time();

?>