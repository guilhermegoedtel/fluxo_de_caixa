<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$responsavel = $_SESSION['nome'];
$status = $_POST['status'];
$empresa = $_POST['empresa'];
$ferramentas = $_POST['ferramentas'];
$periodo = $_POST['periodo'];
$data_inicial = $_POST['data_inicial'];
$data_final = $_POST['data_final'];

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
}elseif($data_inicial == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione uma data de Inicio !</p>";
    header("Location: ferramentas.php");
}elseif($data_final == ''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione uma data para finalização !</p>";
    header("Location: ferramentas.php");
}else{
    $result = "INSERT INTO contratos(responsavel, status, empresa, ferramentas, periodo, data_inicio, data_fim, created)
    VALUES('$responsavel', '$status', '$empresa', '$ferramentas', '$periodo', '$data_inicial', '$data_final', NOW())";
    $resultado = mysqli_query($conn, $result);
}
$_SESSION['msg'] = "<p style='color:green;'>Status adicionado com Sucesso !</p>";
header("Location: ferramentas.php");
?>