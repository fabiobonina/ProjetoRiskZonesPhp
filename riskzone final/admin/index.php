<?php
ob_start();
session_start();
if(isset($_SESSION['usuarioTeste']) && (isset($_SESSION['senhaTeste']))){
	header("Location: home.php");exit;
}
	include("conexao/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">
  
<head>
    <meta charset="utf-8">
    <title>Login - RiskZone</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
				Login - RiskZone			
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="lembrar.php" class="">
							Esqueceu sua senha?
						</a>
						
					</li>
					
					<li class="">						
						<a href="../" class="">
							<i class="icon-chevron-left"></i>
							Acessar o site
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->


<?php
if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
		if(!isset($_POST['logar'])){

	if($acao=='negado'){
		echo '<div class="alert alert-danger">
                		<button class="close" type="button" data-dismiss="alert">×</button>
                		<strong>Erro ao acessar!</strong> Você precisa estar logado para acessar o Sistema.
                	 </div>';	
        }
	}
}
		//Recuperar form
	if(isset($_POST['logar'])){
		$usuario = trim(strip_tags($_POST['usuario']));
		$senha 	 = trim(strip_tags($_POST['senha']));	

		//Selecionar Banco de Dados
		$select = "SELECT *from login WHERE BINARY usuario=:usuario AND BINARY senha=:senha";
		
		try {
			$result = $conexao->prepare($select);
			$result->bindParam(':usuario', $usuario, PDO::PARAM_STR);
			$result->bindParam(':senha', $senha, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount(); 
			if ($contar>0) {
				$usuario = $_POST['usuario'];
				$senha 	 = $_POST['senha'];
				$_SESSION['usuarioTeste'] = $usuario;
				$_SESSION['senhaTeste'] = $senha;
				echo '<div class="alert alert-success">
                		<button class="close" type="button" data-dismiss="alert">×</button>
                		<strong>Logado com sucesso!</strong> Redirecionando para o sistema...
                	 </div>';	
                	 header("Refresh: 5, home.php?acao=bem-vindo");
			}else{
				echo '<div class="alert alert-danger">
                		<button class="close" type="button" data-dismiss="alert">×</button>
                		<strong>Erro ao logar!</strong> Dados incorretos.
                	 </div>';	
			}


		} catch (PDOException $e) {
			echo $e;
		}
	}//Se clicar no botão entrar no sistema
?>

<div class="account-container">

	
	<div class="content clearfix">
		
		<form action="#" method="post">
		
			<h1>Faça seu Login</h1>		
			
			<div class="login-fields">
				
				<p>Entre com seus dados:</p>
				
				<div class="field">
					<label for="username">Usuário</label>
					<input type="text" id="username" name="usuario" value="" placeholder="Usuário" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Senha:</label>
					<input type="password" id="password" name="senha" value="" placeholder="Senha" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
									
				<input type="submit" name="logar" value="Entrar no Sistema" class="button btn btn-success btn-large">
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
