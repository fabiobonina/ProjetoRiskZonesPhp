<?php

//Quando chamar 'funtion conectar' conexao.php 
	include("conexao.php");
	$pdo=conectar();
	//$id=$_GET["id"];
	$email=$_GET["email"];

	//Prepara o cadatro
	$adicionarusuario=$pdo->prepare("INSERT INTO usuario(email)VALUES(:email)");
	$adicionarusuario->bindValue(":email",$email);

	//Valida o cadastro
	$validar=$pdo->prepare("SELECT * FROM usuario WHERE email=?");
	$validar->execute(array($email));
	if ($validar->rowCount()== 0):
		//Executa o cadastro
		$adicionarusuario->execute();
	else:
		echo "Já existe!";
	endif;

?>