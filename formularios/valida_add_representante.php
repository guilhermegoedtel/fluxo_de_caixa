<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$responsavel = $_POST['responsavel'];
$cnpj = $_POST['cnpj'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];

$result_usuario = "INSERT INTO representante(responsavel, cnpj, endereco, numero, complemento, bairro, cidade, telefone, created)
VALUES('$responsavel','$cnpj','$endereco','$numero','$complemento','$bairro','$cidade','$telefone', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header("Location: add_representante.php");
?>