<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Fluxo de caixa</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
<body>
<form action="valida.php" method="POST">
  <input type="email" name="login" placeholder="login" required>
  <input type="password" name="senha" placeholder="Senha" required>
  <input type="submit" value="enviar">
</form>
</body>
</html>


<!--Teste-->