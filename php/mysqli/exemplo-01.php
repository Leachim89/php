<?php

//ordem: local host, a conexão, a senha e o database
$conn = new mysqli("localhost","root","","dbphp7");

//verificar se houve erro de conexão
if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
    exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES( ?, ?)");
//esses dois parâmetros devem ser passados por referência
$stmt->bind_param("ss",$login,$pass);

$login  = "user";
$pass = "123456";
$stmt->execute();

$login ="root";
$pass =" !@#$%";

$stmt->execute();

?>