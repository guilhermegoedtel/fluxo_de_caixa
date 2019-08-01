<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");
$responsavel = $_SESSION['nome'];

$empresa = $_POST['empresa'];
$mensagem = $_POST['mensagem'];


$result = "INSERT INTO acompanhamento(responsavel, empresa, mensagem, created)VALUES('$responsavel', '$empresa', '$mensagem', NOW())";
$resultado = mysqli_query($conn, $result);


if($nv_acesso == 1){
    header('Location: ../principal.php');
    exit();
}else{
    header('Location: ../principal_representantes.php');
    exit();
}
?>