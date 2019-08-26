<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$id = $_POST['id'];
$fornecedor = $_POST['fornecedor'];
$categoria = $_POST['categoria'];
$fornecimento = $_POST['fornecimento'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$valor_pago = $_POST['valor_pago'];
$data_paga = $_POST['data_paga'];
$observacao = $_POST['observacao'];
$es = "saida";

// Pegando o tipo do arquivo
$arquivo = $_FILES["arquivo_fornecedor"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
// Salvado arquivo com qualquer nome
$nome = "$id".".".$tipo;
if(move_uploaded_file($_FILES['arquivo_fornecedor']['tmp_name'],'../upload_fornecedor/'.$nome)){

$result_planejamento = "INSERT INTO historico_fornecedores(antigo_id, tipo_imagem, fornecedor, categoria, fornecimento, valor_planejamento, data_planejamento, valor_pago, data_paga, observacao, created)
VALUES('$id','$tipo','$fornecedor','$categoria','$fornecimento','$valor_planejamento','$data_planejamento','$valor_pago','$data_paga','$observacao',NOW())";
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

$result_usuario = "DELETE FROM planejamento_fornecedores WHERE ID='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

}else{
    echo 'Arquivo não enviado';
}
header('Location: ../formularios/historico_fornecedor.php');
?>