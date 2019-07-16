<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Fluxo de caixa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  </head>
<body>
<form action="valida.php" method="POST">
  <input type="email" name="login" placeholder="login" required>
  <input type="password" name="senha" placeholder="Senha" required>
  <input type="submit" value="Entrar">
</form>
</body>
</html>
