<?php
session_start();
if(!isset($_SESSION['autenticado'])){
    header("location: ../index.php");
    session_destroy();
}
include_once("conectar.php");

$categoria = $_POST['categoria'];

$result_usuario = "INSERT INTO categoria(categoria, created)VALUES('$categoria', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
?>