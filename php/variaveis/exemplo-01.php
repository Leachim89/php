<!--Comentário de bloco

    restrições para nome de variáveis
    - CamelCase
    - chamar sempre da mesma maneira
    - números na variável ou no meio ou no fim
    - caracteres epeeciais somente o _
    // comentários de linha simples
    

-->


<!--?php
    
    //$nome="Hcode";
    //$anoNascimento=1990;
    //$NomeCompleto="Case sensitive";
    $nome1 = "Michael";
    $sobrenome= "Amâncio";
    
    //concatenação
    $nomeCompleto = $nome1." ".$sobrenome;
    var_dump($nome);

    echo $nomeCompleto;

    echo $nome1;

    echo"</br>";

    //unset= limpar a variável - pode-se passar varias variáveis utilizando-se virgula
    unset($nome1);

    //isset = verificar se a variável existe
    if(isset($nome1)){
            echo($nome1);
    }
    

?-->

<?php

    $nome="Michael";//string

    $site='www.hcode.com.br';//string

    $ano=2020;//int

    $salario=5500.99;//float

    $bloqueado=false;//boolean

    //////////////////

    $frutas=array("abacaxi","laranja","manga");//array - podendo haver vários tipos de variáveis dentro

    //echo $frutas[2];

    $nascimento = new DateTime();//objeto

    //var_dump($nascimento);

    //////////////////

    //tipo especial - resource
    $arquivo = fopen("exemplo-01.php","r");

    //var_dump($arquivo);

    //////////////////

    $nulo = null;//ausencia de valor



?>