<?php
session_start();
include_once("conectar.php");
//echo date('m');
/*Querys Taxas Bancarias*/
$result_taxas_mes_1 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-01-01' AND '2019-01-31'");
while($row = mysqli_fetch_array($result_taxas_mes_1)){
  $plane_taxas_mes_01 = $row['valor_planejamento']; //Busca no BD
  $pago_taxas_mes_01 =  $row['valor_pago']; //Busca no BD
  $plane_taxas_mes_01 = str_replace(".", "" ,$plane_taxas_mes_01);
  $plane_taxas_mes_01 = str_replace(",", "" ,$plane_taxas_mes_01);
  $pago_taxas_mes_01 = str_replace(".", "" ,$pago_taxas_mes_01);
  $pago_taxas_mes_01 = str_replace(",", "" ,$pago_taxas_mes_01);
  $guarda_plane_01 = ($plane_taxas_mes_01 + $guarda_plane_01);
  $guarda_taxas_01 = ($pago_taxas_mes_01 + $guarda_taxas_01);
  $plane_taxas_01 = number_format($guarda_plane_01/100,2,",",".");
  $pago_taxas_01 = number_format($guarda_taxas_01/100,2,",",".");
}
$result_taxas_mes_2 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-02-01' AND '2019-02-28'");
while($row = mysqli_fetch_array($result_taxas_mes_2)){
  $plane_taxas_mes_02 = $row['valor_planejamento'];
  $pago_taxas_mes_02 =  $row['valor_pago'];
  $plane_taxas_mes_02 = str_replace(".", "" ,$plane_taxas_mes_02);
  $plane_taxas_mes_02 = str_replace(",", "" ,$plane_taxas_mes_02);
  $pago_taxas_mes_02 = str_replace(".", "" ,$pago_taxas_mes_02);
  $pago_taxas_mes_02 = str_replace(",", "" ,$pago_taxas_mes_02);
  $guarda_plane_02 = ($plane_taxas_mes_02 + $guarda_plane_02);
  $guarda_taxas_02 = ($pago_taxas_mes_02 + $guarda_taxas_02);
  $plane_taxas_02 = number_format($guarda_plane_02/100,2,",",".");
  $pago_taxas_02 = number_format($guarda_taxas_02/100,2,",",".");
}
$result_taxas_mes_3 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-03-01' AND '2019-03-31'");
while($row = mysqli_fetch_array($result_taxas_mes_3)){
  $plane_taxas_mes_03 = $row['valor_planejamento'];
  $pago_taxas_mes_03 =  $row['valor_pago'];
  $plane_taxas_mes_03 = str_replace(".", "" ,$plane_taxas_mes_03);
  $plane_taxas_mes_03 = str_replace(",", "" ,$plane_taxas_mes_03);
  $pago_taxas_mes_03 = str_replace(".", "" ,$pago_taxas_mes_03);
  $pago_taxas_mes_03 = str_replace(",", "" ,$pago_taxas_mes_03);
  $guarda_plane_03 = ($plane_taxas_mes_03 + $guarda_plane_03);
  $guarda_taxas_03 = ($pago_taxas_mes_03 + $guarda_taxas_03);
  $plane_taxas_03 = number_format($guarda_plane_03/100,2,",",".");
  $pago_taxas_03 = number_format($guarda_taxas_03/100,2,",",".");
}
$result_taxas_mes_4 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-04-01' AND '2019-04-30'");
while($row = mysqli_fetch_array($result_taxas_mes_4)){
  $plane_taxas_mes_04 = $row['valor_planejamento'];
  $pago_taxas_mes_04 =  $row['valor_pago'];
  $plane_taxas_mes_04 = str_replace(".", "" ,$plane_taxas_mes_04);
  $plane_taxas_mes_04 = str_replace(",", "" ,$plane_taxas_mes_04);
  $pago_taxas_mes_04 = str_replace(".", "" ,$pago_taxas_mes_04);
  $pago_taxas_mes_04 = str_replace(",", "" ,$pago_taxas_mes_04);
  $guarda_plane_04 = ($plane_taxas_mes_04 + $guarda_plane_04);
  $guarda_taxas_04 = ($pago_taxas_mes_04 + $guarda_taxas_04);
  $plane_taxas_04 = number_format($guarda_plane_04/100,2,",",".");
  $pago_taxas_04 = number_format($guarda_taxas_04/100,2,",",".");
}
$result_taxas_mes_5 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-05-01' AND '2019-05-31'");
while($row = mysqli_fetch_array($result_taxas_mes_5)){
  $plane_taxas_mes_05 = $row['valor_planejamento'];
  $pago_taxas_mes_05 =  $row['valor_pago'];
  $plane_taxas_mes_05 = str_replace(".", "" ,$plane_taxas_mes_05);
  $plane_taxas_mes_05 = str_replace(",", "" ,$plane_taxas_mes_05);
  $pago_taxas_mes_05 = str_replace(".", "" ,$pago_taxas_mes_05);
  $pago_taxas_mes_05 = str_replace(",", "" ,$pago_taxas_mes_05);
  $guarda_plane_05 = ($plane_taxas_mes_05 + $guarda_plane_05);
  $guarda_taxas_05 = ($pago_taxas_mes_05 + $guarda_taxas_05);
  $plane_taxas_05 = number_format($guarda_plane_05/100,2,",",".");
  $pago_taxas_05 = number_format($guarda_taxas_05/100,2,",",".");
}
$result_taxas_mes_6 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-06-01' AND '2019-06-30'");
while($row = mysqli_fetch_array($result_taxas_mes_6)){
  $plane_taxas_mes_06 = $row['valor_planejamento'];
  $pago_taxas_mes_06 =  $row['valor_pago'];
  $plane_taxas_mes_06 = str_replace(".", "" ,$plane_taxas_mes_06);
  $plane_taxas_mes_06 = str_replace(",", "" ,$plane_taxas_mes_06);
  $pago_taxas_mes_06 = str_replace(".", "" ,$pago_taxas_mes_06);
  $pago_taxas_mes_06 = str_replace(",", "" ,$pago_taxas_mes_06);
  $guarda_plane_06 = ($plane_taxas_mes_06 + $guarda_plane_06);
  $guarda_taxas_06 = ($pago_taxas_mes_06 + $guarda_taxas_06);
  $plane_taxas_06 = number_format($guarda_plane_06/100,2,",",".");
  $pago_taxas_06 = number_format($guarda_taxas_06/100,2,",",".");
}
$result_taxas_mes_7 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-07-01' AND '2019-07-31'");
while($row = mysqli_fetch_array($result_taxas_mes_7)){
  $plane_taxas_mes_07 = $row['valor_planejamento'];
  $pago_taxas_mes_07 =  $row['valor_pago'];
  $plane_taxas_mes_07 = str_replace(".", "" ,$plane_taxas_mes_07);
  $plane_taxas_mes_07 = str_replace(",", "" ,$plane_taxas_mes_07);
  $pago_taxas_mes_07 = str_replace(".", "" ,$pago_taxas_mes_07);
  $pago_taxas_mes_07 = str_replace(",", "" ,$pago_taxas_mes_07);
  $guarda_plane_07 = ($plane_taxas_mes_07 + $guarda_plane_07);
  $guarda_taxas_07 = ($pago_taxas_mes_07 + $guarda_taxas_07);
  $plane_taxas_07 = number_format($guarda_plane_07/100,2,",",".");
  $pago_taxas_07 = number_format($guarda_taxas_07/100,2,",",".");
}
$result_taxas_mes_8 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-08-01' AND '2019-08-31'");
while($row = mysqli_fetch_array($result_taxas_mes_8)){
  $plane_taxas_mes_08 = $row['valor_planejamento'];
  $pago_taxas_mes_08 =  $row['valor_pago'];
  $plane_taxas_mes_08 = str_replace(".", "" ,$plane_taxas_mes_08);
  $plane_taxas_mes_08 = str_replace(",", "" ,$plane_taxas_mes_08);
  $pago_taxas_mes_08 = str_replace(".", "" ,$pago_taxas_mes_08);
  $pago_taxas_mes_08 = str_replace(",", "" ,$pago_taxas_mes_08);
  $guarda_plane_08 = ($plane_taxas_mes_08 + $guarda_plane_08);
  $guarda_taxas_08 = ($pago_taxas_mes_08 + $guarda_taxas_08);
  $plane_taxas_08 = number_format($guarda_plane_08/100,2,",",".");
  $pago_taxas_08 = number_format($guarda_taxas_08/100,2,",",".");
}
$result_taxas_mes_9 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-09-01' AND '2019-09-30'");
while($row = mysqli_fetch_array($result_taxas_mes_9)){
  $plane_taxas_mes_09 = $row['valor_planejamento'];
  $pago_taxas_mes_09 =  $row['valor_pago'];
  $plane_taxas_mes_09 = str_replace(".", "" ,$plane_taxas_mes_09);
  $plane_taxas_mes_09 = str_replace(",", "" ,$plane_taxas_mes_09);
  $pago_taxas_mes_09 = str_replace(".", "" ,$pago_taxas_mes_09);
  $pago_taxas_mes_09 = str_replace(",", "" ,$pago_taxas_mes_09);
  $guarda_plane_09 = ($plane_taxas_mes_09 + $guarda_plane_09);
  $guarda_taxas_09 = ($pago_taxas_mes_09 + $guarda_taxas_09);
  $plane_taxas_09 = number_format($guarda_plane_09/100,2,",",".");
  $pago_taxas_09 = number_format($guarda_taxas_09/100,2,",",".");
}
$result_taxas_mes_10 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-10-01' AND '2019-10-31'");
while($row = mysqli_fetch_array($result_taxas_mes_10)){
  $plane_taxas_mes_10 = $row['valor_planejamento'];
  $pago_taxas_mes_10 =  $row['valor_pago'];
  $plane_taxas_mes_10 = str_replace(".", "" ,$plane_taxas_mes_10);
  $plane_taxas_mes_10 = str_replace(",", "" ,$plane_taxas_mes_10);
  $pago_taxas_mes_10 = str_replace(".", "" ,$pago_taxas_mes_10);
  $pago_taxas_mes_10 = str_replace(",", "" ,$pago_taxas_mes_10);
  $guarda_plane_10 = ($plane_taxas_mes_10 + $guarda_plane_10);
  $guarda_taxas_10 = ($pago_taxas_mes_10 + $guarda_taxas_10);
  $plane_taxas_10 = number_format($guarda_plane_10/100,2,",",".");
  $pago_taxas_10 = number_format($guarda_taxas_10/100,2,",",".");
}
$result_taxas_mes_11 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-11-01' AND '2019-11-30'");
while($row = mysqli_fetch_array($result_taxas_mes_11)){
  $plane_taxas_mes_11 = $row['valor_planejamento'];
  $pago_taxas_mes_11 =  $row['valor_pago'];
  $plane_taxas_mes_11 = str_replace(".", "" ,$plane_taxas_mes_11);
  $plane_taxas_mes_11 = str_replace(",", "" ,$plane_taxas_mes_11);
  $pago_taxas_mes_11 = str_replace(".", "" ,$pago_taxas_mes_11);
  $pago_taxas_mes_11 = str_replace(",", "" ,$pago_taxas_mes_11);
  $guarda_plane_11 = ($plane_taxas_mes_11 + $guarda_plane_11);
  $guarda_taxas_11 = ($pago_taxas_mes_11 + $guarda_taxas_11);
  $plane_taxas_11 = number_format($guarda_plane_11/100,2,",",".");
  $pago_taxas_11 = number_format($guarda_taxas_11/100,2,",",".");
}
$result_taxas_mes_12 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_taxas WHERE data_paga BETWEEN '2019-12-01' AND '2019-12-31'");
while($row = mysqli_fetch_array($result_taxas_mes_12)){
  $plane_taxas_mes_12 = $row['valor_planejamento'];
  $pago_taxas_mes_12 =  $row['valor_pago'];
  $plane_taxas_mes_12 = str_replace(".", "" ,$plane_taxas_mes_12);
  $plane_taxas_mes_12 = str_replace(",", "" ,$plane_taxas_mes_12);
  $pago_taxas_mes_12 = str_replace(".", "" ,$pago_taxas_mes_12);
  $pago_taxas_mes_12 = str_replace(",", "" ,$pago_taxas_mes_12);
  $guarda_plane_12 = ($plane_taxas_mes_12 + $guarda_plane_12);
  $guarda_taxas_12 = ($pago_taxas_mes_12 + $guarda_taxas_12);
  $plane_taxas_12 = number_format($guarda_plane_12/100,2,",",".");
  $pago_taxas_12 = number_format($guarda_taxas_12/100,2,",",".");
}
/*Fim Querys Taxas Bancarias*/
?>
<?php
/*Querys Impostos/Encargos*/
$result_impostos_mes_1 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-01-01' AND '2019-01-31'");
while($row = mysqli_fetch_array($result_impostos_mes_1)){
  $plane_impostos_mes_01 = $row['valor_planejamento'];
  $pago_impostos_mes_01 =  $row['valor_pago'];
  $plane_impostos_mes_01 = str_replace(".", "" ,$plane_impostos_mes_01);
  $plane_impostos_mes_01 = str_replace(",", "" ,$plane_impostos_mes_01);
  $pago_impostos_mes_01 = str_replace(".", "" ,$pago_impostos_mes_01);
  $pago_impostos_mes_01 = str_replace(",", "" ,$pago_impostos_mes_01);
  $guarda_impostos_01 = ($plane_impostos_mes_01 + $guarda_impostos_01);
  $guarda_pago_impostos_01 = ($pago_impostos_mes_01 + $guarda_pago_impostos_01);
  $plane_impostos_01 = number_format($guarda_impostos_01/100,2,",",".");
  $pago_impostos_01 = number_format($guarda_pago_impostos_01/100,2,",",".");
}
$result_impostos_mes_2 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-02-01' AND '2019-02-28'");
while($row = mysqli_fetch_array($result_impostos_mes_2)){
  $plane_impostos_mes_02 = $row['valor_planejamento'];
  $pago_impostos_mes_02 =  $row['valor_pago'];
  $plane_impostos_mes_02 = str_replace(".", "" ,$plane_impostos_mes_02);
  $plane_impostos_mes_02 = str_replace(",", "" ,$plane_impostos_mes_02);
  $pago_impostos_mes_02 = str_replace(".", "" ,$pago_impostos_mes_02);
  $pago_impostos_mes_02 = str_replace(",", "" ,$pago_impostos_mes_02);
  $guarda_impostos_02 = ($plane_impostos_mes_01 + $guarda_impostos_02);
  $guarda_pago_impostos_02 = ($pago_impostos_mes_02 + $guarda_pago_impostos_02);
  $plane_impostos_02 = number_format($guarda_impostos_02/100,2,",",".");
  $pago_impostos_02 = number_format($guarda_pago_impostos_02/100,2,",",".");
}
$result_impostos_mes_3 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-03-01' AND '2019-03-31'");
while($row = mysqli_fetch_array($result_impostos_mes_3)){
  $plane_impostos_mes_03 = $row['valor_planejamento'];
  $pago_impostos_mes_03 =  $row['valor_pago'];
  $plane_impostos_mes_03 = str_replace(".", "" ,$plane_impostos_mes_03);
  $plane_impostos_mes_03 = str_replace(",", "" ,$plane_impostos_mes_03);
  $pago_impostos_mes_03 = str_replace(".", "" ,$pago_impostos_mes_03);
  $pago_impostos_mes_03 = str_replace(",", "" ,$pago_impostos_mes_03);
  $guarda_impostos_03 = ($plane_impostos_mes_03 + $guarda_impostos_03);
  $guarda_pago_impostos_03 = ($pago_impostos_mes_03 + $guarda_pago_impostos_03);
  $plane_impostos_03 = number_format($guarda_impostos_03/100,2,",",".");
  $pago_impostos_03 = number_format($guarda_pago_impostos_03/100,2,",",".");
}
$result_impostos_mes_4 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-04-01' AND '2019-04-30'");
while($row = mysqli_fetch_array($result_impostos_mes_4)){
  $plane_impostos_mes_04 = $row['valor_planejamento'];
  $pago_impostos_mes_04 =  $row['valor_pago'];
  $plane_impostos_mes_04 = str_replace(".", "" ,$plane_impostos_mes_04);
  $plane_impostos_mes_04 = str_replace(",", "" ,$plane_impostos_mes_04);
  $pago_impostos_mes_04 = str_replace(".", "" ,$pago_impostos_mes_04);
  $pago_impostos_mes_04 = str_replace(",", "" ,$pago_impostos_mes_04);
  $guarda_impostos_04 = ($plane_impostos_mes_04 + $guarda_impostos_04);
  $guarda_pago_impostos_04 = ($pago_impostos_mes_04 + $guarda_pago_impostos_04);
  $plane_impostos_04 = number_format($guarda_impostos_04/100,2,",",".");
  $pago_impostos_04 = number_format($guarda_pago_impostos_04/100,2,",",".");
}
$result_impostos_mes_5 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-05-01' AND '2019-05-31'");
while($row = mysqli_fetch_array($result_impostos_mes_5)){
  $plane_impostos_mes_05 = $row['valor_planejamento'];
  $pago_impostos_mes_05 =  $row['valor_pago'];
  $plane_impostos_mes_05 = str_replace(".", "" ,$plane_impostos_mes_05);
  $plane_impostos_mes_05 = str_replace(",", "" ,$plane_impostos_mes_05);
  $pago_impostos_mes_05 = str_replace(".", "" ,$pago_impostos_mes_05);
  $pago_impostos_mes_05 = str_replace(",", "" ,$pago_impostos_mes_05);
  $guarda_impostos_05 = ($plane_impostos_mes_05 + $guarda_impostos_05);
  $guarda_pago_impostos_05 = ($pago_impostos_mes_05 + $guarda_pago_impostos_05);
  $plane_impostos_05 = number_format($guarda_impostos_05/100,2,",",".");
  $pago_impostos_05 = number_format($guarda_pago_impostos_05/100,2,",",".");
}
$result_impostos_mes_6 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-06-01' AND '2019-06-30'");
while($row = mysqli_fetch_array($result_impostos_mes_6)){
  $plane_impostos_mes_06 = $row['valor_planejamento'];
  $pago_impostos_mes_06 =  $row['valor_pago'];
  $plane_impostos_mes_06 = str_replace(".", "" ,$plane_impostos_mes_06);
  $plane_impostos_mes_06 = str_replace(",", "" ,$plane_impostos_mes_06);
  $pago_impostos_mes_06 = str_replace(".", "" ,$pago_impostos_mes_06);
  $pago_impostos_mes_06 = str_replace(",", "" ,$pago_impostos_mes_06);
  $guarda_impostos_06 = ($plane_impostos_mes_06 + $guarda_impostos_06);
  $guarda_pago_impostos_06 = ($pago_impostos_mes_06 + $guarda_pago_impostos_06);
  $plane_impostos_06 = number_format($guarda_impostos_06/100,2,",",".");
  $pago_impostos_06 = number_format($guarda_pago_impostos_06/100,2,",",".");
}
$result_impostos_mes_7 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-07-01' AND '2019-07-31'");
while($row = mysqli_fetch_array($result_impostos_mes_7)){
  $plane_impostos_mes_07 = $row['valor_planejamento'];
  $pago_impostos_mes_07 =  $row['valor_pago'];
  $plane_impostos_mes_07 = str_replace(".", "" ,$plane_impostos_mes_07);
  $plane_impostos_mes_07 = str_replace(",", "" ,$plane_impostos_mes_07);
  $pago_impostos_mes_07 = str_replace(".", "" ,$pago_impostos_mes_07);
  $pago_impostos_mes_07 = str_replace(",", "" ,$pago_impostos_mes_07);
  $guarda_impostos_07 = ($plane_impostos_mes_07 + $guarda_impostos_07);
  $guarda_pago_impostos_07 = ($pago_impostos_mes_07 + $guarda_pago_impostos_07);
  $plane_impostos_07 = number_format($guarda_impostos_07/100,2,",",".");
  $pago_impostos_07 = number_format($guarda_pago_impostos_07/100,2,",",".");
}
$result_impostos_mes_8 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-08-01' AND '2019-08-31'");
while($row = mysqli_fetch_array($result_impostos_mes_8)){
  $plane_impostos_mes_08 = $row['valor_planejamento'];
  $pago_impostos_mes_08 =  $row['valor_pago'];
  $plane_impostos_mes_08 = str_replace(".", "" ,$plane_impostos_mes_08);
  $plane_impostos_mes_08 = str_replace(",", "" ,$plane_impostos_mes_08);
  $pago_impostos_mes_08 = str_replace(".", "" ,$pago_impostos_mes_08);
  $pago_impostos_mes_08 = str_replace(",", "" ,$pago_impostos_mes_08);
  $guarda_impostos_08 = ($plane_impostos_mes_08 + $guarda_impostos_08);
  $guarda_pago_impostos_08 = ($pago_impostos_mes_08 + $guarda_pago_impostos_08);
  $plane_impostos_08 = number_format($guarda_impostos_08/100,2,",",".");
  $pago_impostos_08 = number_format($guarda_pago_impostos_08/100,2,",",".");
}
$result_impostos_mes_9 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-09-01' AND '2019-09-30'");
while($row = mysqli_fetch_array($result_impostos_mes_9)){
  $plane_impostos_mes_09 = $row['valor_planejamento'];
  $pago_impostos_mes_09 =  $row['valor_pago'];
  $plane_impostos_mes_09 = str_replace(".", "" ,$plane_impostos_mes_09);
  $plane_impostos_mes_09 = str_replace(",", "" ,$plane_impostos_mes_09);
  $pago_impostos_mes_09 = str_replace(".", "" ,$pago_impostos_mes_09);
  $pago_impostos_mes_09 = str_replace(",", "" ,$pago_impostos_mes_09);
  $guarda_impostos_09 = ($plane_impostos_mes_09 + $guarda_impostos_09);
  $guarda_pago_impostos_09 = ($pago_impostos_mes_09 + $guarda_pago_impostos_09);
  $plane_impostos_09 = number_format($guarda_impostos_09/100,2,",",".");
  $pago_impostos_09 = number_format($guarda_pago_impostos_09/100,2,",",".");
}
$result_impostos_mes_10 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-10-01' AND '2019-10-31'");
while($row = mysqli_fetch_array($result_impostos_mes_10)){
  $plane_impostos_mes_10 = $row['valor_planejamento'];
  $pago_impostos_mes_10 =  $row['valor_pago'];
  $plane_impostos_mes_10 = str_replace(".", "" ,$plane_impostos_mes_10);
  $plane_impostos_mes_10 = str_replace(",", "" ,$plane_impostos_mes_10);
  $pago_impostos_mes_10 = str_replace(".", "" ,$pago_impostos_mes_10);
  $pago_impostos_mes_10 = str_replace(",", "" ,$pago_impostos_mes_10);
  $guarda_impostos_10 = ($plane_impostos_mes_10 + $guarda_impostos_10);
  $guarda_pago_impostos_10 = ($pago_impostos_mes_10 + $guarda_pago_impostos_10);
  $plane_impostos_10 = number_format($guarda_impostos_10/100,2,",",".");
  $pago_impostos_10 = number_format($guarda_pago_impostos_10/100,2,",",".");
}
$result_impostos_mes_11 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-11-01' AND '2019-11-30'");
while($row = mysqli_fetch_array($result_impostos_mes_11)){
  $plane_impostos_mes_11 = $row['valor_planejamento'];
  $pago_impostos_mes_11 =  $row['valor_pago'];
  $plane_impostos_mes_11 = str_replace(".", "" ,$plane_impostos_mes_11);
  $plane_impostos_mes_11 = str_replace(",", "" ,$plane_impostos_mes_11);
  $pago_impostos_mes_11 = str_replace(".", "" ,$pago_impostos_mes_11);
  $pago_impostos_mes_11 = str_replace(",", "" ,$pago_impostos_mes_11);
  $guarda_impostos_11 = ($plane_impostos_mes_11 + $guarda_impostos_11);
  $guarda_pago_impostos_11 = ($pago_impostos_mes_11 + $guarda_pago_impostos_11);
  $plane_impostos_11 = number_format($guarda_impostos_11/100,2,",",".");
  $pago_impostos_11 = number_format($guarda_pago_impostos_11/100,2,",",".");
}
$result_impostos_mes_12 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_planejamento_impostos WHERE data_paga BETWEEN '2019-12-01' AND '2019-12-31'");
while($row = mysqli_fetch_array($result_impostos_mes_12)){
  $plane_impostos_mes_12 = $row['valor_planejamento'];
  $pago_impostos_mes_12 =  $row['valor_pago'];
  $plane_impostos_mes_12 = str_replace(".", "" ,$plane_impostos_mes_12);
  $plane_impostos_mes_12 = str_replace(",", "" ,$plane_impostos_mes_12);
  $pago_impostos_mes_12 = str_replace(".", "" ,$pago_impostos_mes_12);
  $pago_impostos_mes_12 = str_replace(",", "" ,$pago_impostos_mes_12);
  $guarda_impostos_12 = ($plane_impostos_mes_12 + $guarda_impostos_12);
  $guarda_pago_impostos_12 = ($pago_impostos_mes_12 + $guarda_pago_impostos_12);
  $plane_impostos_12 = number_format($guarda_impostos_12/100,2,",",".");
  $pago_impostos_12 = number_format($guarda_pago_impostos_12/100,2,",",".");
}
/*Fim Querys Impostos/Encargos*/
?>
<?php
/*Inicio Das Querys Despesas*/
$result_desp_mes_1 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-01-01' AND '2019-01-31'");
while($row = mysqli_fetch_array($result_desp_mes_1)){
  $plane_desp_mes_01 = $row['valor_planejamento'];
  $pago_desp_mes_01 =  $row['valor_pago'];
  $plane_desp_mes_01 = str_replace(".", "" ,$plane_desp_mes_01);
  $plane_desp_mes_01 = str_replace(",", "" ,$plane_desp_mes_01);
  $pago_desp_mes_01 = str_replace(".", "" ,$pago_desp_mes_01);
  $pago_desp_mes_01 = str_replace(",", "" ,$pago_desp_mes_01);
  $guarda_desp_01 = ($plane_desp_mes_01 + $guarda_desp_01);
  $guarda_pago_desp_01 = ($pago_desp_mes_01 + $guarda_pago_desp_01);
  $plane_desp_01 = number_format($guarda_desp_01/100,2,",",".");
  $pago_desp_01 = number_format($guarda_pago_desp_01/100,2,",",".");
}
$result_desp_mes_2 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-02-01' AND '2019-02-28'");
while($row = mysqli_fetch_array($result_desp_mes_2)){
  $plane_desp_mes_02 = $row['valor_planejamento'];
  $pago_desp_mes_02 =  $row['valor_pago'];
  $plane_desp_mes_02 = str_replace(".", "" ,$plane_desp_mes_02);
  $plane_desp_mes_02 = str_replace(",", "" ,$plane_desp_mes_02);
  $pago_desp_mes_02 = str_replace(".", "" ,$pago_desp_mes_02);
  $pago_desp_mes_02 = str_replace(",", "" ,$pago_desp_mes_02);
  $guarda_desp_02 = ($plane_desp_mes_02 + $guarda_desp_02);
  $guarda_pago_desp_02 = ($pago_desp_mes_02 + $guarda_pago_desp_02);
  $plane_desp_02 = number_format($guarda_desp_02/100,2,",",".");
  $pago_desp_02 = number_format($guarda_pago_desp_02/100,2,",",".");
}
$result_desp_mes_3 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-03-01' AND '2019-03-31'");
while($row = mysqli_fetch_array($result_desp_mes_3)){
  $plane_desp_mes_03 = $row['valor_planejamento'];
  $pago_desp_mes_03 =  $row['valor_pago'];
  $plane_desp_mes_03 = str_replace(".", "" ,$plane_desp_mes_03);
  $plane_desp_mes_03 = str_replace(",", "" ,$plane_desp_mes_03);
  $pago_desp_mes_03 = str_replace(".", "" ,$pago_desp_mes_03);
  $pago_desp_mes_03 = str_replace(",", "" ,$pago_desp_mes_03);
  $guarda_desp_03 = ($plane_desp_mes_03 + $guarda_desp_03);
  $guarda_pago_desp_03 = ($pago_desp_mes_03 + $guarda_pago_desp_03);
  $plane_desp_03 = number_format($guarda_desp_03/100,2,",",".");
  $pago_desp_03 = number_format($guarda_pago_desp_03/100,2,",",".");
}
$result_desp_mes_4 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-04-01' AND '2019-04-30'");
while($row = mysqli_fetch_array($result_desp_mes_4)){
  $plane_desp_mes_04 = $row['valor_planejamento'];
  $pago_desp_mes_04 =  $row['valor_pago'];
  $plane_desp_mes_04 = str_replace(".", "" ,$plane_desp_mes_04);
  $plane_desp_mes_04 = str_replace(",", "" ,$plane_desp_mes_04);
  $pago_desp_mes_04 = str_replace(".", "" ,$pago_desp_mes_04);
  $pago_desp_mes_04 = str_replace(",", "" ,$pago_desp_mes_04);
  $guarda_desp_04 = ($plane_desp_mes_04 + $guarda_desp_04);
  $guarda_pago_desp_04 = ($pago_desp_mes_04 + $guarda_pago_desp_04);
  $plane_desp_04 = number_format($guarda_desp_04/100,2,",",".");
  $pago_desp_04 = number_format($guarda_pago_desp_04/100,2,",",".");
}
$result_desp_mes_5 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-05-01' AND '2019-05-31'");
while($row = mysqli_fetch_array($result_desp_mes_5)){
  $plane_desp_mes_05 = $row['valor_planejamento'];
  $pago_desp_mes_05 =  $row['valor_pago'];
  $plane_desp_mes_05 = str_replace(".", "" ,$plane_desp_mes_05);
  $plane_desp_mes_05 = str_replace(",", "" ,$plane_desp_mes_05);
  $pago_desp_mes_05 = str_replace(".", "" ,$pago_desp_mes_05);
  $pago_desp_mes_05 = str_replace(",", "" ,$pago_desp_mes_05);
  $guarda_desp_05 = ($plane_desp_mes_05 + $guarda_desp_05);
  $guarda_pago_desp_05 = ($pago_desp_mes_05 + $guarda_pago_desp_05);
  $plane_desp_05 = number_format($guarda_desp_05/100,2,",",".");
  $pago_desp_05 = number_format($guarda_pago_desp_05/100,2,",",".");
}
$result_desp_mes_6 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-06-01' AND '2019-06-30'");
while($row = mysqli_fetch_array($result_desp_mes_6)){
  $plane_desp_mes_06 = $row['valor_planejamento'];
  $pago_desp_mes_06 =  $row['valor_pago'];
  $plane_desp_mes_06 = str_replace(".", "" ,$plane_desp_mes_06);
  $plane_desp_mes_06 = str_replace(",", "" ,$plane_desp_mes_06);
  $pago_desp_mes_06 = str_replace(".", "" ,$pago_desp_mes_06);
  $pago_desp_mes_06 = str_replace(",", "" ,$pago_desp_mes_06);
  $guarda_desp_06 = ($plane_desp_mes_06 + $guarda_desp_06);
  $guarda_pago_desp_06 = ($pago_desp_mes_06 + $guarda_pago_desp_06);
  $plane_desp_06 = number_format($guarda_desp_06/100,2,",",".");
  $pago_desp_06 = number_format($guarda_pago_desp_06/100,2,",",".");
}
$result_desp_mes_7 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-07-01' AND '2019-07-31'");
while($row = mysqli_fetch_array($result_desp_mes_7)){
  $plane_desp_mes_07 = $row['valor_planejamento'];
  $pago_desp_mes_07 =  $row['valor_pago'];
  $plane_desp_mes_07 = str_replace(".", "" ,$plane_desp_mes_07);
  $plane_desp_mes_07 = str_replace(",", "" ,$plane_desp_mes_07);
  $pago_desp_mes_07 = str_replace(".", "" ,$pago_desp_mes_07);
  $pago_desp_mes_07 = str_replace(",", "" ,$pago_desp_mes_07);
  $guarda_desp_07 = ($plane_desp_mes_07 + $guarda_desp_07);
  $guarda_pago_desp_07 = ($pago_desp_mes_07 + $guarda_pago_desp_07);
  $plane_desp_07 = number_format($guarda_desp_07/100,2,",",".");
  $pago_desp_07 = number_format($guarda_pago_desp_07/100,2,",",".");
}
$result_desp_mes_8 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-08-01' AND '2019-08-31'");
while($row = mysqli_fetch_array($result_desp_mes_8)){
  $plane_desp_mes_08 = $row['valor_planejamento'];
  $pago_desp_mes_08 =  $row['valor_pago'];
  $plane_desp_mes_08 = str_replace(".", "" ,$plane_desp_mes_08);
  $plane_desp_mes_08 = str_replace(",", "" ,$plane_desp_mes_08);
  $pago_desp_mes_08 = str_replace(".", "" ,$pago_desp_mes_08);
  $pago_desp_mes_08 = str_replace(",", "" ,$pago_desp_mes_08);
  $guarda_desp_08 = ($plane_desp_mes_08 + $guarda_desp_08);
  $guarda_pago_desp_08 = ($pago_desp_mes_08 + $guarda_pago_desp_08);
  $plane_desp_08 = number_format($guarda_desp_08/100,2,",",".");
  $pago_desp_08 = number_format($guarda_pago_desp_08/100,2,",",".");
}
$result_func_mes_9 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-09-01' AND '2019-09-30'");
while($row = mysqli_fetch_array($result_func_mes_9)){
  $plane_func_mes_09 = $row['valor_planejamento'];
  $pago_func_mes_09 =  $row['valor_pago'];
  $plane_desp_mes_09 = str_replace(".", "" ,$plane_desp_mes_09);
  $plane_desp_mes_09 = str_replace(",", "" ,$plane_desp_mes_09);
  $pago_desp_mes_09 = str_replace(".", "" ,$pago_desp_mes_09);
  $pago_desp_mes_09 = str_replace(",", "" ,$pago_desp_mes_09);
  $guarda_desp_09 = ($plane_desp_mes_09 + $guarda_desp_09);
  $guarda_pago_desp_09 = ($pago_desp_mes_09 + $guarda_pago_desp_09);
  $plane_desp_09 = number_format($guarda_desp_09/100,2,",",".");
  $pago_desp_09 = number_format($guarda_pago_desp_09/100,2,",",".");
}
$result_desp_mes_10 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-10-01' AND '2019-10-31'");
while($row = mysqli_fetch_array($result_desp_mes_10)){
  $plane_desp_mes_10 = $row['valor_planejamento'];
  $pago_desp_mes_10 =  $row['valor_pago'];
  $plane_desp_mes_10 = str_replace(".", "" ,$plane_desp_mes_10);
  $plane_desp_mes_10 = str_replace(",", "" ,$plane_desp_mes_10);
  $pago_desp_mes_10 = str_replace(".", "" ,$pago_desp_mes_10);
  $pago_desp_mes_10 = str_replace(",", "" ,$pago_desp_mes_10);
  $guarda_desp_10 = ($plane_desp_mes_10 + $guarda_desp_10);
  $guarda_pago_desp_10 = ($pago_desp_mes_10 + $guarda_pago_desp_10);
  $plane_desp_10 = number_format($guarda_desp_10/100,2,",",".");
  $pago_desp_10 = number_format($guarda_pago_desp_10/100,2,",",".");
}
$result_desp_mes_11 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-11-01' AND '2019-11-30'");
while($row = mysqli_fetch_array($result_desp_mes_11)){
  $plane_desp_mes_11 = $row['valor_planejamento'];
  $pago_desp_mes_11 =  $row['valor_pago'];
  $plane_desp_mes_11 = str_replace(".", "" ,$plane_desp_mes_11);
  $plane_desp_mes_11 = str_replace(",", "" ,$plane_desp_mes_11);
  $pago_desp_mes_11 = str_replace(".", "" ,$pago_desp_mes_11);
  $pago_desp_mes_11 = str_replace(",", "" ,$pago_desp_mes_11);
  $guarda_desp_11 = ($plane_desp_mes_11 + $guarda_desp_11);
  $guarda_pago_desp_11 = ($pago_desp_mes_11 + $guarda_pago_desp_11);
  $plane_desp_11 = number_format($guarda_desp_11/100,2,",",".");
  $pago_desp_11 = number_format($guarda_pago_desp_11/100,2,",",".");
}
$result_desp_mes_12 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_despesas WHERE data_paga BETWEEN '2019-12-01' AND '2019-12-31'");
while($row = mysqli_fetch_array($result_desp_mes_12)){
  $plane_desp_mes_12 = $row['valor_planejamento'];
  $pago_desp_mes_12 =  $row['valor_pago'];
  $plane_desp_mes_12 = str_replace(".", "" ,$plane_desp_mes_12);
  $plane_desp_mes_12 = str_replace(",", "" ,$plane_desp_mes_12);
  $pago_desp_mes_12 = str_replace(".", "" ,$pago_desp_mes_12);
  $pago_desp_mes_12 = str_replace(",", "" ,$pago_desp_mes_12);
  $guarda_desp_12 = ($plane_desp_mes_12 + $guarda_desp_12);
  $guarda_pago_desp_12 = ($pago_desp_mes_12 + $guarda_pago_desp_12);
  $plane_desp_12 = number_format($guarda_desp_12/100,2,",",".");
  $pago_desp_12 = number_format($guarda_pago_desp_12/100,2,",",".");
}
/*Fim Das Querys Despesas*/
?>
<?php
/*Inicio Das Querys Fornecedores*/
$result_forn_mes_1 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-01-01' AND '2019-01-31'");
while($row = mysqli_fetch_array($result_forn_mes_1)){
  $plane_forn_mes_01 = $row['valor_planejamento'];
  $pago_forn_mes_01 =  $row['valor_pago'];
  $plane_forn_mes_01 = str_replace(".", "" ,$plane_forn_mes_01);
  $plane_forn_mes_01 = str_replace(",", "" ,$plane_forn_mes_01);
  $pago_forn_mes_01 = str_replace(".", "" ,$pago_forn_mes_01);
  $pago_forn_mes_01 = str_replace(",", "" ,$pago_forn_mes_01);
  $guarda_forn_01 = ($plane_forn_mes_01 + $guarda_forn_01);
  $guarda_pago_forn_01 = ($pago_forn_mes_01 + $guarda_pago_forn_01);
  $plane_forn_01 = number_format($guarda_forn_01/100,2,",",".");
  $pago_forn_01 = number_format($guarda_pago_forn_01/100,2,",",".");
}
$result_forn_mes_2 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-02-01' AND '2019-02-28'");
while($row = mysqli_fetch_array($result_forn_mes_2)){
  $plane_forn_mes_02 = $row['valor_planejamento'];
  $pago_forn_mes_02 =  $row['valor_pago'];
  $plane_forn_mes_02 = str_replace(".", "" ,$plane_forn_mes_02);
  $plane_forn_mes_02 = str_replace(",", "" ,$plane_forn_mes_02);
  $pago_forn_mes_02 = str_replace(".", "" ,$pago_forn_mes_02);
  $pago_forn_mes_02 = str_replace(",", "" ,$pago_forn_mes_02);
  $guarda_forn_02 = ($plane_forn_mes_02 + $guarda_forn_02);
  $guarda_pago_forn_02 = ($pago_forn_mes_02 + $guarda_pago_forn_02);
  $plane_forn_02 = number_format($guarda_forn_02/100,2,",",".");
  $pago_forn_02 = number_format($guarda_pago_forn_02/100,2,",",".");
}
$result_forn_mes_3 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-03-01' AND '2019-03-31'");
while($row = mysqli_fetch_array($result_forn_mes_3)){
  $plane_forn_mes_03 = $row['valor_planejamento'];
  $pago_forn_mes_03 =  $row['valor_pago'];
  $plane_forn_mes_03 = str_replace(".", "" ,$plane_forn_mes_03);
  $plane_forn_mes_03 = str_replace(",", "" ,$plane_forn_mes_03);
  $pago_forn_mes_03 = str_replace(".", "" ,$pago_forn_mes_03);
  $pago_forn_mes_03 = str_replace(",", "" ,$pago_forn_mes_03);
  $guarda_forn_03 = ($plane_forn_mes_03 + $guarda_forn_03);
  $guarda_pago_forn_03 = ($pago_forn_mes_03 + $guarda_pago_forn_03);
  $plane_forn_03 = number_format($guarda_forn_03/100,2,",",".");
  $pago_forn_03 = number_format($guarda_pago_forn_03/100,2,",",".");
}
$result_forn_mes_4 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-04-01' AND '2019-04-30'");
while($row = mysqli_fetch_array($result_forn_mes_4)){
  $plane_forn_mes_04 = $row['valor_planejamento'];
  $pago_forn_mes_04 =  $row['valor_pago'];
  $plane_forn_mes_04 = str_replace(".", "" ,$plane_forn_mes_04);
  $plane_forn_mes_04 = str_replace(",", "" ,$plane_forn_mes_04);
  $pago_forn_mes_04 = str_replace(".", "" ,$pago_forn_mes_04);
  $pago_forn_mes_04 = str_replace(",", "" ,$pago_forn_mes_04);
  $guarda_forn_04 = ($plane_forn_mes_04 + $guarda_forn_04);
  $guarda_pago_forn_04 = ($pago_forn_mes_04 + $guarda_pago_forn_04);
  $plane_forn_04 = number_format($guarda_forn_04/100,2,",",".");
  $pago_forn_04 = number_format($guarda_pago_forn_04/100,2,",",".");
}
$result_forn_mes_5 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-05-01' AND '2019-05-31'");
while($row = mysqli_fetch_array($result_forn_mes_5)){
  $plane_forn_mes_05 = $row['valor_planejamento'];
  $pago_forn_mes_05 =  $row['valor_pago'];
  $plane_forn_mes_05 = str_replace(".", "" ,$plane_forn_mes_05);
  $plane_forn_mes_05 = str_replace(",", "" ,$plane_forn_mes_05);
  $pago_forn_mes_05 = str_replace(".", "" ,$pago_forn_mes_05);
  $pago_forn_mes_05 = str_replace(",", "" ,$pago_forn_mes_05);
  $guarda_forn_05 = ($plane_forn_mes_05 + $guarda_forn_05);
  $guarda_pago_forn_05 = ($pago_forn_mes_05 + $guarda_pago_forn_05);
  $plane_forn_05 = number_format($guarda_forn_05/100,2,",",".");
  $pago_forn_05 = number_format($guarda_pago_forn_05/100,2,",",".");
}
$result_forn_mes_6 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-06-01' AND '2019-06-30'");
while($row = mysqli_fetch_array($result_forn_mes_6)){
  $plane_forn_mes_06 = $row['valor_planejamento'];
  $pago_forn_mes_06 =  $row['valor_pago'];
  $plane_forn_mes_06 = str_replace(".", "" ,$plane_forn_mes_06);
  $plane_forn_mes_06 = str_replace(",", "" ,$plane_forn_mes_06);
  $pago_forn_mes_06 = str_replace(".", "" ,$pago_forn_mes_06);
  $pago_forn_mes_06 = str_replace(",", "" ,$pago_forn_mes_06);
  $guarda_forn_06 = ($plane_forn_mes_06 + $guarda_forn_06);
  $guarda_pago_forn_06 = ($pago_forn_mes_06 + $guarda_pago_forn_06);
  $plane_forn_06 = number_format($guarda_forn_06/100,2,",",".");
  $pago_forn_06 = number_format($guarda_pago_forn_06/100,2,",",".");
}
$result_forn_mes_7 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-07-01' AND '2019-07-31'");
while($row = mysqli_fetch_array($result_forn_mes_7)){
  $plane_forn_mes_07 = $row['valor_planejamento'];
  $pago_forn_mes_07 =  $row['valor_pago'];
  $plane_forn_mes_07 = str_replace(".", "" ,$plane_forn_mes_07);
  $plane_forn_mes_07 = str_replace(",", "" ,$plane_forn_mes_07);
  $pago_forn_mes_07 = str_replace(".", "" ,$pago_forn_mes_07);
  $pago_forn_mes_07 = str_replace(",", "" ,$pago_forn_mes_07);
  $guarda_forn_07 = ($plane_forn_mes_07 + $guarda_forn_07);
  $guarda_pago_forn_07 = ($pago_forn_mes_07 + $guarda_pago_forn_07);
  $plane_forn_07 = number_format($guarda_forn_07/100,2,",",".");
  $pago_forn_07 = number_format($guarda_pago_forn_07/100,2,",",".");
}
$result_forn_mes_8 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-08-01' AND '2019-08-31'");
while($row = mysqli_fetch_array($result_forn_mes_8)){
  $plane_forn_mes_08 = $row['valor_planejamento'];
  $pago_forn_mes_08 =  $row['valor_pago'];
  $plane_forn_mes_08 = str_replace(".", "" ,$plane_forn_mes_08);
  $plane_forn_mes_08 = str_replace(",", "" ,$plane_forn_mes_08);
  $pago_forn_mes_08 = str_replace(".", "" ,$pago_forn_mes_08);
  $pago_forn_mes_08 = str_replace(",", "" ,$pago_forn_mes_08);
  $guarda_forn_08 = ($plane_forn_mes_08 + $guarda_forn_08);
  $guarda_pago_forn_08 = ($pago_forn_mes_08 + $guarda_pago_forn_08);
  $plane_forn_08 = number_format($guarda_forn_08/100,2,",",".");
  $pago_forn_08 = number_format($guarda_pago_forn_08/100,2,",",".");
}
$result_forn_mes_9 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-09-01' AND '2019-09-30'");
while($row = mysqli_fetch_array($result_forn_mes_9)){
  $plane_forn_mes_09 = $row['valor_planejamento'];
  $pago_forn_mes_09 =  $row['valor_pago'];
  $plane_forn_mes_09 = str_replace(".", "" ,$plane_forn_mes_09);
  $plane_forn_mes_09 = str_replace(",", "" ,$plane_forn_mes_09);
  $pago_forn_mes_09 = str_replace(".", "" ,$pago_forn_mes_09);
  $pago_forn_mes_09 = str_replace(",", "" ,$pago_forn_mes_09);
  $guarda_forn_09 = ($plane_forn_mes_09 + $guarda_forn_09);
  $guarda_pago_forn_09 = ($pago_forn_mes_09 + $guarda_pago_forn_09);
  $plane_forn_09 = number_format($guarda_forn_09/100,2,",",".");
  $pago_forn_09 = number_format($guarda_pago_forn_09/100,2,",",".");
}
$result_forn_mes_10 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-10-01' AND '2019-10-31'");
while($row = mysqli_fetch_array($result_forn_mes_10)){
  $plane_forn_mes_10 = $row['valor_planejamento'];
  $pago_forn_mes_10 =  $row['valor_pago'];
  $plane_forn_mes_10 = str_replace(".", "" ,$plane_forn_mes_10);
  $plane_forn_mes_10 = str_replace(",", "" ,$plane_forn_mes_10);
  $pago_forn_mes_10 = str_replace(".", "" ,$pago_forn_mes_10);
  $pago_forn_mes_10 = str_replace(",", "" ,$pago_forn_mes_10);
  $guarda_forn_10 = ($plane_forn_mes_10 + $guarda_forn_10);
  $guarda_pago_forn_10 = ($pago_forn_mes_10 + $guarda_pago_forn_10);
  $plane_forn_10 = number_format($guarda_forn_10/100,2,",",".");
  $pago_forn_10 = number_format($guarda_pago_forn_10/100,2,",",".");
}
$result_forn_mes_11 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-11-01' AND '2019-11-30'");
while($row = mysqli_fetch_array($result_forn_mes_11)){
  $plane_forn_mes_11 = $row['valor_planejamento'];
  $pago_forn_mes_11 =  $row['valor_pago'];
  $plane_forn_mes_11 = str_replace(".", "" ,$plane_forn_mes_11);
  $plane_forn_mes_11 = str_replace(",", "" ,$plane_forn_mes_11);
  $pago_forn_mes_11 = str_replace(".", "" ,$pago_forn_mes_11);
  $pago_forn_mes_11 = str_replace(",", "" ,$pago_forn_mes_11);
  $guarda_forn_11 = ($plane_forn_mes_11 + $guarda_forn_11);
  $guarda_pago_forn_11 = ($pago_forn_mes_11 + $guarda_pago_forn_11);
  $plane_forn_11 = number_format($guarda_forn_11/100,2,",",".");
  $pago_forn_11 = number_format($guarda_pago_forn_11/100,2,",",".");
}
$result_forn_mes_12 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_fornecedores WHERE data_paga BETWEEN '2019-12-01' AND '2019-12-31'");
while($row = mysqli_fetch_array($result_forn_mes_12)){
  $plane_forn_mes_12 = $row['valor_planejamento'];
  $pago_forn_mes_12 =  $row['valor_pago'];
  $plane_forn_mes_12 = str_replace(".", "" ,$plane_forn_mes_12);
  $plane_forn_mes_12 = str_replace(",", "" ,$plane_forn_mes_12);
  $pago_forn_mes_12 = str_replace(".", "" ,$pago_forn_mes_12);
  $pago_forn_mes_12 = str_replace(",", "" ,$pago_forn_mes_12);
  $guarda_forn_12 = ($plane_forn_mes_12 + $guarda_forn_12);
  $guarda_pago_forn_12 = ($pago_forn_mes_12 + $guarda_pago_forn_12);
  $plane_forn_12 = number_format($guarda_forn_12/100,2,",",".");
  $pago_forn_12 = number_format($guarda_pago_forn_12/100,2,",",".");
}
/*Fim Das Querys Fornecedores*/
?>
<?php
/*Inicio Das Querys Funcionarios*/
$result_func_mes_1 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-01-01' AND '2019-01-31'");
while($row = mysqli_fetch_array($result_func_mes_1)){
  $plane_func_mes_01 = $row['valor_planejamento'];
  $pago_func_mes_01 =  $row['valor_pago'];
  $plane_func_mes_01 = str_replace(".", "" ,$plane_func_mes_01);
  $plane_func_mes_01 = str_replace(",", "" ,$plane_func_mes_01);
  $pago_func_mes_01 = str_replace(".", "" ,$pago_func_mes_01);
  $pago_func_mes_01 = str_replace(",", "" ,$pago_func_mes_01);
  $guarda_func_01 = ($plane_func_mes_01 + $guarda_func_01);
  $guarda_pago_func_01 = ($pago_func_mes_01 + $guarda_pago_func_01);
  $plane_func_01 = number_format($guarda_func_01/100,2,",",".");
  $pago_func_01 = number_format($guarda_pago_func_01/100,2,",",".");
}
$result_func_mes_2 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-02-01' AND '2019-02-28'");
while($row = mysqli_fetch_array($result_func_mes_2)){
  $plane_func_mes_02 = $row['valor_planejamento'];
  $pago_func_mes_02 =  $row['valor_pago'];
  $plane_func_mes_02 = str_replace(".", "" ,$plane_func_mes_02);
  $plane_func_mes_02 = str_replace(",", "" ,$plane_func_mes_02);
  $pago_func_mes_02 = str_replace(".", "" ,$pago_func_mes_02);
  $pago_func_mes_02 = str_replace(",", "" ,$pago_func_mes_02);
  $guarda_func_02 = ($plane_func_mes_02 + $guarda_func_02);
  $guarda_pago_func_02 = ($pago_func_mes_02 + $guarda_pago_func_02);
  $plane_func_02 = number_format($guarda_func_02/100,2,",",".");
  $pago_func_02 = number_format($guarda_pago_func_02/100,2,",",".");
}
$result_func_mes_3 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-03-01' AND '2019-03-31'");
while($row = mysqli_fetch_array($result_func_mes_3)){
  $plane_func_mes_03 = $row['valor_planejamento'];
  $pago_func_mes_03 =  $row['valor_pago'];
  $plane_func_mes_03 = str_replace(".", "" ,$plane_func_mes_03);
  $plane_func_mes_03 = str_replace(",", "" ,$plane_func_mes_03);
  $pago_func_mes_03 = str_replace(".", "" ,$pago_func_mes_03);
  $pago_func_mes_03 = str_replace(",", "" ,$pago_func_mes_03);
  $guarda_func_03 = ($plane_func_mes_03 + $guarda_func_03);
  $guarda_pago_func_03 = ($pago_func_mes_03 + $guarda_pago_func_03);
  $plane_func_03 = number_format($guarda_func_03/100,2,",",".");
  $pago_func_03 = number_format($guarda_pago_func_03/100,2,",",".");
}
$result_func_mes_4 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-04-01' AND '2019-04-30'");
while($row = mysqli_fetch_array($result_func_mes_4)){
  $plane_func_mes_04 = $row['valor_planejamento'];
  $pago_func_mes_04 =  $row['valor_pago'];
  $plane_func_mes_04 = str_replace(".", "" ,$plane_func_mes_04);
  $plane_func_mes_04 = str_replace(",", "" ,$plane_func_mes_04);
  $pago_func_mes_04 = str_replace(".", "" ,$pago_func_mes_04);
  $pago_func_mes_04 = str_replace(",", "" ,$pago_func_mes_04);
  $guarda_func_04 = ($plane_func_mes_04 + $guarda_func_04);
  $guarda_pago_func_04 = ($pago_func_mes_04 + $guarda_pago_func_04);
  $plane_func_04 = number_format($guarda_func_04/100,2,",",".");
  $pago_func_04 = number_format($guarda_pago_func_04/100,2,",",".");
}
$result_func_mes_5 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-05-01' AND '2019-05-31'");
while($row = mysqli_fetch_array($result_func_mes_5)){
  $plane_func_mes_05 = $row['valor_planejamento'];
  $pago_func_mes_05 =  $row['valor_pago'];
  $plane_func_mes_05 = str_replace(".", "" ,$plane_func_mes_05);
  $plane_func_mes_05 = str_replace(",", "" ,$plane_func_mes_05);
  $pago_func_mes_05 = str_replace(".", "" ,$pago_func_mes_05);
  $pago_func_mes_05 = str_replace(",", "" ,$pago_func_mes_05);
  $guarda_func_05 = ($plane_func_mes_05 + $guarda_func_05);
  $guarda_pago_func_05 = ($pago_func_mes_05 + $guarda_pago_func_05);
  $plane_func_05 = number_format($guarda_func_05/100,2,",",".");
  $pago_func_05 = number_format($guarda_pago_func_05/100,2,",",".");
}
$result_func_mes_6 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-06-01' AND '2019-06-30'");
while($row = mysqli_fetch_array($result_func_mes_6)){
  $plane_func_mes_06 = $row['valor_planejamento'];
  $pago_func_mes_06 =  $row['valor_pago'];
  $plane_func_mes_06 = str_replace(".", "" ,$plane_func_mes_06);
  $plane_func_mes_06 = str_replace(",", "" ,$plane_func_mes_06);
  $pago_func_mes_06 = str_replace(".", "" ,$pago_func_mes_06);
  $pago_func_mes_06 = str_replace(",", "" ,$pago_func_mes_06);
  $guarda_func_06 = ($plane_func_mes_06 + $guarda_func_06);
  $guarda_pago_func_06 = ($pago_func_mes_06 + $guarda_pago_func_06);
  $plane_func_06 = number_format($guarda_func_06/100,2,",",".");
  $pago_func_06 = number_format($guarda_pago_func_06/100,2,",",".");
}
$result_func_mes_7 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-07-01' AND '2019-07-31'");
while($row = mysqli_fetch_array($result_func_mes_7)){
  $plane_func_mes_07 = $row['valor_planejamento'];
  $pago_func_mes_07 =  $row['valor_pago'];
  $plane_func_mes_07 = str_replace(".", "" ,$plane_func_mes_07);
  $plane_func_mes_07 = str_replace(",", "" ,$plane_func_mes_07);
  $pago_func_mes_07 = str_replace(".", "" ,$pago_func_mes_07);
  $pago_func_mes_07 = str_replace(",", "" ,$pago_func_mes_07);
  $guarda_func_07 = ($plane_func_mes_07 + $guarda_func_07);
  $guarda_pago_func_07 = ($pago_func_mes_07 + $guarda_pago_func_07);
  $plane_func_07 = number_format($guarda_func_07/100,2,",",".");
  $pago_func_07 = number_format($guarda_pago_func_07/100,2,",",".");
}
$result_func_mes_8 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-08-01' AND '2019-08-31'");
while($row = mysqli_fetch_array($result_func_mes_8)){
  $plane_func_mes_08 = $row['valor_planejamento'];
  $pago_func_mes_08 =  $row['valor_pago'];
  $plane_func_mes_08 = str_replace(".", "" ,$plane_func_mes_08);
  $plane_func_mes_08 = str_replace(",", "" ,$plane_func_mes_08);
  $pago_func_mes_08 = str_replace(".", "" ,$pago_func_mes_08);
  $pago_func_mes_08 = str_replace(",", "" ,$pago_func_mes_08);
  $guarda_func_08 = ($plane_func_mes_08 + $guarda_func_08);
  $guarda_pago_func_08 = ($pago_func_mes_08 + $guarda_pago_func_08);
  $plane_func_08 = number_format($guarda_func_08/100,2,",",".");
  $pago_func_08 = number_format($guarda_pago_func_08/100,2,",",".");
}
$result_func_mes_9 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-09-01' AND '2019-09-30'");
while($row = mysqli_fetch_array($result_func_mes_9)){
  $plane_func_mes_09 = $row['valor_planejamento'];
  $pago_func_mes_09 =  $row['valor_pago'];
  $plane_func_mes_09 = str_replace(".", "" ,$plane_func_mes_09);
  $plane_func_mes_09 = str_replace(",", "" ,$plane_func_mes_09);
  $pago_func_mes_09 = str_replace(".", "" ,$pago_func_mes_09);
  $pago_func_mes_09 = str_replace(",", "" ,$pago_func_mes_09);
  $guarda_func_09 = ($plane_func_mes_09 + $guarda_func_09);
  $guarda_pago_func_09 = ($pago_func_mes_09 + $guarda_pago_func_09);
  $plane_func_09 = number_format($guarda_func_09/100,2,",",".");
  $pago_func_09 = number_format($guarda_pago_func_09/100,2,",",".");
}
$result_func_mes_10 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-10-01' AND '2019-10-31'");
while($row = mysqli_fetch_array($result_func_mes_10)){
  $plane_func_mes_10 = $row['valor_planejamento'];
  $pago_func_mes_10 =  $row['valor_pago'];
  $plane_func_mes_10 = str_replace(".", "" ,$plane_func_mes_10);
  $plane_func_mes_10 = str_replace(",", "" ,$plane_func_mes_10);
  $pago_func_mes_10 = str_replace(".", "" ,$pago_func_mes_10);
  $pago_func_mes_10 = str_replace(",", "" ,$pago_func_mes_10);
  $guarda_func_10 = ($plane_func_mes_10 + $guarda_func_10);
  $guarda_pago_func_10 = ($pago_func_mes_10 + $guarda_pago_func_10);
  $plane_func_10 = number_format($guarda_func_10/100,2,",",".");
  $pago_func_10 = number_format($guarda_pago_func_10/100,2,",",".");
}
$result_func_mes_11 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-11-01' AND '2019-11-30'");
while($row = mysqli_fetch_array($result_func_mes_11)){
  $plane_func_mes_11 = $row['valor_planejamento'];
  $pago_func_mes_11 =  $row['valor_pago'];
  $plane_func_mes_11 = str_replace(".", "" ,$plane_func_mes_11);
  $plane_func_mes_11 = str_replace(",", "" ,$plane_func_mes_11);
  $pago_func_mes_11 = str_replace(".", "" ,$pago_func_mes_11);
  $pago_func_mes_11 = str_replace(",", "" ,$pago_func_mes_11);
  $guarda_func_11 = ($plane_func_mes_11 + $guarda_func_11);
  $guarda_pago_func_11 = ($pago_func_mes_11 + $guarda_pago_func_11);
  $plane_func_11 = number_format($guarda_func_11/100,2,",",".");
  $pago_func_11 = number_format($guarda_pago_func_11/100,2,",",".");
}
$result_func_mes_12 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_funcionarios WHERE data_paga BETWEEN '2019-12-01' AND '2019-12-31'");
while($row = mysqli_fetch_array($result_func_mes_12)){
  $plane_func_mes_12 = $row['valor_planejamento'];
  $pago_func_mes_12 =  $row['valor_pago'];
  $plane_func_mes_12 = str_replace(".", "" ,$plane_func_mes_12);
  $plane_func_mes_12 = str_replace(",", "" ,$plane_func_mes_12);
  $pago_func_mes_12 = str_replace(".", "" ,$pago_func_mes_12);
  $pago_func_mes_12 = str_replace(",", "" ,$pago_func_mes_12);
  $guarda_func_12 = ($plane_func_mes_12 + $guarda_func_12);
  $guarda_pago_func_12 = ($pago_func_mes_12 + $guarda_pago_func_12);
  $plane_func_12 = number_format($guarda_func_12/100,2,",",".");
  $pago_func_12 = number_format($guarda_pago_func_12/100,2,",",".");
}
/*Fim Das Querys Funcionarios*/
?>
<?php
/*Inicio Das Querys Representantes*/
$result_repre_mes_1 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-01-01' AND '2019-01-31'");
while($row = mysqli_fetch_array($result_repre_mes_1)){
  $plane_repre_mes_01 = $row['valor_planejamento'];
  $pago_repre_mes_01 =  $row['valor_pago'];
  $plane_repre_mes_01 = str_replace(".", "" ,$plane_repre_mes_01);
  $plane_repre_mes_01 = str_replace(",", "" ,$plane_repre_mes_01);
  $pago_repre_mes_01 = str_replace(".", "" ,$pago_repre_mes_01);
  $pago_repre_mes_01 = str_replace(",", "" ,$pago_repre_mes_01);
  $guarda_repre_01 = ($plane_repre_mes_01 + $guarda_repre_01);
  $guarda_pago_repre_01 = ($pago_repre_mes_01 + $guarda_pago_repre_01);
  $plane_repre_01 = number_format($guarda_repre_01/100,2,",",".");
  $pago_repre_01 = number_format($guarda_pago_repre_01/100,2,",",".");
}
$result_repre_mes_2 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-02-01' AND '2019-02-28'");
while($row = mysqli_fetch_array($result_repre_mes_2)){
  $plane_repre_mes_02 = $row['valor_planejamento'];
  $pago_repre_mes_02 =  $row['valor_pago'];
  $plane_repre_mes_02 = str_replace(".", "" ,$plane_repre_mes_02);
  $plane_repre_mes_02 = str_replace(",", "" ,$plane_repre_mes_02);
  $pago_repre_mes_02 = str_replace(".", "" ,$pago_repre_mes_02);
  $pago_repre_mes_02 = str_replace(",", "" ,$pago_repre_mes_02);
  $guarda_repre_02 = ($plane_repre_mes_02 + $guarda_repre_02);
  $guarda_pago_repre_02 = ($pago_repre_mes_02 + $guarda_pago_repre_02);
  $plane_repre_02 = number_format($guarda_repre_02/100,2,",",".");
  $pago_repre_02 = number_format($guarda_pago_repre_02/100,2,",",".");
}
$result_repre_mes_3 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-03-01' AND '2019-03-31'");
while($row = mysqli_fetch_array($result_repre_mes_3)){
  $plane_repre_mes_03 = $row['valor_planejamento'];
  $pago_repre_mes_03 =  $row['valor_pago'];
  $plane_repre_mes_03 = str_replace(".", "" ,$plane_repre_mes_03);
  $plane_repre_mes_03 = str_replace(",", "" ,$plane_repre_mes_03);
  $pago_repre_mes_03 = str_replace(".", "" ,$pago_repre_mes_03);
  $pago_repre_mes_03 = str_replace(",", "" ,$pago_repre_mes_03);
  $guarda_repre_03 = ($plane_repre_mes_03 + $guarda_repre_03);
  $guarda_pago_repre_03 = ($pago_repre_mes_03 + $guarda_pago_repre_03);
  $plane_repre_03 = number_format($guarda_repre_03/100,2,",",".");
  $pago_repre_03 = number_format($guarda_pago_repre_03/100,2,",",".");
}
$result_repre_mes_4 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-04-01' AND '2019-04-30'");
while($row = mysqli_fetch_array($result_repre_mes_4)){
  $plane_repre_mes_04 = $row['valor_planejamento'];
  $pago_repre_mes_04 =  $row['valor_pago'];
  $plane_repre_mes_04 = str_replace(".", "" ,$plane_repre_mes_04);
  $plane_repre_mes_04 = str_replace(",", "" ,$plane_repre_mes_04);
  $pago_repre_mes_04 = str_replace(".", "" ,$pago_repre_mes_04);
  $pago_repre_mes_04 = str_replace(",", "" ,$pago_repre_mes_04);
  $guarda_repre_04 = ($plane_repre_mes_04 + $guarda_repre_04);
  $guarda_pago_repre_04 = ($pago_repre_mes_04 + $guarda_pago_repre_04);
  $plane_repre_04 = number_format($guarda_repre_04/100,2,",",".");
  $pago_repre_04 = number_format($guarda_pago_repre_04/100,2,",",".");
}
$result_repre_mes_5 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-05-01' AND '2019-05-31'");
while($row = mysqli_fetch_array($result_repre_mes_5)){
  $plane_repre_mes_05 = $row['valor_planejamento'];
  $pago_repre_mes_05 =  $row['valor_pago'];
  $plane_repre_mes_05 = str_replace(".", "" ,$plane_repre_mes_05);
  $plane_repre_mes_05 = str_replace(",", "" ,$plane_repre_mes_05);
  $pago_repre_mes_05 = str_replace(".", "" ,$pago_repre_mes_05);
  $pago_repre_mes_05 = str_replace(",", "" ,$pago_repre_mes_05);
  $guarda_repre_05 = ($plane_repre_mes_05 + $guarda_repre_05);
  $guarda_pago_repre_05 = ($pago_repre_mes_05 + $guarda_pago_repre_05);
  $plane_repre_05 = number_format($guarda_repre_05/100,2,",",".");
  $pago_repre_05 = number_format($guarda_pago_repre_05/100,2,",",".");
}
$result_repre_mes_6 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-06-01' AND '2019-06-30'");
while($row = mysqli_fetch_array($result_repre_mes_6)){
  $plane_repre_mes_06 = $row['valor_planejamento'];
  $pago_repre_mes_06 =  $row['valor_pago'];
  $plane_repre_mes_06 = str_replace(".", "" ,$plane_repre_mes_06);
  $plane_repre_mes_06 = str_replace(",", "" ,$plane_repre_mes_06);
  $pago_repre_mes_06 = str_replace(".", "" ,$pago_repre_mes_06);
  $pago_repre_mes_06 = str_replace(",", "" ,$pago_repre_mes_06);
  $guarda_repre_06 = ($plane_repre_mes_06 + $guarda_repre_06);
  $guarda_pago_repre_06 = ($pago_repre_mes_06 + $guarda_pago_repre_06);
  $plane_repre_06 = number_format($guarda_repre_06/100,2,",",".");
  $pago_repre_06 = number_format($guarda_pago_repre_06/100,2,",",".");
}
$result_repre_mes_7 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-07-01' AND '2019-07-31'");
while($row = mysqli_fetch_array($result_repre_mes_7)){
  $plane_repre_mes_07 = $row['valor_planejamento'];
  $pago_repre_mes_07 =  $row['valor_pago'];
  $plane_repre_mes_07 = str_replace(".", "" ,$plane_repre_mes_07);
  $plane_repre_mes_07 = str_replace(",", "" ,$plane_repre_mes_07);
  $pago_repre_mes_07 = str_replace(".", "" ,$pago_repre_mes_07);
  $pago_repre_mes_07 = str_replace(",", "" ,$pago_repre_mes_07);
  $guarda_repre_07 = ($plane_repre_mes_07 + $guarda_repre_07);
  $guarda_pago_repre_07 = ($pago_repre_mes_07 + $guarda_pago_repre_07);
  $plane_repre_07 = number_format($guarda_repre_07/100,2,",",".");
  $pago_repre_07 = number_format($guarda_pago_repre_07/100,2,",",".");
}
$result_repre_mes_8 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-08-01' AND '2019-08-31'");
while($row = mysqli_fetch_array($result_repre_mes_8)){
  $plane_repre_mes_08 = $row['valor_planejamento'];
  $pago_repre_mes_08 =  $row['valor_pago'];
  $plane_repre_mes_08 = str_replace(".", "" ,$plane_repre_mes_08);
  $plane_repre_mes_08 = str_replace(",", "" ,$plane_repre_mes_08);
  $pago_repre_mes_08 = str_replace(".", "" ,$pago_repre_mes_08);
  $pago_repre_mes_08 = str_replace(",", "" ,$pago_repre_mes_08);
  $guarda_repre_08 = ($plane_repre_mes_08 + $guarda_repre_08);
  $guarda_pago_repre_08 = ($pago_repre_mes_08 + $guarda_pago_repre_08);
  $plane_repre_08 = number_format($guarda_repre_08/100,2,",",".");
  $pago_repre_08 = number_format($guarda_pago_repre_08/100,2,",",".");
}
$result_repre_mes_9 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-09-01' AND '2019-09-30'");
while($row = mysqli_fetch_array($result_repre_mes_9)){
  $plane_repre_mes_09 = $row['valor_planejamento'];
  $pago_repre_mes_09 =  $row['valor_pago'];
  $plane_repre_mes_09 = str_replace(".", "" ,$plane_repre_mes_09);
  $plane_repre_mes_09 = str_replace(",", "" ,$plane_repre_mes_09);
  $pago_repre_mes_09 = str_replace(".", "" ,$pago_repre_mes_09);
  $pago_repre_mes_09 = str_replace(",", "" ,$pago_repre_mes_09);
  $guarda_repre_09 = ($plane_repre_mes_09 + $guarda_repre_09);
  $guarda_pago_repre_09 = ($pago_repre_mes_09 + $guarda_pago_repre_09);
  $plane_repre_09 = number_format($guarda_repre_09/100,2,",",".");
  $pago_repre_09 = number_format($guarda_pago_repre_09/100,2,",",".");
}
$result_repre_mes_10 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-10-01' AND '2019-10-31'");
while($row = mysqli_fetch_array($result_repre_mes_10)){
  $plane_repre_mes_10 = $row['valor_planejamento'];
  $pago_repre_mes_10 =  $row['valor_pago'];
  $plane_repre_mes_10 = str_replace(".", "" ,$plane_repre_mes_10);
  $plane_repre_mes_10 = str_replace(",", "" ,$plane_repre_mes_10);
  $pago_repre_mes_10 = str_replace(".", "" ,$pago_repre_mes_10);
  $pago_repre_mes_10 = str_replace(",", "" ,$pago_repre_mes_10);
  $guarda_repre_10 = ($plane_repre_mes_10 + $guarda_repre_10);
  $guarda_pago_repre_10 = ($pago_repre_mes_10 + $guarda_pago_repre_10);
  $plane_repre_10 = number_format($guarda_repre_10/100,2,",",".");
  $pago_repre_10 = number_format($guarda_pago_repre_10/100,2,",",".");
}
$result_repre_mes_11 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-11-01' AND '2019-11-30'");
while($row = mysqli_fetch_array($result_repre_mes_11)){
  $plane_repre_mes_11 = $row['valor_planejamento'];
  $pago_repre_mes_11 =  $row['valor_pago'];
  $plane_repre_mes_11 = str_replace(".", "" ,$plane_repre_mes_11);
  $plane_repre_mes_11 = str_replace(",", "" ,$plane_repre_mes_11);
  $pago_repre_mes_11 = str_replace(".", "" ,$pago_repre_mes_11);
  $pago_repre_mes_11 = str_replace(",", "" ,$pago_repre_mes_11);
  $guarda_repre_11 = ($plane_repre_mes_11 + $guarda_repre_11);
  $guarda_pago_repre_11 = ($pago_repre_mes_11 + $guarda_pago_repre_11);
  $plane_repre_11 = number_format($guarda_repre_11/100,2,",",".");
  $pago_repre_11 = number_format($guarda_pago_repre_11/100,2,",",".");
}
$result_repre_mes_12 = mysqli_query($conn,"SELECT valor_planejamento, valor_pago FROM historico_representantes WHERE data_paga BETWEEN '2019-12-01' AND '2019-12-31'");
while($row = mysqli_fetch_array($result_repre_mes_12)){
  $plane_repre_mes_12 = $row['valor_planejamento'];
  $pago_repre_mes_12 =  $row['valor_pago'];
  $plane_repre_mes_12 = str_replace(".", "" ,$plane_repre_mes_12);
  $plane_repre_mes_12 = str_replace(",", "" ,$plane_repre_mes_12);
  $pago_repre_mes_12 = str_replace(".", "" ,$pago_repre_mes_12);
  $pago_repre_mes_12 = str_replace(",", "" ,$pago_repre_mes_12);
  $guarda_repre_12 = ($plane_repre_mes_12 + $guarda_repre_12);
  $guarda_pago_repre_12 = ($pago_repre_mes_12 + $guarda_pago_repre_12);
  $plane_repre_12 = number_format($guarda_repre_12/100,2,",",".");
  $pago_repre_12 = number_format($guarda_pago_repre_12/100,2,",",".");
}
/*Fim Das Querys Representantes*/


