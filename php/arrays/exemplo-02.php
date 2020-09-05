<?php
/**JSON
interoperabilidade
json encode - transformar em um array
json decode -  transformar um array em um json
 */
$pessoas = array();

    //inserir no alvo um array específico
    array_push($pessoas, array(
        'nome' => 'João',
        'idade'=> 20
    ));
    array_push($pessoas, array(
        'nome' => 'Gláucio',
        'idade'=> 25
    ));

    //print_r($pessoas);

    echo json_encode($pessoas);

?>