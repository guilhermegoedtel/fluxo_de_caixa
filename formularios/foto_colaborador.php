<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$id = $_GET['ID'];
$result = mysqli_query($conn,"SELECT tipo_imagem FROM equipe where ID='$id'");
while($row = mysqli_fetch_array($result)){
    $tipo = $row['tipo_imagem'];
}
header("Location: ../foto_colaborador/$id.$tipo");
?>