$total_sem_formatar_plane_01 = ($guarda_plane_01 + $guarda_impostos_01 + $guarda_desp_01 + $guarda_forn_01 + $guarda_func_01 + $guarda_repre_01);
$total_sem_formatar_plane_02 = ($guarda_plane_02 + $guarda_impostos_02 + $guarda_desp_02 + $guarda_forn_02 + $guarda_func_02 + $guarda_repre_02);
$total_sem_formatar_plane_03 = ($guarda_plane_03 + $guarda_impostos_03 + $guarda_desp_03 + $guarda_forn_03 + $guarda_func_03 + $guarda_repre_03);
$total_sem_formatar_plane_04 = ($guarda_plane_04 + $guarda_impostos_04 + $guarda_desp_04 + $guarda_forn_04 + $guarda_func_04 + $guarda_repre_04);
$total_sem_formatar_plane_05 = ($guarda_plane_05 + $guarda_impostos_05 + $guarda_desp_05 + $guarda_forn_05 + $guarda_func_05 + $guarda_repre_05);
$total_sem_formatar_plane_06 = ($guarda_plane_06 + $guarda_impostos_06 + $guarda_desp_06 + $guarda_forn_06 + $guarda_func_06 + $guarda_repre_06);
$total_sem_formatar_plane_07 = ($guarda_plane_07 + $guarda_impostos_07 + $guarda_desp_07 + $guarda_forn_07 + $guarda_func_07 + $guarda_repre_07);
$total_sem_formatar_plane_08 = ($guarda_plane_08 + $guarda_impostos_08 + $guarda_desp_08 + $guarda_forn_08 + $guarda_func_08 + $guarda_repre_08);
$total_sem_formatar_plane_09 = ($guarda_plane_09 + $guarda_impostos_09 + $guarda_desp_09 + $guarda_forn_09 + $guarda_func_09 + $guarda_repre_09);
$total_sem_formatar_plane_10 = ($guarda_plane_10 + $guarda_impostos_10 + $guarda_desp_10 + $guarda_forn_10 + $guarda_func_10 + $guarda_repre_10);
$total_sem_formatar_plane_11 = ($guarda_plane_11 + $guarda_impostos_11 + $guarda_desp_11 + $guarda_forn_11 + $guarda_func_11 + $guarda_repre_11);
$total_sem_formatar_plane_12 = ($guarda_plane_12 + $guarda_impostos_12 + $guarda_desp_12 + $guarda_forn_12 + $guarda_func_12 + $guarda_repre_12);
$total_sem_formatar_pago_01 = ($guarda_taxas_01 + $guarda_pago_impostos_01 + $guarda_pago_desp_01 + $guarda_pago_forn_01 + $guarda_pago_func_01 + $guarda_pago_repre_01);
$total_sem_formatar_pago_02 = ($guarda_taxas_02 + $guarda_pago_impostos_02 + $guarda_pago_desp_02 + $guarda_pago_forn_02 + $guarda_pago_func_02 + $guarda_pago_repre_02);
$total_sem_formatar_pago_03 = ($guarda_taxas_03 + $guarda_pago_impostos_03 + $guarda_pago_desp_03 + $guarda_pago_forn_03 + $guarda_pago_func_03 + $guarda_pago_repre_03);
$total_sem_formatar_pago_04 = ($guarda_taxas_04 + $guarda_pago_impostos_04 + $guarda_pago_desp_04 + $guarda_pago_forn_04 + $guarda_pago_func_04 + $guarda_pago_repre_04);
$total_sem_formatar_pago_05 = ($guarda_taxas_05 + $guarda_pago_impostos_05 + $guarda_pago_desp_05 + $guarda_pago_forn_05 + $guarda_pago_func_05 + $guarda_pago_repre_05);
$total_sem_formatar_pago_06 = ($guarda_taxas_06 + $guarda_pago_impostos_06 + $guarda_pago_desp_06 + $guarda_pago_forn_06 + $guarda_pago_func_06 + $guarda_pago_repre_06);
$total_sem_formatar_pago_07 = ($guarda_taxas_07 + $guarda_pago_impostos_07 + $guarda_pago_desp_07 + $guarda_pago_forn_07 + $guarda_pago_func_07 + $guarda_pago_repre_07);
$total_sem_formatar_pago_08 = ($guarda_taxas_08 + $guarda_pago_impostos_08 + $guarda_pago_desp_08 + $guarda_pago_forn_08 + $guarda_pago_func_08 + $guarda_pago_repre_08);
$total_sem_formatar_pago_09 = ($guarda_taxas_09 + $guarda_pago_impostos_09 + $guarda_pago_desp_09 + $guarda_pago_forn_09 + $guarda_pago_func_09 + $guarda_pago_repre_09);
$total_sem_formatar_pago_10 = ($guarda_taxas_10 + $guarda_pago_impostos_10 + $guarda_pago_desp_10 + $guarda_pago_forn_10 + $guarda_pago_func_10 + $guarda_pago_repre_10);
$total_sem_formatar_pago_11 = ($guarda_taxas_11 + $guarda_pago_impostos_11 + $guarda_pago_desp_11 + $guarda_pago_forn_11 + $guarda_pago_func_11 + $guarda_pago_repre_11);
$total_sem_formatar_pago_12 = ($guarda_taxas_12 + $guarda_pago_impostos_12 + $guarda_pago_desp_12 + $guarda_pago_forn_12 + $guarda_pago_func_12 + $guarda_pago_repre_12);

