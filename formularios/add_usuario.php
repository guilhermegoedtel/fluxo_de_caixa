<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
?>
<!Doctype html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_usuario">Adicionar Usuário</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <button type="button" class="btn btn-info" onclick="location.href='../principal.php'">Voltar</button>
            </li>
          </ul>
        </div>
    </nav>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Data e Hora de cadastro</th>
    </tr>  
  </thead>
  <tbody>
<?php
$result_diario = "SELECT nome, login, created FROM usuario";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
    ?>
    <tr>
      <td><?php echo $row_diario['nome']; ?></td>
      <td><?php echo $row_diario['login']; ?></td>
      <td><?php echo $row_diario['created']; ?></td>
    </tr>
<?php
}
?>
<tbody>
</table>
<div class="modal fade" id="add_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_usuarioLabel">Cadastrar empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_usuario.php" method="POST">
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="login" id="login" class="form-control" placeholder="Digite o email">
            </div>
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a Senha">
            </div>
            <div class="form-group">
                <label>Nivel de Acesso:</label>
                <select id="nv_acesso" name="nv_acesso" class="form-control">
                  <option value="0" selected>Usuário</option> 
                  <option value="1">Administrador</option>
                </select>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_usuario" id="add_usuario" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>