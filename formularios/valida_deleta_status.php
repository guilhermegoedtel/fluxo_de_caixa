<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$id = $_POST['id'];
$motivo = $_POST['motivo'];
$exclusao = $_POST['exclusao'];

if($exclusao == 'nao'){
    $_SESSION['msg'] = "<p style='color:red;'>Operação Cancelada com Sucesso !</p>";
    header("Location: ferramentas.php");
}elseif($motivo == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Informe o motivo da Exclusão !</p>";
    header("Location: ferramentas.php");
}else{

$result = mysqli_query($conn,"SELECT empresa, ferramentas FROM contratos where id='$id'");
while($row = mysqli_fetch_array($result)){
$empresa = $row['empresa'];
$ferramentas = $row['ferramentas'];
}

$result_add = "INSERT into apaga_status(motivo, empresa, ferramentas, responsavel, created)
values ('$motivo','$empresa','$ferramentas','$responsavel', NOW())";
$resultado = mysqli_query($conn, $result_add);

$result = "DELETE FROM contratos where id='$id'";
$resultado = mysqli_query($conn, $result);

$_SESSION['msg'] = "<p style='color:green;'>Status Alterado com Sucesso !</p>";
header("Location: ferramentas.php");
}
?>