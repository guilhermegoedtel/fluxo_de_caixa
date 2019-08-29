
<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
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
<div class="modal fade" id="visita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="visitaLabel">Adicionar visita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_visita.php" method="POST">
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
            <div class="form-group">
                <label>Data da visita:</label>
                <input type="datetime-local" name="data" class="form-control" id="data" required>
            </div>
            <div class="form-group">
                <label>Selecione uma cor:</label>
                <input type="color" name="cor" class="form-control" id="cor" required>
            </div>
        </div>
            <div class="modal-footer">
                <a href="../principal_representantes.php"><button type="button" class="btn btn-secondary">Cancelar</button></a>
                <input type="submit" name="visita" id="visita" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
<script>
$(function(){
    $('#visita').modal('show');
});
</script>
</html>