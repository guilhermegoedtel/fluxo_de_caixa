<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$mensagem = $_SESSION['msg'];
echo $mensagem;
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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#propostas">Salvar nova Porposta</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <button type="button" class="btn btn-info" onclick="location.href='../principal_representantes.php'">Voltar</button>
            </li>
          </ul>
        </div>
    </nav>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome Fantasia</th>
      <th>Responsavel</th>
      <th>Proposta</th>
    </tr>  
  </thead>
  <tbody>
    <?php
    $result = mysqli_query($conn,"SELECT * FROM cadastrar_propostas where responsavel='$responsavel'");
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
    <?php $id = $row['ID']; ?>
    <?php $imagem_id = $id + 1;?>
    <td><?php echo $id; ?></td>
    <td><?php echo($row['nome_fantasia']);?></td>
    <td><?php echo($row['responsavel']);?></td>
    <td><a href="ver_propostas.php?ID=<?php echo $id; ?>"><img src="../images/anexo.png" width="64" height="64"></a></td>
    </tr>
    <?php
    }
    ?> 
  <tbody>
</table>

<div class="modal fade" id="propostas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="propostasLabel">Cadastrar Propostas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_proposta.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $imagem_id; ?>">
            </div>
            <div class="form-group">
                <label>Responsavel:</label>
                <input type="text" name="responsavel" class="form-control" id="razao_social" value="<?php echo $responsavel; ?>" disabled="disabled" required>
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="empresa" class="form-control" id="empresa">
                    <option value="" selected>Selecione uma empresa</option>
                    <?php
                    $result = mysqli_query($conn,"SELECT nome_fantasia FROM cadastrar_empresa where responsavel='$responsavel'");
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php echo($row['nome_fantasia']);?>"><?php echo($row['nome_fantasia']);?></option>
                    <?php
                    }
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Proposta:</label>
                <input type="file" name="propostas" class="form-control" id="propostas" placeholder="Proposta" required>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="propostas" id="propostas" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>