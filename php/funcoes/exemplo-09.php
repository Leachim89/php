<?php

//converte string para timestamp
//$ts = strtotime("2020-08-01");
//$ts = strtotime("now");
//$ts = strtotime("+1 day");
//pode ser utilizado para realizar entregas de produtos
$ts = strtotime("+1 week");

echo date("l, d/m/Y", $ts)

?>