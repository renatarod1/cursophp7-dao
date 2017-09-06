<?php 

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/


//Consulta o usuário do id = 3
/*$root = new Usuario();
$root->loadById(3);
echo $root;*/


//Carrega uma lista de usuários 
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega um usuário usando um login e uma senha

$usuario = new Usuario();
$usuario->login("root","!@#$");
echo $usuario;

?>