<?php

//variando o SO- existem variações
//LC_ALL muda a configuração de lugar para  português
setlocale(LC_ALL, "pt_BR","pt_br.utf-8","portuguese");

echo ucwords(strftime("%A %B"));

?>