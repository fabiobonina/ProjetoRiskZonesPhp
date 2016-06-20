<?php

//Quando chamar 'funtion conectar' conexao.php 
	include("conexao.php");
	//$db=conectar();
	//Verificar se exitem os dados necessario para a atualização
	//o metodo "empty" é uma boleam, então se a variavel GET vim vazio ela é TRU se não FALSE 
	try {
			if(!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["usuario"] && !empty($_POST["senha"])&& !empty($_POST["sexo"]) && !empty($_POST["raca"]) && !empty($_POST["nascimento"]))):
		//Recebendo dados

		$nome=addslashes(trim($_POST["nome"]));
		$email=addslashes(trim($_POST["email"]));
		$usuario=addslashes(trim($_POST["usuario"]));
		$senha=addslashes(trim($_POST["senha"]));
		$sexo=addslashes(trim($_POST["sexo"]));
		$raca=addslashes(trim($_POST["raca"]));
		$nascimento=addslashes(trim($_POST["nascimento"]));
		$datacadastro = date("Y-m-d H:i:s");
		$datalogin = date("Y-m-d H:i:s");
		$nivel_usuario = "0";
		$ativado = "0";



		//Prepara o cadatro
		$sql  = "INSERT INTO usuarios2 (nome, email, usuario, senha, sexo, raca, data_nascimento, data_cadastro, data_ultimo_login, nivel_usuario, ativado) ";
		$sql .= "VALUES (:nome, :email, :usuario, :senha, :sexo, :raca, :data_nascimento, :data_cadastro, :data_ultimo_login, :nivel_usuario, :ativado)";
		try {
			$create = $db->prepare($sql);
			//$create->bindValue(':nome', $nome, PDO::PARAM_STR);
			//$create->bindValue(':email', $email, PDO::PARAM_STR);
			$create->bindValue(":nome",$nome);
			$create->bindValue(":email",$email);
			$create->bindValue(":usuario",$usuario);
			$create->bindValue(":senha",$senha);
			$create->bindValue(":sexo",$sexo);
			$create->bindValue(":raca",$raca);
			$create->bindValue(":data_nascimento",$nascimento);
			$create->bindValue(":data_cadastro",$datacadastro);
			$create->bindValue(":data_ultimo_login",$datalogin);
			$create->bindValue(":nivel_usuario",$nivel_usuario);
			$create->bindValue(":ativado",$ativado);
			/*$create->execute(
				array(
        		':nome' => $nome,
				':email' => $email,
				':username' => $usuario,
				':senha'=> $senha,
				':sexo' => $sexo,
				':raca' => $raca,
				':data_nascimento'=> $nascimento,
				':data_cadastro'=> $datacadastro,
				':data_ultimo_login'=> $datalogin,
				':nivel_usuario' => $nivel_usuario,
				':ativado' => $ativado
				)
			);*/
			if($create->execute()):
				echo "<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Inserido com sucesso!</strong>
				</div>";
			endif;
		} catch (Exception $e) {
				echo "<div class='alert alert-error'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				<strong>Erro ao inserir dados!</strong>" . $e->getMessage() . "
				</div>";
			
		}

		/*$adicionarusuario=$db->prepare("INSERT INTO usuarios (nome, email, usuario, senha, sexo, raca, data_nascimento, data_cadastro, data_ultimo_login, nivel_usuario, ativado) VALUES (:nome, :email, :usuario, :senha, :sexo, :raca, :data_nascimento, :data_cadastro, :data_ultimo_login, :nivel_usuario, :ativado)");
		$adicionarusuario->bindValue(":neme",$nome);
		$adicionarusuario->bindValue(":email",$email);
		$adicionarusuario->bindValue(":usuario",$usuario);
		$adicionarusuario->bindValue(":senha",$senha);
		$adicionarusuario->bindValue(":sexo",$sexo);
		$adicionarusuario->bindValue(":raca",$raca);
		$adicionarusuario->bindValue(":data_nascimento",$nascimento);
		$adicionarusuario->bindValue(":data_cadastro",$datacadastro);
		$adicionarusuario->bindValue(":data_ultimo_login",$datalogin);
		$adicionarusuario->bindValue(":nivel_usuario",$nivel_usuario);
		$adicionarusuario->bindValue(":ativado",$ativado);
		//Valida o cadastro

		$validar_email=$db->prepare("SELECT * FROM usuarios WHERE email=?");
		$validar_email->execute(array($email));
		if ($validar_email->rowCount()== 0):
		//Executa o cadastro
		$validar_usuario=$db->prepare("SELECT * FROM usuarios WHERE usuario=?");
		$validar_usuario->execute(array($usuario));
			if ($validar_usuario->rowCount()== 0):
				//Executa o cadastro
				$adicionarusuario->execute();
				//Redirect:
				//header("Location: ../index.php");
			else:
				echo "Usuario já existe!";
				//Redirect:
				header("Location: ../usuario.php");
			endif;

		else:
			echo "E-mail já existe!";
			Redirect:
			header("Location: ../usuario.php");
		endif;

		if($adicionarusuario->rowCount() > 0):
			echo "USUARIO CADASTRADO COM SUCESSO!";
		else:
			echo "DESCULPE, O USUARIO NÃO FOI CADASTRADO";
		endif;*/

	else:
		echo "<h2>FAVOR, INFORMAR TODOS OS CAMPOS!</h2>";
	
	endif;
	} catch (Exception $e) {
		echo $e->getMessage();	
	}

?>