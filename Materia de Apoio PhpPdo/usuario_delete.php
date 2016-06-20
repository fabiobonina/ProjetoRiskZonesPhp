<?php

//Quando chamar 'funtion conectar' conexao.php 
	include("conexao.php");
	$pdo=conectar();
	//Verificar se exitem os dados necessario para a atualização
	//o metodo "empty" é uma boleam, então se a variavel GET vim vazio ela é TRU se não FALSE 
	try {
			if(!empty($_GET["id"]) && !empty($_GET["nome"]) && !empty($_GET["email"] )):
		//Recebendo dados
		$id=addslashes(trim($_GET["id"]));

		//Realizando delete
		$deletarusuario=$pdo->prepare("DELETE FROM usuario WHERE ID=?");
		$deletarusuario->bindValue(":id",$id);
		$deletarusuario->execute();
		if($deletarusuario->rowCount() > 0):
			echo "USUARIO DELETADO COM SUCESSO!";
		else:
			echo "DESCULPE, O USUARIO NÃO FOI DELETADO";
		endif;

	else:
		echo "<h2>NENHUM USUARIO ENCONTRDO, FAVOR INFORMAR OS DADOS!</h2>";
	
	endif;
	} catch (Exception $e) {
		echo $e->getMessage();	
	}

?>