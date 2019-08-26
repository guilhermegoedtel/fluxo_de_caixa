<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$id = $_POST['id'];
$responsavel = $_POST['responsavel'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$valor_pago = $_POST['valor_pago'];
$data_paga = $_POST['data_paga'];
$observacao = $_POST['observacao'];
$categoria = "Pagamento Representante";
$es = "saida";

// Pegando o tipo do arquivo
$arquivo = $_FILES["arquivo_representante"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
// Salvado arquivo com qualquer nome
$nome = "$id".".".$tipo;
if(move_uploaded_file($_FILES['arquivo_representante']['tmp_name'],'../upload_representante/'.$nome)){

$result_planejamento = "INSERT INTO historico_representantes(antigo_id, tipo_imagem, responsavel, valor_planejamento, data_planejamento, valor_pago, data_paga, observacao, created)
VALUES('$id','$tipo','$responsavel','$valor_planejamento','$data_planejamento','$valor_pago','$data_paga','$observacao',NOW())";
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

$result_usuario = "DELETE FROM planejamento_representantes WHERE ID='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

}else{
    echo 'Arquivo não enviado';
}
header('Location: ../formularios/historico_representantes.php');
?>