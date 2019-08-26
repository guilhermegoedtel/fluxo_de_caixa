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
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="assents/css/simple-sidebar.css" rel="stylesheet">
<link href="assents/css/material-dashboard.css" rel="stylesheet">
<!--<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />-->
</head>
<style>
.main-panel{
  background-color: white;
}
</style>
<body>

<!--Inicio Menu-->
<div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Olá, <?php echo $responsavel;?>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="#">
              <i class="material-icons">insert_chart</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Resumos</p>
            </a>
            <div class="dropdown-menu">
              <a href="resumos/ver_diario.php" class="nav-link dropdown-item">Resumo Diário</a>
              <a href="resumos/ver_mensal.php" class="dropdown-item">Resumo Mensal</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">account_balance</i>
              <p>Taxas Bancarias</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/taxas_bancaria.php" class="nav-link dropdown-item">Taxas Bancarias</a>
              <a href="formularios/historico_taxas_bancarias.php" class="dropdown-item">Histórico Taxas Bancarias</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">class</i>
              <p>Impostos e Encargos</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/impostos_encargos.php" class="nav-link dropdown-item">Impostos e Encargos</a>
              <a href="formularios/historico_impostos_encargos.php" class="dropdown-item">Histórico de Impostos e Encargos</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">trending_down</i>
              <p>Despesas</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/despesas.php" class="dropdown-item">Despesas</a>
              <a href="formularios/historico_despesas.php" class="dropdown-item">Historico Despesas</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">add_shopping_cart</i>
              <p>Fornecedores</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/planejamento_fornecedor.php" class="dropdown-item">Fornecedor</a>
              <a href="formularios/historico_fornecedor.php" class="dropdown-item">Historico Fornecedor</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">people</i>
              <p>Funcionarios</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/funcionarios.php" class="dropdown-item">Funcionarios</a>
              <a href="formularios/historico_funcionario.php" class="dropdown-item">Historico Funcionarios</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">account_box</i>
              <p>Representantes</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/representantes.php" class="dropdown-item">Representantes</a>
              <a href="formularios/historico_representantes.php" class="dropdown-item">Historico Representantes</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">trending_up</i>
              <p>Entrada Ferramentas</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/entrada_ferramentas.php" class="dropdown-item">Entrada Ferramentas</a>
              <a href="#" class="dropdown-item">Historico Entrada Ferramentas</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">create</i>
              <p>Cadastros</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/add_usuario.php" class="nav-link dropdown-item">Cadastro de Usuários</a>
              <a href="formularios/add_descricao_pagamento.php" class="nav-link dropdown-item">Descrição de Pagamento</a>
              <a href="formularios/add_conta.php" class="dropdown-item">Adicionar Conta Bancaria</a>
              <a href="formularios/add_categoria.php" class="dropdown-item">Adicionar Categoria</a>
              <a href="formularios/add_descricao_impostos_encargos.php" class="nav-link dropdown-item">Descrição de Impostos e Encargos</a>
              <a href="formularios/add_impostos_encargos.php" class="dropdown-item">Adicionar Impostos e Encargos</a>
              <a href="formularios/add_equipe.php" class="nav-link dropdown-item">Colaboradores</a>
              <a href="formularios/add_fornecedor.php" class="nav-link dropdown-item">Adicionar Fornecedor</a>
              <a href="formularios/add_representantes.php" class="nav-link dropdown-item">Adicionar Representantes</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- Fim Menu -->
    <!-- Navbar/Header -->
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Dashboard</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="sair.php" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="sair.php">Sair</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- Fim header -->
<!--Incluir bibliotecas-->
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
<!--FIM Incluir bibliotecas-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>