<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$id = $_GET['ID'];
?>
<!Doctype html>
<head>
<meta charset="utf-8">
<script type="text/javascript"> 
function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}
function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}
function mreais(v){
	v=v.replace(/\D/g,"")
	v=v.replace(/(\d{2})$/,",$1")
	v=v.replace(/(\d+)(\d{3},\d{2})$/g,"$1.$2")
	return v
}
</script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
<?php
$result = mysqli_query($conn,"SELECT * FROM entrada_customizacao where ID='$id'");
while($row = mysqli_fetch_array($result)){
    $customizacao = $row['customizacao'];
    $tempo_horas = $row['tempo_horas'];
    $ferramenta = $row['ferramenta'];
    $empresa = $row['empresa'];
    $valor_planejamento = $row['valor_planejamento'];
    $data_planejamento = $row['data_planejamento'];
    $observacao = $row['observacao'];
}
?>
<div class="modal fade" id="receber" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="receberLabel">Recebimento</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_receber_customizacao.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="customizacao" value="<?php echo $customizacao; ?>">
          <input type="hidden" name="tempo_horas" value="<?php echo $tempo_horas; ?>">
          <input type="hidden" name="ferramenta" value="<?php echo $ferramenta; ?>">
          <input type="hidden" name="empresa" value="<?php echo $empresa; ?>">
          <input type="hidden" name="valor_planejamento" value="<?php echo $valor_planejamento; ?>">
          <input type="hidden" name="data_planejamento" value="<?php echo $data_planejamento; ?>">
          <input type="hidden" name="observacao" value="<?php echo $observacao; ?>">
            <div class="form-group">
                <label>Valor do Recebimento:</label>
                <input type="text" name="valor_receber" class="form-control" id="valor_receber" onkeypress="mascara(this,mreais)" size="20" />
            </div>
              <div class="form-group">
                <label>Data de Recebimento:</label>
                <input type="date" name="data_paga" class="form-control" id="data_paga">
              </div>
            </div>
            <div class="modal-footer">
                <a href="entrada_customizacao.php"><button class="btn btn-secondary">Cancelar</button></a>
                <?php $_SESSION['msg'] = "<p style='color:green;'>Alteração de status Cancelada !</p>"; ?>
                <input type="submit" name="receber" id="receber" value="Realizar Recebimento" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
<script>
$(function(){
    $('#receber').modal('show');
});
</script>
</html>