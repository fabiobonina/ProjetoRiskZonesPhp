<?php

//Quando chamar 'funtion conectar' conexao.php 
	include("conexao.php");
	$pdo=conectar();

	//Realizando a cunsulta
	$buscarusuario=$pdo->prepare("SELECT * FROM usuario");
	$buscarusuario->execute();

	//Atribuido dados a uma variavel
	$linha = $buscarusuario->fetchAll(PDO::FETCH_OBJ);

	//Percorrendo a variavel para listar os dados
	foreach ($linha as $listar){
		//Listagem dos dados
		echo "Email:" .$listar->email."<br/>";
	}

	/*
	//Conta quantos o SELECT encontro de dados
	while ($linha=$buscarusuario->fetch(PDO::FETCH_ASSOC)){
			//var_dump($linha);

			echo "Email:" .$linha["email"]."<br/>";
	}
	*/

?>