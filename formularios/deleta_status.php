<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$id = $_GET['ID'];
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
<div class="modal fade" id="deleta_status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleta_statusLabel">Deletar Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_deleta_status.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>Motivo da exclusão:</label>
                <textarea name="motivo" class="form-control" id="motivo" placeholder="Motivo da exclusão"></textarea>
            </div>
            <div class="form-group">
                <label>Tem Certeza Que deseja Realmente excluir ?</label>
                <select name="exclusao" class="form-control" id="exclusao">
                <option value="nao" selected>Não</option>
                <option value="sim">Sim</option>
                </select>
            </div>
            <div class="modal-footer">
              <a href="ferramentas.php"><button class="btn btn-secondary">Cancelar</button></a>
              <input type="submit" name="deleta_status" id="deleta_status" value="Deletar" class="btn btn-danger">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
<script>
$(function(){
    $('#deleta_status').modal('show');
});
</script>
</html>

<!--
/*
$status = $_POST['status'];
$periodo = $_POST['periodo'];


$result = mysqli_query($conn,"SELECT status, periodo FROM contratos where id='$id'");
while($row = mysqli_fetch_array($result)){
$status2 = $row['status'];
$periodo2 = $row['periodo'];
}

echo $id;
echo $status;
echo $periodo;


$result = "UPDATE contratos SET status='$status', periodo='$periodo', created=NOW() where id='1'";
$resultado = mysqli_query($conn, $result);

$result = "INSERT into apaga_contratos(status, periodo, created) values ('$status','$periodo', NOW()";
$resultado = mysqli_query($conn, $result);


$_SESSION['msg'] = "<p style='color:green;'>Status Alterado com Sucesso !</p>";
header("Location: ferramentas.php");
*/
?>
-->