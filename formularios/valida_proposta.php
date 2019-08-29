<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
$responsavel = $_SESSION['nome'];
include_once("conectar.php");

$id = $_POST['id'];
$nome_fantasia = $_POST['empresa'];

// Pegando o tipo do arquivo
$arquivo = $_FILES["propostas"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
// Salvado arquivo com qualquer nome
$nome = "$id".".".$tipo;
if(move_uploaded_file($_FILES['propostas']['tmp_name'],'../upload/'.$nome)){
    $result = "INSERT INTO cadastrar_propostas(tipo, responsavel, nome_fantasia, created)VALUES('$tipo','$responsavel','$nome_fantasia', NOW())";
    $resultado = mysqli_query($conn, $result);
}else{
    echo 'Arquivo não enviado';
}
if($lv_acesso == 1){
    header('Location: ../principal.php');
    exit();
}else{
    header('Location: ../propostas.php');
    exit();
}
?>