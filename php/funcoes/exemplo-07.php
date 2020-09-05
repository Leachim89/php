<?php

//função anônima - não tem nome na função, não possui return
function test($callback){

    $callback();
}

test(function(){

    echo "Terminou!";
});


$fn = function($a){

    var_dump($a);

};

$fn("Oi");




?>