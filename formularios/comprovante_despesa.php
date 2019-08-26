<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$id = $_GET['ID'];
$result = mysqli_query($conn,"SELECT tipo_imagem FROM historico_despesas where antigo_id='$id'");
while($row = mysqli_fetch_array($result)){
    $tipo = $row['tipo_imagem'];
}
header("Location: ../upload_despesa/$id.$tipo");
?>