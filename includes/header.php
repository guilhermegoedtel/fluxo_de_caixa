<?php
session_start();
include_once("session.php");
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
<!--<div id="header">
    <a href="#" class="d-block" style="color: white;"><?php //echo "Olá, "."$nome";?></a>
    <a href="#" class="d-block" style="color: white;">Sistema Fluxo de Caixa</a>
    <a href="sair.php"><img src="images/sair.png"></a>
</div>-->



<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><?php echo "Olá, "."$nome";?></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <button type="button" class="btn btn-danger" onclick="location.href='sair.php'">Sair</button>
            </li>
          </ul>
        </div>
    </nav>
</div>
</body>
</html>