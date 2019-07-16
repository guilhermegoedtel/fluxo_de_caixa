<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
?>
<!Doctype html>
<head>
<meta charset="utf-8">
</head>
<body>
</body>
</html>
<?php
$result_diario = "SELECT nome_fantasia,logotipo, responsavel,telefone, created FROM cadastrar_empresa";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
    echo "Logotipo: " . $row_diario['logotipo'] . "<br>";
    echo "Nome Fantasia: " . $row_diario['nome_fantasia'] . "<br>";
    echo "Responsável: " . $row_diario['responsavel'] . "<br>";
    echo "Telefone: " . $row_diario['telefone'] . "<br>";
    echo "Data de cadastro: " . $row_diario['created'] . "<br><hr><br>";
}
?>