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
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_representantes">Cadastra Pagamento Fonecedor</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <button type="button" class="btn btn-info" onclick="location.href='../principal.php'">Voltar</button>
            </li>
          </ul>
        </div>
    </nav>
</div>
<!-- Modificar -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Representantes</th>
      <th>Valor Planejado</th>
      <th>Data Planejada</th>
      <th>Observação</th>
      <th>Ações</th>
    </tr>  
  </thead>
  <tbody>
    <?php
    $result = mysqli_query($conn,"SELECT * FROM planejamento_representantes ORDER BY data_planejamento");
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo($row['responsavel']);?></td>
    <td>Valor: <?php echo($row['valor_planejamento']);?></td>
    <td>Data: <?php echo($row['data_planejamento']);?></td>
    <td><?php echo($row['observacao']);?></td>
    <!--<td><a href="comprovante_despesa.php?ID=<?php //echo($row['ID']); ?>"><img src="../images/anexo.png" width="64" height="64"></a></td>-->
    <td>
    <a href="pagar_taxa_representante.php?ID=<?php echo($row['ID']); ?>"><button class="btn btn-success">Pagar</button></a>
    </td>
    </tr>
    <?php
    }
    ?> 
  <tbody>
</table>
<!-- Fim Modificar -->
<div class="modal fade" id="add_representantes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_representantesLabel">Adicionar Planejamento de Representantes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_representantes.php" method="POST">
        <!--enctype="multipart/form-data"-->
            <div class="form-group">
                <label>Representante</label>
                <select name="responsavel" class="form-control" id="responsavel">
                    <option value="" selected>Selecione um representante</option>
                    <?php
                    $result = mysqli_query($conn,"SELECT responsavel FROM representante");
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php echo($row['responsavel']);?>"><?php echo($row['responsavel']);?></option>
                    <?php
                    }
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Valor Planejado:</label>
                <input type="text" name="valor_planejamento" class="form-control" id="valor_planejamento" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>Data Planejada:</label>
                <input type="date" name="data_planejamento" class="form-control" id="data_planejamento">
            </div>
            <div class="form-group">
                <label>Observação:</label>
                <textarea name="observacao" class="form-control" id="observacao" placeholder="Observação"></textarea>
            </div>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_representantes" id="add_representantes" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>