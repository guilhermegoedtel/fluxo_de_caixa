<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$lv_acesso = $_SESSION['nv_acesso'];

$descricao = $_POST['descricao'];

$result_usuario = "INSERT INTO descricao_conta(descricao, created)VALUES('$descricao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: add_descricao_pagamento.php');
?>