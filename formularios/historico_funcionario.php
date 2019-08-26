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
      <th>Id</th>
      <th>Colaborador</th>
      <th>Função</th>
      <th>Valor Planejado</th>
      <th>Data Planejada</th>
      <th>Valor Pago</th>
      <th>Data de pagamento</th>
      <th>Observação</th>
      <th>Comprovante</th>
    </tr>  
  </thead>
  <tbody>
    <?php
    $result = mysqli_query($conn,"SELECT * FROM historico_funcionarios");
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo($row['equipe']);?></td>
    <td><?php echo($row['funcao']);?></td>
    <td>Valor R$: <?php echo($row['valor_planejamento']);?></td>
    <td>Data: <?php echo($row['data_planejamento']);?></td>
    <td>Valor R$: <?php echo($row['valor_pago']);?></td>
    <td>Data: <?php echo($row['data_paga']);?></td>
    <td><?php echo($row['observacao']);?></td>
    <td><a href="comprovante_funcionario.php?ID=<?php echo($row['antigo_id']); ?>"><img src="../images/anexo.png" width="64" height="64"></a></td>
    </tr>
    <?php
    }
    ?> 
  <tbody>
</table>