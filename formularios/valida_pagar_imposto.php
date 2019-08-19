<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$id = $_POST['id'];
$impostos_encargos = $_POST['impostos_encargos'];
$descricao_impostos_encargos = $_POST['descricao_impostos_encargos'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$valor_pago = $_POST['valor_pago'];
$data_paga = $_POST['data_paga'];
$observacao = $_POST['observacao'];
$categoria = "Impostos/Encargos";
$es = "saida";

$result_planejamento = "INSERT INTO historico_planejamento_impostos(impostos_encargos, descricao_impostos_encargos, valor_planejamento, data_planejamento, valor_pago, data_paga, observacao, created)
VALUES('$impostos_encargos','$descricao_impostos_encargos','$valor_planejamento','$data_planejamento','$valor_pago','$data_paga','$observacao',NOW())";
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

$result_usuario = "DELETE FROM planejamento_impostos WHERE ID='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header('Location: ../formularios/impostos_encargos.php');
?>