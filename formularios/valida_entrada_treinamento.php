<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$treinamento = $_POST['treinamento'];
$tempo_horas = $_POST['tempo_horas'];
$empresa = $_POST['empresa'];
$local = $_POST['local'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result_usuario = "INSERT INTO entrada_treinamento(treinamento, tempo_horas, empresa, local, valor_planejamento, data_planejamento, observacao, created)
VALUES('$treinamento','$tempo_horas','$empresa','$local','$valor_planejamento','$data_planejamento','$observacao',NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: ../formularios/entrada_treinamento.php');