<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");

$razao_social = $_POST['razao_social'];
$nome_fantasia = $_POST['nome_fantasia'];
$cnpj = $_POST['cnpj'];
$logotipo = file_get_contents($_FILES['logotipo']['tmp_name']);
$logotipo = base64_encode($logotipo);
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$responsavel = $_POST['responsavel'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

$cnpj = str_replace(".", "" ,$cnpj);
$cnpj = str_replace("/", "" ,$cnpj);
$cnpj = str_replace("-", "" ,$cnpj);

$telefone = str_replace("(", "" ,$telefone);
$telefone = str_replace(")", "" ,$telefone);
$telefone = str_replace("-", "" ,$telefone);

$celular = str_replace("(", "" ,$celular);
$celular = str_replace(")", "" ,$celular);
$celular = str_replace("-", "" ,$celular);

?>
<!--<img src="data:image/jpg;base64,<?php //echo $logotipo ?>" />-->
<?php

if($estado == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione um estado !</p>";
	header("Location: add_empresa.php");
}else{
    $result = "INSERT INTO cadastrar_empresa(razao_social, nome_fantasia, cnpj, logotipo, endereco, numero, complemento, bairro, estado, cidade, responsavel, telefone, celular, email, latitude, longitude, created)
    VALUES('$razao_social', '$nome_fantasia', '$cnpj', '$logotipo', '$endereco', '$numero', '$complemento', '$bairro', '$estado', '$cidade', '$responsavel', '$telefone', '$celular', '$email', '$latitude', '$longitude', NOW())";
    $resultado = mysqli_query($conn, $result);
}

if($lv_acesso == 1){
    header('Location: ../principal.php');
    exit();
}else{
    header('Location: ../principal_representantes.php');
    exit();
}
?>