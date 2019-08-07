<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$id = $_POST['id'];
$motivo = $_POST['motivo'];
$exclusao = $_POST['exclusao'];

$result = "UPDATE contratos SET status='$status', periodo='$periodo', created=NOW() where id='$id'";
$resultado = mysqli_query($conn, $result);

$result = "INSERT into "

$_SESSION['msg'] = "<p style='color:green;'>Status Alterado com Sucesso !</p>";
header("Location: ferramentas.php");
}
?>
<!--
$result = "INSERT into apaga_contratos(status, periodo, created) values ('$status','$periodo', NOW()";
$resultado = mysqli_query($conn, $result);
-->