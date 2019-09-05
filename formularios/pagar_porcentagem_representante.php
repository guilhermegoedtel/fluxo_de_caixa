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
$result = mysqli_query($conn,"SELECT * FROM entrada_ferramenta where ID='$id'");
while($row_diario = mysqli_fetch_array($result)){
      $inicio = $row_diario['inicio'];
      $periodo = $row_diario['periodo'];
      $termino = $row_diario['termino'];
      $empresa = $row_diario['empresa'];
      $representante = $row_diario['representante'];
      $porcentagem = $row_diario['porcentagem'];
      $fives = $row_diario['fives'];
      $auditorias = $row_diario['auditorias'];
      $vda = $row_diario['vda'];
      $assitec = $row_diario['assitec'];
      $projetos = $row_diario['projetos'];
      $connect = $row_diario['connect'];
      $tools = $row_diario['tools'];
      $icalled = $row_diario['icalled'];
      if($fives == ''){
        $fives = 0;
      }else if($auditorias == ''){
        $auditorias = 0;
      }else if($vda == ''){
        $vda = 0;
      }elseif($assitec == ''){
        $assitec = 0;
      }elseif($projetos == ''){
        $projetos = 0;
      }elseif($connect == ''){
        $connect = 0;
      }elseif($tools == ''){
        $tools = 0;
      }elseif($icalled == ''){
        $icalled = 0;
      }
    $total_sem = ($fives + $auditorias + $vda + $assitec + $projetos + $connect + $tools + $icalled);
    $total = (($total_sem * $porcentagem)/100);
    $total1 = ($fives + $auditorias + $vda + $assitec + $projetos + $connect + $tools + $icalled);
    $total1 = (($total1 * $porcentagem)/100);
    $total1 = number_format($total1/100,2,",",".");
    $total_receber = ($total_sem - $total);
}
?>
<div class="modal fade" id="pagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pagarLabel">Pagamento</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_pagar_por_repre.php" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="inicio" value="<?php echo $inicio; ?>">
          <input type="hidden" name="periodo" value="<?php echo $periodo; ?>">
          <input type="hidden" name="termino" value="<?php echo $termino; ?>">
          <input type="hidden" name="empresa" value="<?php echo $empresa; ?>">
          <input type="hidden" name="porcentagem" value="<?php echo $porcentagem; ?>">
          <input type="hidden" name="fives" value="<?php echo $fives; ?>">
          <input type="hidden" name="auditorias" value="<?php echo $auditorias; ?>">
          <input type="hidden" name="vda" value="<?php echo $vda; ?>">
          <input type="hidden" name="assitec" value="<?php echo $assitec; ?>">
          <input type="hidden" name="projetos" value="<?php echo $projetos; ?>">
          <input type="hidden" name="connect" value="<?php echo $connect; ?>">
          <input type="hidden" name="tools" value="<?php echo $tools; ?>">
          <input type="hidden" name="icalled" value="<?php echo $icalled; ?>">
          <input type="hidden" name="total" value="<?php echo $total_receber; ?>">
          <div class="form-group">
            <label>Valor do pagamento:</label>
            <input type="text" name="valor_pago" class="form-control" value="<?php echo $total1; ?>" placeholder="<?php echo $total1; ?>" disabled>
            <input type="hidden" name="valor_pago" value="<?php echo $total; ?>">
          </div>
          <div class="form-group">
            <label>Data de Pagamento:</label>
            <input type="date" name="data_paga" class="form-control" id="data_paga">
          </div>
          <div class="form-group">
            <label>Anexo da Despesa:</label>
            <input type="file" name="arquivo_pgto_repre" class="form-control" id="arquivo_pgto_repre">
          </div>
            </div>
            <div class="modal-footer">
                <a href="taxa_bancaria.php"><button class="btn btn-secondary">Cancelar</button></a>
                <?php $_SESSION['msg'] = "<p style='color:green;'>Alteração de status Cancelada !</p>"; ?>
                <input type="submit" name="pagar" id="pagar" value="Realizar Pagamento" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
<script>
$(function(){
    $('#pagar').modal('show');
});
</script>
</html>
<!--
$valor_pago = $row['valor_pago'];
$data_paga = $row['data_paga'];
-->