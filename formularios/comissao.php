<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../assents/css/style.css" media="screen" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="../css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#comissao">Comissão das vendas</button>
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
      <th>Empresa</th>
      <th>E-5s</th>
      <th>E-Auditorias</th>
      <th>VDA</th>
      <th>E-Assistec</th>
      <th>E-Projetos</th>
      <th>E-Connect</th>
      <th>E-RNC</th>
      <th>E-Tools</th>
      <th>iCalled</th>
      <th>Período</th>
      <th>Valor total a receber</th>
    </tr>  
  </thead>
  <tbody>
    <?php
    $result = mysqli_query($conn,"SELECT ID, status, empresa, ferramentas, periodo FROM contratos where responsavel='$responsavel'");
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo($row['status']);?></td>
    <td><?php echo($row['empresa']);?></td>
    <td><?php echo($row['ferramentas']);?></td>
    <td><?php echo($row['periodo']);?></td>
    <td>
    <a href="altera_status.php?ID=<?php echo($row['ID']); ?>"><button class="btn btn-warning">Alterar</button></a>
    <a href="deleta_status.php?ID=<?php echo($row['ID']); ?>"><button class="btn btn-danger">Excluir</button></a>
    </td>
    </tr>
    <?php
    }
    ?> 
  <tbody>
</table>
<div class="modal fade" id="comissao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="comissaoLabel">Comissão de Vendas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="formularios/valida_comissao.php" method="POST">
         <!--enctype="multipart/form-data"-->
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
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="comissao" id="comissao" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>