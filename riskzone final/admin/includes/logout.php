<?php
	if(isset($_REQUEST['sair'])){
		session_destroy();
		session_unset(['usuarioTeste']);
		session_unset(['senhaTeste']);
		header("Location: index.php");
}
?>