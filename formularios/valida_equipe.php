<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$equipe = $_POST['equipe'];
$funcao = $_POST['funcao'];

$result_usuario = "INSERT INTO equipe(equipe, funcao, created)VALUES('$equipe', '$funcao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: ../principal.php');
?>