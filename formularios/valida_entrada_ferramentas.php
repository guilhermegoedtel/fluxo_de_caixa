<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

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

$result_usuario = "INSERT INTO entrada_ferramenta(inicio, periodo, termino, empresa, representante, porcentagem, fives, auditorias, vda, assitec, projetos, connect, tools, icalled, created)
VALUES('$inicio','$periodo','$termino','$empresa','$representante','$porcentagem','$fives','$auditorias','$vda','$assitec','$projetos','$connect','$tools','$icalled', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header("Location: entrada_ferramentas.php");
?>