$total_plane_01 = number_format($total_sem_formatar_plane_01/100,2,",",".");
$total_plane_02 = number_format($total_sem_formatar_plane_02/100,2,",",".");
$total_plane_03 = number_format($total_sem_formatar_plane_03/100,2,",",".");
$total_plane_04 = number_format($total_sem_formatar_plane_04/100,2,",",".");
$total_plane_05 = number_format($total_sem_formatar_plane_05/100,2,",",".");
$total_plane_06 = number_format($total_sem_formatar_plane_06/100,2,",",".");
$total_plane_07 = number_format($total_sem_formatar_plane_07/100,2,",",".");
$total_plane_08 = number_format($total_sem_formatar_plane_08/100,2,",",".");
$total_plane_09 = number_format($total_sem_formatar_plane_09/100,2,",",".");
$total_plane_10 = number_format($total_sem_formatar_plane_10/100,2,",",".");
$total_plane_11 = number_format($total_sem_formatar_plane_11/100,2,",",".");
$total_plane_12 = number_format($total_sem_formatar_plane_12/100,2,",",".");

$total_pago_01 = number_format($total_sem_formatar_pago_01/100,2,",",".");
$total_pago_02 = number_format($total_sem_formatar_pago_02/100,2,",",".");
$total_pago_03 = number_format($total_sem_formatar_pago_03/100,2,",",".");
$total_pago_04 = number_format($total_sem_formatar_pago_04/100,2,",",".");
$total_pago_05 = number_format($total_sem_formatar_pago_05/100,2,",",".");
$total_pago_06 = number_format($total_sem_formatar_pago_06/100,2,",",".");
$total_pago_07 = number_format($total_sem_formatar_pago_07/100,2,",",".");
$total_pago_08 = number_format($total_sem_formatar_pago_08/100,2,",",".");
$total_pago_09 = number_format($total_sem_formatar_pago_09/100,2,",",".");
$total_pago_10 = number_format($total_sem_formatar_pago_10/100,2,",",".");
$total_pago_11 = number_format($total_sem_formatar_pago_11/100,2,",",".");
$total_pago_12 = number_format($total_sem_formatar_pago_12/100,2,",",".");
?>