<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");

$impostos_encargos = $_POST['impostos_encargos'];
$descricao_impostos_encargos = $_POST['descricao_impostos_encargos'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result = "INSERT INTO planejamento_impostos(impostos_encargos, descricao_impostos_encargos, valor_planejamento, data_planejamento, observacao, created)
VALUES('$impostos_encargos', '$descricao_impostos_encargos', '$valor_planejamento', '$data_planejamento', '$observacao', NOW())";
$resultado = mysqli_query($conn, $result);


header('Location: impostos_encargos.php');
?>