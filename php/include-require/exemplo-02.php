<?php
/**
 * Importante para projetos da INTRANET
 * include- chamar uma função que esteja em outra página
 * erro comum -erro de sintaxe acusa no arquivo que chamou o include,
 * mas pode estar no arquivo que está sendo chamado
 * se houver divisão de diretório, deve ser especificada a pasta ../nomeDapasta/nomeDoAquivo.php
 * e assim sucessivamente
 * include remoto - permissão de trazer arquivo de um site, porém caso esse arquivo deixe de existir,
 * ou inserirem arquivos maliciosos, baixa no seu BD
 * e pode permitir manipular o seu código de segurança - brecha de segurança
 * 
 * 
 * require - obriga que o arquivo exista e funcione corretamente, parando a execução do código
 * caso haja erro
 * 
 * require_once ou include_once - caso o arquivo já veio, não chama novamente
*/
//include "exemplo-01.php";


require_once "exemplo-01.php";

$resultado = somar(10,20);

echo $resultado;

?>