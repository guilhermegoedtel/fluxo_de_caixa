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
<script type="text/javascript">
function fMasc(objeto,mascara) {
		obj=objeto
		masc=mascara
		setTimeout("fMascEx()",1)
	}
	function fMascEx() {
		obj.value=masc(obj.value)
	}
    function mTel(tel) {
		tel=tel.replace(/\D/g,"")
		tel=tel.replace(/^(\d)/,"($1")
		tel=tel.replace(/(.{3})(\d)/,"$1)$2")
		if(tel.length == 9) {
			tel=tel.replace(/(.{1})$/,"-$1")
		} else if (tel.length == 10) {
			tel=tel.replace(/(.{2})$/,"-$1")
		} else if (tel.length == 11) {
			tel=tel.replace(/(.{3})$/,"-$1")
		} else if (tel.length == 12) {
			tel=tel.replace(/(.{4})$/,"-$1")
		} else if (tel.length > 12) {
			tel=tel.replace(/(.{4})$/,"-$1")
		}
		return tel;
	}
	function mCNPJ(cnpj){
	    cnpj=cnpj.replace(/\D/g,"")
		cnpj=cnpj.replace(/^(\d{2})(\d)/,"$1.$2")
		cnpj=cnpj.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3")
		cnpj=cnpj.replace(/\.(\d{3})(\d)/,".$1/$2")
       	cnpj=cnpj.replace(/(\d{4})(\d)/,"$1-$2")
		return cnpj
	}
</script>
</script>
</head>
<body>
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_fornecedor">Adicionar Fornecedor</button>
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
      <th>Nome do Fornecedor</th>
      <th>CNPJ</th>
      <th>Endereço</th>
      <th>Número</th>
      <th>Complemento</th>
      <th>Bairro</th>
      <th>Cidade</th>
      <th>Telefone</th>
    </tr>  
  </thead>
  <tbody>
<?php
//Mexer Banco de dados
$result_diario = "SELECT * FROM fornecedor";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
    ?>
    <tr>
      <td><?php echo $row_diario['fornecedor']; ?></td>
      <td><?php echo $row_diario['cnpj']; ?></td>
      <td><?php echo $row_diario['endereco']; ?></td>
      <td><?php echo $row_diario['numero']; ?></td>
      <td><?php echo $row_diario['complemento']; ?></td>
      <td><?php echo $row_diario['bairro']; ?></td>
      <td><?php echo $row_diario['cidade']; ?></td>
      <td><?php echo $row_diario['telefone']; ?></td>
    </tr>
<?php
}
?>
<tbody>
</table>
<div class="modal fade" id="add_fornecedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_fornecedorLabel">Cadastrar Fornecedors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_fornecedor.php" method="POST">
            <div class="form-group">
                <label>Nome do Fornecedor:</label>
                <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor">
            </div>
            <div class="form-group">
                <label>CNPJ:</label>
                <input type="text" class="form-control" name="cnpj" placeholder="CNPJ" onkeydown="javascript: fMasc( this, mCNPJ );">
            </div>
            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" class="form-control" name="endereco" class="form-control" placeholder="Digite o endereço">
            </div>
            <div class="form-group">
                <label>Número:</label>
                <input type="number" class="form-control" name="numero" placeholder="Número" pattern="[0-9]+">
            </div>
            <div class="form-group">
                <label>Complemento:</label>
                <input type="text" name="complemento" class="form-control" placeholder="Digite o complemento">
            </div>
            <div class="form-group">
                <label>Bairro:</label>
                <input type="text" name="bairro" class="form-control" placeholder="Digite o bairro">
            </div>
            <div class="form-group">
                <label>Cidade:</label>
                <input type="text" name="cidade" class="form-control" placeholder="Digite a cidade">
            </div>
            <div class="form-group">
                <label>Telefone:</label>
                <input type="text" name="telefone" class="form-control" placeholder="Telefone" onkeydown="javascript: fMasc( this, mTel );">
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_fornecedor" id="add_fornecedor" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>