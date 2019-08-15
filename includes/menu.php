<?php
session_start();
include_once("session.php");
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
?>
<html>
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
<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="css/simple-sidebar.css" rel="stylesheet">
<!--<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />-->
</head>
<body>


<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <br>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_dados">Adicionar dados</button><br>
            <button type="button" class="btn btn-warning" onclick="location.href='resumos/ver_diario.php'">Resumo Diário</button>
            <button type="button" class="btn btn-warning" onclick="location.href='resumos/ver_mensal.php'">Resumo Mensal</button><br>
            <button type="button" class="btn btn-info" onclick="location.href='formularios/add_categoria.php'">Cadastro de Categoria</button>
            <button type="button" class="btn btn-info" onclick="location.href='formularios/add_usuario.php'">Cadastro de Usuários</button>
            <button type="button" class="btn btn-info" onclick="location.href='formularios/add_conta.php'">Adicionar Contas</button>
            <button type="button" class="btn btn-info" onclick="location.href='formularios/add_descricao_pagamento.php'">Descrição de Pagamento</button>
            <button type="button" class="btn btn-warning" onclick="location.href='formularios/taxas_bancaria.php'">Taxas Bancarias</button>
            <button type="button" class="btn btn-info" onclick="location.href='formularios/historico_taxas_bancarias.php'">Histórico Taxas Bancarias</button>
        </div>
    </div>
</div>
<!-- Antigo menu -->
<!--
<div id="tela">
    <nav class="navigation">
    <ul class="mainmenu">
        <li><a href="">Resumos</a>
            <ul class="submenu">
                <li><a href="resumos/diario.php">Resumo diário</a></li>
                <li><a href="resumos/mensal.php">Resumo mensal</a></li>
            </ul>
        </li>
        <li><a href="">Adicionar dados</a>
            <ul class="submenu">
                <li><a href="formularios/inserir_dados.php">Inserir Dados</a></li>
            </ul>
        </li>
        <li><a href="">Cadastros</a>
        <ul class="submenu">
            <li><a href="formularios/add_usuario.php">Usuário</a></li>
            <li><a href="formularios/add_categoria.php">Categoria</a></li>
        </ul>
        </li>
    </ul>
    </nav>
</div>
-->

<div class="modal fade" id="add_dados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_dadosLabel">Cadastrar empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_empresa.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Dia:</label>
                <select id="dia" name="dia" class="form-control">
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
            </div>
            <div class="form-group">
                <label>Mês:</label>
                <select id="mes" name="mes" class="form-control">
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
            </div>
            <div class="form-group">
                <label>Ano:</label>
                <select id="ano" name="ano" class="form-control">
                    <option value="" selected>Selecione um ano</option> 
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                </select>
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="categoria" class="form-control" id="categoria">
                    <option value="" selected>Selecione uma categoria</option>
                    <?php
                    $result = mysqli_query($conn,"SELECT categoria FROM categoria");
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php echo($row['categoria']);?>"><?php echo($row['categoria']);?></option>
                    <?php
                    }
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Recebimento ou Gasto:</label>
                <select id="es" name="es" class="form-control">
                    <option value="" selected>Selecione Recebimento ou Gasto</option> 
                    <option value="entrada">Recebimento</option>
                    <option value="saida">Gasto</option>
                </select>
            </div>
            <div class="form-group">
                <label>Valor R$:</label>
                <input type="text" name="valor" class="form-control" id="valor" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>Observação:</label>
                <textarea name="obs" class="form-control" id="obs" placeholder="Observação"></textarea>
            </div>
            <div class="form-group">
                <label>Foto do comprovante:</label>
                <input type="file" name="foto" class="form-control" id="foto" placeholder="Foto do comprovante">
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_dados" id="add_dados" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>