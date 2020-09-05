<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$stmt = $conn ->prepare("DELETE FROM tb_usuarios WHERE idusuarios =:ID");

$id = 1;

//liga os parametros com os valores
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Delete OK!";

?>