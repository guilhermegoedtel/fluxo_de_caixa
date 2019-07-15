<?php
session_start();
if(!isset($_SESSION['autenticado'])){
    header("location: ../index.php");
    session_destroy();
}
include_once("conectar.php");

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$categoria = $_POST['categoria'];
$es = $_POST['es'];
$valor = $_POST['valor'];
$obs = $_POST['obs'];
$foto = $_POST['foto'];

$valor = str_replace(".", "" ,$valor);
$valor = str_replace(",", "" ,$valor);

if($dia == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione um dia !</p>";
	header("Location: inserir_dados.php");
}elseif ($mes == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione um mes !</p>";
	header("Location: inserir_dados.php");
}elseif ($ano == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione um ano !</p>";
	header("Location: inserir_dados.php");
}elseif ($categoria == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione uma categoria !</p>";
	header("Location: inserir_dados.php");
}elseif ($es == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione se é entrada ou saida !</p>";
    header("Location: inserir_dados.php");
}else{
    $result_usuario = "INSERT INTO inserir_dados(dia, mes, ano, categoria, es, valor, obs, foto, created)VALUES('$dia', '$mes', '$ano', '$categoria', '$es', '$valor', '$obs', '$foto', NOW())";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
}
?>