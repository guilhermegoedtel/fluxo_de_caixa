<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$guarda_id = 1;
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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_emissao">Adicionar Emissão NF</button>
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
      <th>Inicio</th>
      <th>Período(Meses)</th>
      <th>Término</th>
      <th>Empresa</th>
      <th>Data de Pagamento</th>
      <th>Data da Emissão NF</th>
      <th>Comprovante</th>
    </tr>  
  </thead>
  <tbody>
<?php
$result_diario = "SELECT * FROM emissao_nf";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
    ?>
    <tr>
      <?php $id = $row_diario['ID']; ?>
      <?php $guarda_id = $id + 1;?>
      <td><?php echo $row_diario['inicio']; ?></td>
      <td><?php echo $row_diario['periodo']; ?></td>
      <td><?php echo $row_diario['termino']; ?></td>
      <td><?php echo $row_diario['empresa']; ?></td>
      <td><?php echo $row_diario['data_pgto']; ?></td>
      <td><?php echo $row_diario['data_emissao']; ?></td>
      <td><a href="comprovante_nf.php?ID=<?php echo $id; ?>"><img src="../images/anexo.png" width="64" height="64"></a></td>
    </tr>
<?php
}
?>
<tbody>
</table>
<div class="modal fade" id="add_emissao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_emissaoLabel">Emissão de NF</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_emissao_nf.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="antigo_id" value="<?php echo $guarda_id; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Inicio do contrato:</label>
                <input type="date" name="inicio" class="form-control">
            </div>
            <div class="form-group">
                <label>Periodo de contrato:</label>
                <input type="number" name="periodo" class="form-control" placeholder="Digite o periodo de contrato">
            </div>
            <div class="form-group">
                <label>Fim do Contrato:</label>
                <input type="date" name="termino" class="form-control" placeholder="Digite o termino do contrato">
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="empresa" class="form-control" id="empresa">
                    <option value="" selected>Selecione uma Empresa</option>
                    <?php
                    $result = mysqli_query($conn,"SELECT razao_social FROM cadastrar_empresa");
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php echo($row['razao_social']);?>" class="form-control"><?php echo($row['razao_social']);?></option>
                    <?php
                    }
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Data de Pagamento:</label>
                <input type="date" name="data_pgto" class="form-control" placeholder="Digite a data de pagamento">
            </div>
            <div class="form-group">
                <label>Data de Emissão:</label>
                <input type="date" name="data_emissao" class="form-control" placeholder="Digite a data de Emissão">
            </div>
            <div class="form-group">
            <label>Anexo da Despesa:</label>
            <input type="file" name="arquivo_nf" class="form-control" id="arquivo_nf">
          </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_emissao" id="add_emissao" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>