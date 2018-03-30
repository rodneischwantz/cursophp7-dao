<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyID(3);
//echo $root;
//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega uma lista de usuaríos
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo"); //usa o :: para estático
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","!@#$");

echo $usuario;
?>