<?php
//Carregando o arquive de configuração do projeto
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

var_dump($sql);
echo "<br><br>";
echo json_encode($usuarios);
*/

//Carrega um usuário
$usuario = new Usuario();

$usuario->loadbyId(3);

echo $usuario;

//Carrega uma lista de usuários
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
/*$search = Usuario::search("jo");

echo json_encode($search);*/

//Carreaga um usuário usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("root", "!@#$%");

echo $usuario;*/

//Criando um novo usuário
/*$aluno = new Usuario("aluna", "#@!");

$aluno->insert();

echo $aluno;
*/

//Alterar um usuário
/*$usuario = new Usuario();

$usuario->loadById(4);

$usuario->update("professor", "%%*&");

echo $usuario;


$usuario = new Usuario();

$usuario->loadById(4);

$usuario->delete();

echo $usuario;
*/
?>
