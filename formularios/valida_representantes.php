<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");

$responsavel = $_POST['responsavel'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result = "INSERT INTO planejamento_representantes(responsavel, valor_planejamento, data_planejamento, observacao, created)
VALUES('$responsavel', '$valor_planejamento', '$data_planejamento', '$observacao', NOW())";
$resultado = mysqli_query($conn, $result);


header('Location: representantes.php');
?>