<?php
/**Operadores
 * = atribuição
 * . concatenação
 * .= concatenação + atribuição
 * += valor + atribuição
 * -= valor - atribuição
 * *= valor * atribuição
 * operadores = +(mais) -(menos) *(vezes) /(dividido) %(resto) ** (exponenciação)
 * comparação = >(maior) <(menor) =(atribuição) ==(comparação entre valores) 
 * ===(comparação entre valores e tipos)
 * !=(diferença entre valor)
 * !==(diferença entre valor e tipo)
 * >=(maior ou igual) <=(menor ou igual)
 * <=>(spaceship) = comparação entre maior, menor e igual
 * caso for maior 1, caso menor -1 e caso igual 0
 * ?? caso for nulo - para conforme a ordem
 * ++ = incremento tanto antes quanto depois
 * -- = decremento
 * 
 * *******precedência de operadores************
 * () altera-se usando os parênteses
 * tanto os operadores lógicos quanto os matemáticos
 * 
*/

$resultado = (10 + 3) / 2  > 5 || (10 +  5 )< 3;

var_dump($resultado);

echo"<br>";

?>