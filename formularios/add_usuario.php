<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
?>
<!Doctype html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="valida_usuario.php" method="POST">
<input type="email" name="login" placeholder="Digite o email" required>
<input type="text" name="nome" placeholder="Digite o nome" required>
<input type="password" name="senha" placeholder="Digite a senha">
<select name="nv_acesso">
  <option value="0" selected>Padrão</option> 
  <option value="1">Administrador</option>
</select>
<input type="submit" value="Cadastrar usuario">
<form>
</body>
</html>