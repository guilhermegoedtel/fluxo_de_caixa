<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$id = $_POST['id'];
$banco = $_POST['banco'];
$descricao = $_POST['descricao'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$valor_pago = $_POST['valor_pago'];
$data_paga = $_POST['data_paga'];
$observacao = $_POST['observacao'];
$categoria = "Taxa Bancaria";
$es = "saida";

$result_planejamento = "INSERT INTO historico_planejamento_taxas(banco, descricao, valor_planejamento, data_planejamento, valor_pago, data_paga, observacao, created)
VALUES('$banco', '$descricao', '$valor_planejamento', '$data_planejamento', '$valor_pago', '$data_paga', '$observacao', NOW())";
$resultado_planejamento = mysqli_query($conn, $result_planejamento);

$valor_pago = str_replace(".", "" ,$valor_pago);
$valor_pago = str_replace(",", "" ,$valor_pago);

$data_paga = str_replace("-", "" ,$data_paga);

$dia = substr("$data_paga", -2);
$mes = substr("$data_paga", -4,2);
$ano = substr("$data_paga", -8,4);

$result_usuario = "INSERT INTO inserir_dados(dia, mes, ano, categoria, es, valor, obs, created)
VALUES('$dia', '$mes', '$ano', '$categoria', '$es', '$valor_pago', '$observacao', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$result_usuario = "DELETE FROM planejamento_taxas WHERE ID='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: ../formularios/taxas_bancaria.php');
?>