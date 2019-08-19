<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$lv_acesso = $_SESSION['nv_acesso'];

$descricao_impostos_encargos = $_POST['descricao_impostos_encargos'];

$result_usuario = "INSERT INTO descricao_impostos_encargos(descricao_impostos_encargos, created)VALUES('$descricao_impostos_encargos', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: add_descricao_impostos_encargos.php');
?>