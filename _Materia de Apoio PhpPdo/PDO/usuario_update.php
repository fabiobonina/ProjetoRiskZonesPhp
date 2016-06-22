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
		$nome=addslashes(trim($_GET["nome"]));
		$email=addslashes(trim($_GET["email"]));

		//Realizando a cunsulta
		$atualizarusuario=$pdo->prepare("UPDATE usuario SET nome=:nome, email=:email WHERE ID=:id");
		$atualizarusuario->bindValue(":nome",$nome);
		$atualizarusuario->bindValue(":email",$email);
		$atualizarusuario->bindValue(":id",$id);
		$atualizarusuario->execute();
		if($atualizarusuario->rowCount() > 0):
			echo "USUARIO ATUALIZADO COM SUCESSO!";
		else:
			echo "DESCULPE, O USUARIO NÃO FOI ATUALIZADO";
		endif;

	else:
		echo "<h2>NENHUM USUARIO ENCONTRDO, FAVOR INFORMAR OS DADOS!</h2>";
	
	endif;
	} catch (Exception $e) {
		echo $e->getMessage();	
	}

?>