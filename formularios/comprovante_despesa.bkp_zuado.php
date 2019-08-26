<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$id = $_GET['ID'];
header("Location: ../formularios/busca_comprovante.php");
?>
