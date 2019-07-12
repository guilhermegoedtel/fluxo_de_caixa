<?php
session_start();
include('conectar.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$login = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$senha = md5($senha);

$result_acesso = "SELECT * FROM usuario";
    $resultado_acesso = mysqli_query($conn, $result_acesso);
    while($row_acesso = mysqli_fetch_assoc($resultado_acesso)){
		$lv_acesso = $row_acesso['nv_acesso'];
	}

$query = "select * from usuario where login = '{$login}' and senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location: principal.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}