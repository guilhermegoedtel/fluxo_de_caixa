<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$id = $_POST['antigo_id'];
$inicio = $_POST['inicio'];
$periodo = $_POST['periodo'];
$termino = $_POST['termino'];
$empresa = $_POST['empresa'];
$data_pgto = $_POST['data_pgto'];
$data_emissao = $_POST['data_emissao'];
$es = "saida";
$categoria = "Pagamento NF";

// Pegando o tipo do arquivo
$arquivo = $_FILES["arquivo_nf"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
// Salvado arquivo com qualquer nome
$nome = "$id".".".$tipo;
if(move_uploaded_file($_FILES['arquivo_nf']['tmp_name'],'../upload_arquivo_nf/'.$nome)){

$result_historico = "INSERT INTO emissao_nf(antigo_id, tipo_imagem, inicio, periodo, termino, empresa, data_pgto, data_emissao, created)
VALUES('$id','$tipo','$inicio','$periodo','$termino','$empresa','$data_pgto','$data_emissao',NOW())";
$resultado_planejamento = mysqli_query($conn, $result_historico);

$data_pgto = str_replace("-", "" ,$data_pgto);

$dia = substr("$data_pgto", -2);
$mes = substr("$data_pgto", -4,2);
$ano = substr("$data_pgto", -8,4);

$result_usuario = "INSERT INTO inserir_dados(dia, mes, ano, categoria, es, valor, obs, created)
VALUES('$dia', '$mes', '$ano', '$categoria', '$es', '-', 'Pagamento NF', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

}else{
    echo 'Arquivo não enviado';
}
header('Location: ../formularios/emissao_nf.php');
?>