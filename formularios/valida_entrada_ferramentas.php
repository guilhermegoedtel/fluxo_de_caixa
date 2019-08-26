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

$fives = str_replace(".", "" ,$fives);
$fives = str_replace(",", "" ,$fives);
$auditorias = str_replace(".", "" ,$auditorias);
$auditorias = str_replace(",", "" ,$auditorias);
$vda = str_replace(".", "" ,$vda);
$vda = str_replace(",", "" ,$vda);
$assitec = str_replace(".", "" ,$assitec);
$assitec = str_replace(",", "" ,$assitec);
$projetos = str_replace(".", "" ,$projetos);
$projetos = str_replace(",", "" ,$projetos);
$connect = str_replace(".", "" ,$connect);
$connect = str_replace(",", "" ,$connect);
$tools = str_replace(".", "" ,$tools);
$tools = str_replace(",", "" ,$tools);
$icalled = str_replace(".", "" ,$icalled);
$icalled = str_replace(",", "" ,$icalled);

$result_usuario = "INSERT INTO entrada_ferramenta(inicio, periodo, termino, empresa, representante, porcentagem, fives, auditorias, vda, assitec, projetos, connect, tools, icalled, created)
VALUES('$inicio','$periodo','$termino','$empresa','$representante','$porcentagem','$fives','$auditorias','$vda','$assitec','$projetos','$connect','$tools','$icalled', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header("Location: entrada_ferramentas.php");
?>