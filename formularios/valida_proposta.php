<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
$responsavel = $_SESSION['nome'];
include_once("conectar.php");

$nome_fantasia = $_POST['nome_fantasia'];
/*$propostas = file_get_contents($_FILES['propostas']['tmp_name']);
$propostas = base64_encode($propostas);*/

$uploaddir = '../upload/';

$uploadfile = $uploaddir . $_FILES['propostas']['name'];

if (move_uploaded_file($_FILES['propostas']['tmp_name'], $uploadfile)){
    echo 'Arquivo Enviado';
}else{
    echo 'Arquivo não enviado';
}

$result = "INSERT INTO cadastrar_propostas(responsavel, nome_fantasia, created)VALUES('$nome_fantasia', '$responsavel', NOW())";
$resultado = mysqli_query($conn, $result);

if($lv_acesso == 1){
    header('Location: ../principal.php');
    exit();
}else{
    header('Location: ../principal_representantes.php');
    exit();
}
?>