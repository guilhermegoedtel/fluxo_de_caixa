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

/*Verificar nivel de acesso do usuario, falta finalizar !*/
$result_acesso = "SELECT nome, login, senha, nv_acesso FROM usuario where login = '$login' and senha = '$senha'";
$resultado_acesso = mysqli_query($conn, $result_acesso);
$row = mysqli_num_rows($resultado_acesso);
while($row_acesso = mysqli_fetch_assoc($resultado_acesso)){
	$lv_acesso = $row_acesso['nv_acesso'];
	$nome = $row_acesso['nome'];
	$email = $row_acesso['email'];

}

if($row != 1){
	$_SESSION['nao_autenticado'] = true;
	$_SESSION['msg'] = "<center>*Login ou senha incorreto*</center>";
	header('Location: index.php');
	exit();
}else{
	if($lv_acesso == 1){
		$_SESSION['autenticado'] = true;
		$_SESSION['nome'] = $nome;
		$_SESSION['lv_acesso'] = $lv_acesso;
		$_SESSION['email'] = $email;
		header('Location: principal.php');
		exit();
	}else{
		$_SESSION['autenticado'] = true;
		$_SESSION['nome'] = $nome;
		$_SESSION['lv_acesso'] = $lv_acesso;
		$_SESSION['email'] = $email;
		header('Location: principal_representantes.php');
		exit();
	}
}