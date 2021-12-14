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

echo $usuario."<br>";
echo "====================================<br>";

/*Carrega uma lista de usuários, como o método é estátio, não é necessário
instansia-lo, podemos chama-lo direto*/

$lista = Usuario::getList();

echo json_encode($lista);
echo "<br>";
echo "====================================<br>";
//Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo");

echo json_encode($search);
echo "<br>";
echo "====================================<br>";
//Carreaga um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "!@#$%");

echo $usuario;
echo "<br>";
echo "====================================<br>";
//Criando um novo usuário
$aluno = new Usuario("aluna", "#@!");

$aluno->insert();

echo $aluno;
echo "<br>";
echo "====================================<br>";
//Alterar um usuário
$usuario = new Usuario();

$usuario->loadById(10);

$usuario->update("professor", "%%*&");

echo $usuario;
echo "<br>";
echo "====================================<br>";

//Deletar um registro
$usuario = new Usuario();

$usuario->loadById(13);

$usuario->delete();

echo $usuario;

?>
