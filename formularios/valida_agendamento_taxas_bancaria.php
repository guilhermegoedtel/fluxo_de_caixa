<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");

$banco = $_POST['banco'];
$descricao = $_POST['descricao'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result = "INSERT INTO planejamento_taxas(banco, descricao, valor_planejamento, data_planejamento, observacao, created)
VALUES('$banco', '$descricao', '$valor_planejamento', '$data_planejamento', '$observacao', NOW())";
$resultado = mysqli_query($conn, $result);


header('Location: taxas_bancaria.php');
?>