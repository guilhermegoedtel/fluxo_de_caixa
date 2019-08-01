<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$lv_acesso = $_SESSION['nv_acesso'];

$empresa = $_POST['empresa'];
$data = $_POST['data'];
$cor = $_POST['cor'];

$result_usuario = "INSERT INTO agenda_visitas(responsavel, empresa, data, cor, created)VALUES('$responsavel', '$empresa', '$data', '$cor', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if($lv_acesso == 1){
    header('Location: ../principal.php');
    exit();
}else{
    header('Location: ../principal_representantes.php');
    exit();
}
?>