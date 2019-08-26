<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");

$categoria = $_POST['categoria'];
$equipe = $_POST['equipe'];
$local = $_POST['local'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result = "INSERT INTO planejamento_despesas(categoria, equipe, local, valor_planejamento, data_planejamento, observacao, created)
VALUES('$categoria', '$equipe', '$local', '$valor_planejamento', '$data_planejamento', '$observacao', NOW())";
$resultado = mysqli_query($conn, $result);


header('Location: despesas.php');
?>