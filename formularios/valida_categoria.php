<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$categoria = $_POST['categoria'];

$result_usuario = "INSERT INTO categoria(categoria, created)VALUES('$categoria', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

header("Location: add_categoria.php");
?>