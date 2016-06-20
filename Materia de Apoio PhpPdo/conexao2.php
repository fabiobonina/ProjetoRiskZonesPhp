<?php
//Quando chamar 'funtion' para abrir conexão ao Banco 
function conectar(){
	try {
		$pdo=new PDO("mysql:host=localhost;dbname=riskzone","root","");
		$pdo->setAttribute(PBO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		echo $e->getMessage();	
		if ($e->getCode() == 1049) {
			echo "Banco de dados errado";
		}
	}
	return $pdo;
}

?>