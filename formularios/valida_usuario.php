<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$login = $_POST['login'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$nv_acesso = $_POST['nv_acesso'];

if($senha==''){
    $senha = "123mudar";
}else{
    $senha = $senha;
}
$senha = md5($senha);

$result_usuario = "INSERT INTO usuario(login, nome, senha, nv_acesso, created)VALUES('$login', '$nome', '$senha', '$nv_acesso', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
?>