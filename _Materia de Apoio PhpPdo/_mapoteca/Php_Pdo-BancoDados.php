<?php

//MODELO CONECÃO COM TRY-CATCH:
//Quando chamar 'funtion' para abrir conexão ao Banco 
function conectar(){
	try {
		$pdo=new PDO("mysql:host=localhost;dbname=riskzone","root","");
	} catch (PDOException $e) {
		echo $e->getMessage();	

	}
	return $pdo;
}





	$id=$_GET["id"];
	$email=$_GET["email"];
//MODELO DE REQUISIÇÃO AO BANCO VULNERAVEL:
	$buscarusurio=$pdo->query("SELECT * FROM usuario WHERE ID=$id");

//MODELO DE REQUISIÇÃO PROTEGIDA CONTRA ATAQUES
	//SELECT
	$buscasegura=$pdo->prepare("SELECT * FROM usuario WHERE ID=:id AND email=:email");
	//Infoma pararamento $pdo->prepare
	$buscasegura->bindValue(":id",$id);
	$buscasegura->bindValue(":email",$email);
	$buscasegura->execute();

	//Conta quantos o SELECT encontro de dados
	echo $buscasegura->rowCount();

	//INSERT COM VALIDAÇÃO
	//Prepara o cadastro (Protege o banco contra ataques)
	$buscasegura=$pdo->prepare("INSERT INTO usuario(email)VALUES(:email)");
	$buscasegura->bindValue(":email",$email);

	//Valida o cadastro
	$validar=$pdo->prepare("SELECT * FROM usuario WHERE email=?");
	$validar->execute(array($email));
	if ($validar->rowCount()== 0):
		//Executa o cadastro
		$buscasegura->execute();
	else:
		echo "Já existe!";
	endif;

?>