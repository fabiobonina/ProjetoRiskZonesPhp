<?php
//Quando chamar 'funtion' para abrir conexão ao Banco 
function conectar(){
	try {
		$pdo=new PDO("mysql:host=localhost;dbname=pdo","root","");
		$pdo->setAttribute(PBO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {

		if ($e->getCode() == 1049) {
			echo "Banco de dados errado";
		}else{
			echo $e->getMessage();
		}

	}
	return $pdo;

}
?>