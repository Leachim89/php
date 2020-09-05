<?php
/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/
require_once("config.php");

//deveria carregar um usuário
//$root = new Usuario();
//$root-> loadById(3);
//echo $root;

/*deve carregar uma lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);*/

/*deve carregar uma lista de usuários buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/

// não tem funcionado até agora, mas vamos fazendo essa bosta
//login e senha agora nessa porra
//$ususario = new Usuario();
//$usuario->login("root","!@#$");

/*echo $ususario;

$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;*/

/**Alterar um usuário 
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor","!@#$%¨&*");

echo $usuario;*/
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();

echo $usuario;


?>

