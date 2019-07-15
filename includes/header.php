<?php
session_start();
if(!isset($_SESSION['autenticado'])){
    header("location: ../index.php");
    session_destroy();
}
$nome = $_SESSION['nome'];
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />
</head>
<style>
a:link 
{ 
text-decoration:none; 
} 
img{
    float:right;
}
</style>
<body>
<div id="header">
    <a href="#" class="d-block" style="color: white;"><?php echo "Olá, "."$nome";?></a>
    <a href="sair.php"><img src="images/sair.png"></a>
</div>
</body>
</html>