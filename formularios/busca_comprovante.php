<?php
include_once ("conectar.php");
include 'comprovante_despesa.php';
echo $id;
$result_diario = "SELECT tipo_imagem FROM historico_despesas where antigo_id='$id'";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
  $tipo = $row_diario['$tipo_imagem']; 
}
$tipo = "."."$tipo";
echo $tipo;

//header("Location: ../upload_despesa/$id$tipo");
?>