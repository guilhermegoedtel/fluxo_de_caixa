<?php
session_start();
include_once("session.php");
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
        <li><a href="">Resumos</a>
            <ul class="submenu">
                <li><a href="resumos/diario.php">Resumo diário</a></li>
                <li><a href="resumos/mensal.php">Resumo mensal</a></li>
            </ul>
        </li>
        <li><a href="">Adicionar dados</a>
            <ul class="submenu">
                <li><a href="formularios/inserir_dados.php">Inserir Dados</a></li>
            </ul>
        </li>
        <li><a href="">Cadastros</a>
        <ul class="submenu">
            <li><a href="formularios/add_usuario.php">Usuário</a></li>
            <li><a href="formularios/add_categoria.php">Categoria</a></li>
        </ul>
        </li>
    </ul>
    </nav>
</div>
</body>
</html>