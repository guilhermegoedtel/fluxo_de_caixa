<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Fluxo de caixa</title>
		<link href="assents/css/bootstrap.css" rel="stylesheet">
		<link href="assents/css/signin.css" rel="stylesheet">
	</head>
	<body>
  <br><br><br><br><br><br>
		<div class="container">
			<div class="form-signin" style="background: #42dea4;">
				<h2 class="text-center">Fazer Login</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<form action="valida.php" method="POST">
					<!--<label>Usuário</label>-->
					<input type="email" name="login" placeholder="login" class="form-control" required><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Senha" class="form-control" required><br>
					
					<input type="submit" name="btnLogin" value="Entrar" class="btn btn-success btn-block">
				</form>
			</div>
		</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="assents/js/bootstrap.min.js"></script>
	</body>
</html>