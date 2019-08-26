<?php
session_start();
include '../includes/session.php';
$nv_acesso = $_SESSION['lv_acesso'];
include_once("conectar.php");

$equipe = $_POST['equipe'];
$valor_planejamento = $_POST['valor_planejamento'];
$data_planejamento = $_POST['data_planejamento'];
$observacao = $_POST['observacao'];

$result = mysqli_query($conn,"SELECT funcao FROM equipe where equipe='$equipe'");
while($row = mysqli_fetch_array($result)){
    $funcao = $row['funcao'];
}
$result = "INSERT INTO planejamento_funcionarios(equipe, funcao, valor_planejamento, data_planejamento, observacao, created)
VALUES('$equipe', '$funcao', '$valor_planejamento', '$data_planejamento', '$observacao', NOW())";
$resultado = mysqli_query($conn, $result);


header('Location: funcionarios.php');
?>