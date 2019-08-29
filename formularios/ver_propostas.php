<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$id = $_GET['ID'];
$result = mysqli_query($conn,"SELECT tipo FROM cadastrar_propostas where id='$id'");
while($row = mysqli_fetch_array($result)){
    $tipo = $row['tipo'];
}
header("Location: ../upload/$id.$tipo");
?>