<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$lv_acesso = $_SESSION['nv_acesso'];

$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$operacao = $_POST['operacao'];
$conta = $_POST['conta'];
$favorecido = $_POST['favorecido'];

$result_usuario = "INSERT INTO conta(banco, agencia, operacao, conta, favorecido, created)
VALUES('$banco', '$agencia', '$operacao', '$conta', '$favorecido', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: add_conta.php');
?>