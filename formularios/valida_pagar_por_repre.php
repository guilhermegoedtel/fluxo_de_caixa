<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$subtrai = "1";

$id = $_POST['id'];
$inicio = $_POST['inicio'];
$periodo = $_POST['periodo'];
$termino = $_POST['termino'];
$empresa = $_POST['empresa'];
$representante = $_POST['representante'];
$porcentagem = $_POST['porcentagem'];
$fives = $_POST['fives'];
$auditorias = $_POST['auditorias'];
$vda = $_POST['vda'];
$assitec = $_POST['assitec'];
$projetos = $_POST['projetos'];
$connect = $_POST['connect'];
$tools = $_POST['tools'];
$icalled = $_POST['icalled'];
$valor_pago = $_POST['valor_pago'];
$data_paga = $_POST['data_paga'];
$total = $_POST['total'];
$es = "entrada";
$categoria = "Recebimento Ferramentas";

// Pegando o tipo do arquivo
$arquivo = $_FILES["arquivo_pgto_repre"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
// Salvado arquivo com qualquer nome
$nome = "$id".".".$tipo;
if(move_uploaded_file($_FILES['arquivo_pgto_repre']['tmp_name'],'../upload_pgto_repre/'.$nome)){

$result_historico = "INSERT INTO historico_entrada_ferramentas(antigo_id, tipo_imagem, inicio, periodo, termino, empresa, representante, porcentagem , fives, auditorias, vda, assitec, projetos, connect, tools, icalled, valor_pago, data_paga, total, created)
VALUES('$id','$tipo','$inicio','$periodo','$termino','$empresa','$representante','$porcentagem','$fives','$auditorias','$vda','$assitec','$projetos','$connect','$tools','$icalled','$valor_pago','$data_paga','$total',NOW())";
$resultado_planejamento = mysqli_query($conn, $result_historico);

$result_planejamento = "INSERT INTO historico_pgto_representantes(antigo_id, tipo_imagem, porcentagem, valor_pago, data_paga, created)
VALUES('$id','$tipo','$porcentagem','$valor_pago','$data_paga',NOW())";
$resultado_planejamento = mysqli_query($conn, $result_planejamento);

if($periodo >= "1"){
    $periodo = $periodo - $subtrai;
    
    $valor_pago = str_replace(".", "" ,$valor_pago);
    $valor_pago = str_replace(",", "" ,$valor_pago);

    $result_usuario = "INSERT INTO entrada_ferramenta(inicio, periodo, termino, empresa, representante, porcentagem, fives, auditorias, vda, assitec, projetos, connect, tools, icalled, created)
    VALUES('$inicio','$periodo','$termino','$empresa','$representante','$porcentagem','$fives','$auditorias','$vda','$assitec','$projetos','$connect','$tools','$icalled', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    $data_paga = str_replace("-", "" ,$data_paga);

    $dia = substr("$data_paga", -2);
    $mes = substr("$data_paga", -4,2);
    $ano = substr("$data_paga", -8,4);

    $result_usuario = "INSERT INTO inserir_dados(dia, mes, ano, categoria, es, valor, obs, created)
    VALUES('$dia', '$mes', '$ano', '$categoria', '$es', '$valor_pago', 'Recebimento, $empresa', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    $result_usuario = "DELETE FROM entrada_ferramenta WHERE ID='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
}else{
    $valor_pago = str_replace(".", "" ,$valor_pago);
    $valor_pago = str_replace(",", "" ,$valor_pago);

    $data_paga = str_replace("-", "" ,$data_paga);

    $dia = substr("$data_paga", -2);
    $mes = substr("$data_paga", -4,2);
    $ano = substr("$data_paga", -8,4);

    $result_usuario = "INSERT INTO inserir_dados(dia, mes, ano, categoria, es, valor, obs, created)
    VALUES('$dia', '$mes', '$ano', '$categoria', '$es', '$valor_pago', 'Recebimento, $empresa', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    $result_usuario = "DELETE FROM entrada_ferramenta WHERE ID='$id'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
}
}else{
    echo 'Arquivo não enviado';
}
header('Location: ../formularios/historico_entrada_ferramentas.php');
?>