<?php
session_start();
if(!isset($_SESSION['autenticado'])){
    header("location: ../index.php");
    session_destroy();
}
include_once("conectar.php");
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />
</head>
<body>
<div id="tela">
    <nav class="navigation">
        <ul class="mainmenu">
            <li><a href="">Empresas</a>
                <ul class="submenu">
                    <li><a href="formularios/add_empresa.php">Adicionar Empresa</a></li>
                    <li><a href="formularios/empresas_pessoal.php">Ver empresas cadastradas</a></li>
                    <li><a href="formularios/todas_empresas.php">Ver todas empresas cadastradas</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
</body>
</html>