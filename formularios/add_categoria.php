<?php
session_start();
include_once("conectar.php");
?>
<!Doctype html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="valida_categoria.php" method="POST">
<input type="text" name="categoria" placeholder="Digite a categoria" required>
<input type="submit" value="Cadastrar categoria">
<form>
</body>
</html>