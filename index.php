<?php 

require_once("config.php");


//-------------------------------------------------
//Seleciona os todos os usuários da tabela
//-------------------------------------------------
/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//-------------------------------------------------
//Consulta o usuário do id = 3
//-------------------------------------------------
/*$root = new Usuario();
$root->loadById(3);
echo $root;*/

//-------------------------------------------------
//Carrega uma lista de usuários 
//-------------------------------------------------
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//-------------------------------------------------
//Carrega uma lista de usuários buscando pelo login
//-------------------------------------------------
//$search = Usuario::search("us");
//echo json_encode($search);

//-------------------------------------------------
//Carrega um usuário usando um login e uma senha
//-------------------------------------------------
/*$usuario = new Usuario();
$usuario->login("root","!@#$");
echo $usuario;*/

//-------------------------------------------------
//Faz o insert de um novo usuário
//-------------------------------------------------
//$aluno = new Usuario("aluno", "@lun0" );

//usando os setters da classe Usuario
/*$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");*/

//$aluno->insert();

//echo $aluno;

//-------------------------------------------------
//Faz o update de um usuário
//-------------------------------------------------
/*$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("professor", "!@#$%¨&*");

echo $usuario;*/

//-------------------------------------------------
//Faz o delete de um usuário
//-------------------------------------------------
$usuario = new Usuario();
$usuario->loadById(5);
$usuario->delete();
echo $usuario;


?>