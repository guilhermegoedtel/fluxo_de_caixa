<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$lv_acesso = $_SESSION['nv_acesso'];

$impostos_encargos = $_POST['impostos_encargos'];

$result_usuario = "INSERT INTO add_impostos_encargos(impostos_encargos, created)
VALUES('$impostos_encargos', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: add_impostos_encargos.php');
?>