<?php
session_start();
include_once("conectar.php");
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
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
	v=v.replace(/\D/g,"")						//Remove tudo o que não é dígito
	v=v.replace(/(\d{2})$/,",$1") 			//Coloca a virgula
	v=v.replace(/(\d+)(\d{3},\d{2})$/g,"$1.$2") 	//Coloca o primeiro ponto
	return v
}
</script>
 
</head>
<body>
<form action="valida_dados.php" method="POST">
<select name="dia">
  <option value="" selected>Selecione o dia</option> 
  <option value="1">01</option>
  <option value="2">02</option>
  <option value="3">03</option>
  <option value="4">04</option>
  <option value="5">05</option>
  <option value="6">06</option>
  <option value="7">07</option>
  <option value="8">08</option>
  <option value="9">09</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>
<select name="mes">
  <option value="" selected>Selecione um mes</option> 
  <option value="1">Janeiro</option>
  <option value="2">Fevereiro</option>
  <option value="3">Março</option>
  <option value="4">Abril</option>
  <option value="5">Maio</option>
  <option value="6">Junho</option>
  <option value="7">Julho</option>
  <option value="8">Agosto</option>
  <option value="9">Setembro</option>
  <option value="10">Outubro</option>
  <option value="11">Novembro</option>
  <option value="12">Dezembro</option>
</select>
<select name="ano">
  <option value="" selected>Selecione um ano</option> 
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  <option value="2021">2021</option>
  <option value="2022">2022</option>
</select>
<br>
<!--Falta categoria-->
<select name="categoria">
    <option value="" selected>Selecione uma categoria</option>
    <?php
        include_once("conectar.php");
        $result = mysqli_query($conn,"SELECT categoria FROM categoria");
        while($row = mysqli_fetch_array($result)){
    ?>
    <option value ="<?php echo($row['categoria']);?>"><?php echo($row['categoria']);?></option>
    <?php
    }
    ?> 
</select>
<br>
<!--Falta categoria-->
<select name="es">
  <option value="" selected>Selecione Entrada ou Saida</option> 
  <option value="entrada">Entrada</option>
  <option value="saida">Saida</option>
</select>
<br>
R$: <input name="valor" onkeypress="mascara(this,mreais)" size="20" />
<br>
<textarea name="obs" placeholder="Observação"></textarea>
<br>
<lable>Foto do comprovante</lable><input type="file" name="foto" required>
<br>
<input type="submit" value="Inserir Dados">
<form>
</body>
</html>