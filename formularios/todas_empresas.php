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
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Logotipo</th>
      <th>Nome Fantasia</th>
      <th>Responsável</th>
      <th>Telefone</th>
      <th>Data e Hora de cadastro</th>
    </tr>  
  </thead>
  <tbody>
<?php
$result_diario = "SELECT nome_fantasia,logotipo, responsavel,telefone, created FROM cadastrar_empresa";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
    ?>
    <tr>
      <td><?php echo $row_diario['logotipo']; ?></td>
      <td><?php echo $row_diario['nome_fantasia']; ?></td>
      <td><?php echo $row_diario['responsavel']; ?></td>
      <td><?php echo $row_diario['telefone']; ?></td>
      <td><?php echo $row_diario['created']; ?></td>
    </tr>
<?php
}
?>
<tbody>
</table>
</body>
</html>