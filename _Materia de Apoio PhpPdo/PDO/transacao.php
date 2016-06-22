<?php

//Quando chamar 'funtion conectar' conexao.php 
	include("conexao.php");
	$pdo=conectar();
	//Inicio da transação
	$pdo->beginTransaction();

	try {
		//Cadastro dos dados
		$dados=$pdo->query("INSERT INTO dados(status) VALUES ('1')");
		if(!$dados){
			die("Houve um erro cadastro de dados");
		}
		//Cadastro final
		$cadastro=$pdo->query("INSERT INTO usuario (nome, email, status) VALUES ('Fabio','fabiobonina@gmail.com','1')");
		if(!$cadastro){
			$pdo->rollBack();
			die("Houve um erro cadastro de final");
		}
		//Confinação da transação
		$pdo->commit();
		echo "Dasdos cadastrado!";

	} catch (Exception $e) {
		echo $e->getMessage();	
	}

?>