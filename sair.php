<?php
	session_start();
	unset(
		$_SESSION['autenticado'],
		$_SESSION['nome'],
		$_SESSION['lv_acesso'],
		$_SESSION['email']);
	header("Location: index.php");
?>