<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$id = $_GET['ID'];
$status = $_POST['status'];
$periodo = $_POST['periodo'];


$result = mysqli_query($conn,"SELECT status, periodo FROM contratos where responsavel='$responsavel' and id='$id'");
while($row = mysqli_fetch_array($result)){
$status2 = $row['status'];
$periodo2 = $row['periodo'];
}

echo $id;
echo $status;
echo $periodo;
echo $status2;
echo $periodo2;
/*
if($status == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione um status !</p>";
    header("Location: ferramentas.php");
}elseif($empresa == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione uma empresa !</p>";
    header("Location: ferramentas.php");
}elseif($ferramentas == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione uma ferramenta !</p>";
    header("Location: ferramentas.php");
}elseif($periodo == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione um periodo !</p>";
    header("Location: ferramentas.php");
}else{
    $result = "UPDATE contratos SET status='$status', periodo='$periodo', created=NOW() where id='id'";
    $resultado = mysqli_query($conn, $result);
}
$_SESSION['msg'] = "<p style='color:green;'>Status Alterado com Sucesso !</p>";
header("Location: ferramentas.php");
*/
?>