<?php

$data = array(
    "empresa"=>"Hcode Treinamentos"
);

/**Importante para guardar informações de e-commerce, passagens
 * guardar informações de acesso ou publicidades de acesso que o usuário realizou,
 * não especificando sobre você mas sobre o que você acessou, permitindo acesso de terceiros
 * Como criar cookies e o tempo do cookie
 */
setcookie("NOME_DO_COOKIE", json_encode($data),time() + 3600);

echo "OK";

?>