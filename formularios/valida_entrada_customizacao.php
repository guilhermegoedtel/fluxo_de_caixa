<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$customizacao = $_POST['customizacao'];
$tempo_horas = $_POST['tempo_horas'];
$ferramenta = $_POST['ferramenta'];
$empresa = $_POST['empresa'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result_usuario = "INSERT INTO entrada_customizacao(customizacao, tempo_horas, ferramenta, empresa, valor_planejamento, data_planejamento, observacao, created)
VALUES('$customizacao','$tempo_horas','$ferramenta','$empresa','$valor_planejamento','$data_planejamento','$observacao',NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: /formularios/entrada_customizacao.php');
