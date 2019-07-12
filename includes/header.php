<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />
</head>
<style>
img{
    float:right;
}
</style>
<body>
<div id="header">
    <a href="#" class="d-block" style="color: white;">Olá, <?php session_start(); $_SESSION['nome'];?></a>
    <a href="sair.php"><img src="images/sair.png"></a>
</div>
</body>
</html>