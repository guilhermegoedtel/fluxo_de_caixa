<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$id = $_POST['id'];
$status = $_POST['status'];
$periodo = $_POST['periodo'];


$result = mysqli_query($conn,"SELECT status, periodo FROM contratos where id='$id'");
while($row = mysqli_fetch_array($result)){
$status2 = $row['status'];
$periodo2 = $row['periodo'];
}

if($status == "$status2" or $periodo == "$periodo2"){
    header("Location: ferramentas.php");
    $_SESSION['msg'] = "<p style='color:red;'>Os dados são os mesmos !</p>";
}else{
$result = "UPDATE contratos SET status='$status', periodo='$periodo', created=NOW() where id='$id'";
$resultado = mysqli_query($conn, $result);

$_SESSION['msg'] = "<p style='color:green;'>Status Alterado com Sucesso !</p>";
header("Location: ferramentas.php");
}
?>
<!--
$result = "INSERT into apaga_contratos(status, periodo, created) values ('$status','$periodo', NOW()";
$resultado = mysqli_query($conn, $result);
-->