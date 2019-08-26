<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");

$fornecedor = $_POST['fornecedor'];
$categoria = $_POST['categoria'];
$fornecimento = $_POST['fornecimento'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result = "INSERT INTO planejamento_fornecedores(fornecedor, categoria, fornecimento, valor_planejamento, data_planejamento, observacao, created)
VALUES('$fornecedor', '$categoria', '$fornecimento', '$valor_planejamento', '$data_planejamento', '$observacao', NOW())";
$resultado = mysqli_query($conn, $result);


header('Location: planejamento_fornecedor.php');
?>