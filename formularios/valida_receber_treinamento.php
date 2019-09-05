<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$id = $_POST['id'];
$treinamento = $_POST['treinamento'];
$tempo_horas = $_POST['tempo_horas'];
$empresa = $_POST['empresa'];
$local = $_POST['local'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$valor_receber = $_POST['valor_receber'];
$data_paga = $_POST['data_paga'];
$observacao = $_POST['observacao'];
$categoria = "Treianamento";
$es = "entrada";

$result_planejamento = "INSERT INTO historico_entrada_treianamento(treinamento, tempo_horas, empresa, local, valor_planejamento, data_planejamento, valor_receber, data_paga, observacao, created)
VALUES('$treinamento', '$tempo_horas', '$empresa', '$local', '$valor_planejamento', '$data_planejamento', '$valor_receber','$data_paga', '$observacao', NOW())";
$resultado_planejamento = mysqli_query($conn, $result_planejamento);

$valor_receber = str_replace(".", "" ,$valor_receber);
$valor_receber = str_replace(",", "" ,$valor_receber);

$data_paga = str_replace("-", "" ,$data_paga);

$dia = substr("$data_paga", -2);
$mes = substr("$data_paga", -4,2);
$ano = substr("$data_paga", -8,4);

$result_usuario = "INSERT INTO inserir_dados(dia, mes, ano, categoria, es, valor, obs, created)
VALUES('$dia', '$mes', '$ano', '$categoria', '$es', '$valor_receber', '$observacao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$result_usuario = "DELETE FROM entrada_treinamento WHERE ID='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: ../formularios/historico_treinamento.php');
?>