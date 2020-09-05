<?php
/**Interpolação de variáveis
 * 
 * "" pode se inserir diretamente a variável que será interpretado pelo php
 * '' interpreta tudo como string
 * echo "ABC $nome";
*/

$nome="Hcode";

//substitui pela expressões especificadas nos parâmetros
$nome = str_replace("o","0",$nome);
$nome = str_replace("e","3",$nome);

//função que transforma o texto em letras maiúsculas
echo strtoupper($nome);

echo "<br>";

//função que transforma o texto em letras minúsculas
echo strtolower($nome);

echo "<br>";

//função que transforma a primeira letra  de cada palavra em  maiúsculas
echo ucwords($nome);

echo "<br>";

//função que transforma a primeira letra em  maiúsculas
echo ucfirst($nome);

echo "<br>";

//função que transforma a primeira letra em  maiúsculas
echo ucfirst($nome);
?>