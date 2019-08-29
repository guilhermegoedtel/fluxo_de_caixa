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
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_conta">Adicionar Banco/Conta</button>
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
      <th>Banco</th>
      <th>Agência</th>
      <th>Operação</th>
      <th>Conta</th>
      <th>Favorecido</th>
      <th>CPF/CNPJ</th>
    </tr>  
  </thead>
  <tbody>
<?php
$result_diario = "SELECT * FROM conta";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
    ?>
    <tr>
      <td><?php echo $row_diario['banco']; ?></td>
      <td><?php echo $row_diario['agencia']; ?></td>
      <td><?php echo $row_diario['operacao']; ?></td>
      <td><?php echo $row_diario['conta']; ?></td>
      <td><?php echo $row_diario['favorecido']; ?></td>
      <td><?php echo $row_diario['cpf_cnpj']; ?></td>
    </tr>
<?php
}
?>
<tbody>
</table>
<div class="modal fade" id="add_conta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_contaLabel">Cadastrar Contas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_conta.php" method="POST">
            <div class="form-group">
                <label>Banco:</label>
                <input type="text" name="banco" id="banco" class="form-control" placeholder="Digite o Banco">
            </div>
            <div class="form-group">
                <label>Agência:</label>
                <input type="number" name="agencia" id="agencia" class="form-control" placeholder="Digite a Agência">
            </div>
            <div class="form-group">
                <label>Operação:</label>
                <select id="operacao" name="operacao" class="form-control">
                  <option value="0" selected>Selecione uma operação</option> 
                  <option value="001 – Conta Corrente de Pessoa Física">001 – Conta Corrente de Pessoa Física</option>
                  <option value="002 – Conta Simples de Pessoa Física">002 – Conta Simples de Pessoa Física</option>
                  <option value="003 – Conta Corrente de Pessoa Jurídica">003 – Conta Corrente de Pessoa Jurídica</option>
                  <option value="006 – Entidades Públicas">006 – Entidades Públicas</option>
                  <option value="007 – Depósitos Instituições Financeiras">007 – Depósitos Instituições Financeiras</option>
                  <option value="013 – Poupança de Pessoa Física">013 – Poupança de Pessoa Física</option>
                  <option value="022 – Poupança de Pessoa Jurídica">022 – Poupança de Pessoa Jurídica</option>
                  <option value="028 – Poupança de Crédito Imobiliário">028 – Poupança de Crédito Imobiliário</option>
                  <option value="043 – Depósitos Lotéricos">043 – Depósitos Lotéricos</option>
                </select>
            </div>
            <div class="form-group">
                <label>Conta:</label>
                <input type="text" name="conta" id="conta" class="form-control" placeholder="Digite a Conta">
            </div>
            <div class="form-group">
                <label>Favorecido:</label>
                <input type="text" name="favorecido" id="favorecido" class="form-control" placeholder="Digite o Favorecido">
            </div>
            <div class="form-group">
                <label>CPF/CNPJ:</label>
                <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control" placeholder="Digite o CPF/CNPJ do favorecido">
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_conta" id="add_conta" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>