<?php
    session_start();
  if (!isset($_SESSION['Usuariolog'])) {
    header("Location: usuario.php");
      session_destroy();
  }
  if (!isset($_GET['deslogar'])) {
      session_destroy();
          header("Location: usuario.php");
  }

?>
<head>
<meta charset="UTF-8">
   <link rel="stylesheet" href="css/bootstrap.css" />
  <!--link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"-->

  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });
  </script>


</head>
<body>
<form action="repositorio/usuario_insert.php" method="post">
    Nome: <input type="text" name="nome" /><br>
    Email: <input type="email" name="email" /><br>
    Usuario: <input type="text" name="usuario" /><br>
    Senha: <input type="password" name="senha" /><br>
    Sexo:<input type="text" name="sexo" /><br>
    Raça: <input type="text" name="raca" /><br>
    Nascimento: <input type="date" name="nascimento" /><br>
    <input type="submit" value="Salvar">
</form>

<a href="?deslogar">Sair</a>

<a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Link with href
</a>
<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Button with data-target
</button>
<div class="collapse" id="collapseExample">
  <div class="well">
    ...
  </div>

</body>
     <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.js"></script>
</html>