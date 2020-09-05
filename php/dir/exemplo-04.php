<?php
 require_once("config.php");

 $sql = new Sql();

 $usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$header = array();

//montar uma tabulação de dados
foreach($usuarios[0] as $key => $value){
    array_push($header, ucfirst($key));
}

$file = fopen("usuarios.csv","w+");

//separação da tabulação com base nos parametros passados
fwrite($file, implode(",",$header)."\r\n");

//campos
foreach($usuarios as $row){
    $data = array();

    //linhas
    foreach($row as $key => $value){
        array_push($data, $value);
    }

    fwrite($file, implode(",",$data). "\r\n");

}

fclose($file);


?>