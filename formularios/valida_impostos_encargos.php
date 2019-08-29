<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$lv_acesso = $_SESSION['nv_acesso'];

$impostos_encargos = $_POST['impostos_encargos'];
$descricao = $_POST['descricao'];

$result_usuario = "INSERT INTO add_impostos_encargos(impostos_encargos, descricao, created)
VALUES('$impostos_encargos','$descricao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: add_impostos_encargos.php');
?>