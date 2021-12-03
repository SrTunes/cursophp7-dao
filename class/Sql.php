<?php

class Sql extends PDO {

	private $conn;
	//conexão ao banco de dados
	public function __construct(){

		$this->conn = new PDO("mysql:dbname=dbphp7;host=192.168.0.13", "stunes","5HkbvoB3p3IvbciH");

	}

	/*Método onde se recebe os parametros e monta a estrutura. Os parametros chegam
	dentro de um array, onde são estruturados um a um pelo "foreach" através do método
	setParam(), o qual é o método que aplica o bindParam dinamicamente*/
	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParam($statement, $key, $value);
		}
	}
	/*Método bindParam dinâmico, que recebe o atributo do parametro, seja um
	login, ou uma senha 	e insere na função bindParam()*/
	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);
	}

	/*Método para executar um comando no banco de dados. A variável $rawQuery
	se refere ao comando do banco, a $params terão os dados a serem inseridos*/
	public function execQuery($rawQuery, $params = array()){

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}
	//Método SELECT
	public function select($rawQuery, $params = array()):array
	{
		//Executando a query utilizando o método execQuery()
		$stmt = $this->execQuery($rawQuery, $params);
		//Utilizando o FETCH_ASSOC para receber apenas os dados associativos
		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}


}

?>
