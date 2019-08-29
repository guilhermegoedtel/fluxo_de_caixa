<?php
session_start();
include_once("session.php");
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="assents/css/simple-sidebar.css" rel="stylesheet">
<link href="assents/css/material-dashboard.css" rel="stylesheet">
<!--<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />-->
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
</head>
<body>
<!--Novo-->
<div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo">
        <center><button type="button" class="btn btn-success"><a href="#" class="simple-text logo-normal" style="color:white">
          Olá, <?php echo $responsavel;?>
        </a></button></center>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Empresas</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/add_empresa.php" class="dropdown-item">Adicionar Empresa</a>
              <a href="formularios/empresas_pessoal.php" class="nav-link dropdown-item">Ver empresas cadastradas</a>
              <a href="formularios/todas_empresas.php" class="dropdown-item">Ver empresas já cadastradas</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Videos</p>
            </a>
            <div class="dropdown-menu">
              <a href="videos.php" class="nav-link dropdown-item">Videos para apresentação</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Videos</p>
            </a>
            <div class="dropdown-menu">
              <a href="videos.php" class="nav-link dropdown-item">Videos para apresentação</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Ferramentas</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/ferramentas.php" class="nav-link dropdown-item">Gerenciar Ferramentas</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Comissão</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/comissao.php" class="nav-link dropdown-item">Comissão de vendas</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Visitas</p>
            </a>
            <div class="dropdown-menu">
              <a href="resumos/calendario_de_visitas.php" class="nav-link dropdown-item">Calendario de Visitas</a>
              <a href="formularios/add_visita.php" class="nav-link dropdown-item">Cadastrar nova Visita</a>
              <a href="formularios/acompanha_visita.php" class="nav-link dropdown-item">Acompanhamento de visitas</a>
            </div>
          </li>
          <li class="dropdown">
            <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="material-icons">calendar_today</i>
              <p>Propostas</p>
            </a>
            <div class="dropdown-menu">
              <a href="formularios/propostas.php" class="nav-link dropdown-item">Salvar Proposta</a>
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
<!--Fim novo-->
<!--Velho
<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <br>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_empresa">Adicionar Empresa</button><br>
            ..<button type="button" class="btn btn-warning" onclick="location.href='formularios/empresas_pessoal.php'">Ver empresas cadastradas</button>
            ..<button type="button" class="btn btn-warning" onclick="location.href='formularios/todas_empresas.php'">Ver empresas já cadastradas</button><br>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#propostas">Propostas</button>
            ..<button type="button" class="btn btn-info" onclick="location.href='videos.php'">Ver Videos apresentação</button>
            ..<button type="button" class="btn btn-info" onclick="location.href='formularios/ferramentas.php'">Gerenciar Ferramentas</button>
            ..<button type="button" class="btn btn-info" onclick="location.href='formularios/comissao.php'">Comissão das vendas</button>
            ..<button type="button" class="btn btn-info" onclick="location.href='resumos/calendario_de_visitas.php'">Ver visitas agendadas</button>
            ..<button type="button" class="btn btn-info" data-toggle="modal" data-target="#visita">Cadastrar nova visita</button>
            ..<button type="button" class="btn btn-info" data-toggle="modal" data-target="#acompanhamento">Acompanhamento de visitas</button>
        </div>
    </div>
</div>
Fim velho-->
<!--
<div class="modal fade" id="add_empresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_empresaLabel">Cadastrar empresa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/valida_empresa.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Razão Social:</label>
                <input type="text" name="razao_social" class="form-control" id="razao_social" placeholder="Razão Social" required>
            </div>
            <div class="form-group">
                <label>Nome Fantasia:</label>
                <input type="text" name="nome_fantasia" class="form-control" id="nome_fantasia" placeholder="Nome Fantasia" required>
            </div>
            <div class="form-group">
                <label>CNPJ:</label>
                <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ" onkeydown="javascript: fMasc( this, mCNPJ );" required>
            </div>
            <div class="form-group">
                <label>Logotipo:</label>
                <input type="file" name="logotipo" class="form-control" id="logotipo" placeholder="Logotipo" required>
            </div>
            <div class="form-group">
                <label>Endereço:</label>
                <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço" required>
            </div>
            <div class="form-group">
                <label>Número:</label>
                <input type="number" name="numero" class="form-control" id="numero" placeholder="Número" pattern="[0-9]+" required>
            </div>
            <div class="form-group">
                <label>Complemento:</label>
                <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento">
            </div>
            <div class="form-group">
                <label>Bairro:</label>
                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" required>
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <select id="estado" name="estado" class="form-control">
                    <option value="" checked>Selecione um estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="form-group">
                <label>Cidade:</label>
                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade" required>
            </div>
            <div class="form-group">
                <label>Responsável:</label>
                <input type="text" name="responsavel" class="form-control" id="responsavel" placeholder="Responsável" required>
            </div>
            <div class="form-group">
                <label>Telefone Fixo:</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Telefone Fixo" onkeydown="javascript: fMasc( this, mTel );" required>
            </div>
            <div class="form-group">
                <label>Celular:</label>
                <input type="text" name="celular" class="form-control" id="celular" placeholder="Celular" onkeydown="javascript: fMasc( this, mTel );" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label>Latitude:</label>
                <input type="number" name="latitude" class="form-control" id="latitude" placeholder="Latitude" required>
            </div>
            <div class="form-group">
                <label>Longitude:</label>
                <input type="number" name="longitude" class="form-control" id="longitude" placeholder="Longitude" required>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_empresa" id="add_empresa" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
-->
<!--
<div class="modal fade" id="acompanhamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="acompanhamentoLabel">Acompanhamento de visitas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="formularios/valida_acompanhamento.php" method="POST">
         enctype="multipart/form-data"
            <div class="form-group">
                <label>Responsavel:</label>
                <input type="text" name="responsavel" class="form-control" id="razao_social" value="<?php //echo $responsavel; ?>" disabled="disabled" required>
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="empresa" class="form-control" id="empresa">
                    <option value="" selected>Selecione uma empresa</option>
                    <?php
                    //$result = mysqli_query($conn,"SELECT nome_fantasia FROM cadastrar_empresa where responsavel='$responsavel'");
                    //while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php //echo($row['nome_fantasia']);?>"><?php //echo($row['nome_fantasia']);?></option>
                    <?php
                    //}
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Resumo da Visita atual:</label>
                <textarea name="mensagem" class="form-control" id="mensagem" placeholder="Resumo da Visita"></textarea>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="acompanhamento" id="acompanhamento" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>

-->
<!--

<div class="modal fade" id="visita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="visitaLabel">Adicionar visita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="formularios/valida_visita.php" method="POST">
         enctype="multipart/form-data"
            <div class="form-group">
                <label>Responsavel:</label>
                <input type="text" name="responsavel" class="form-control" id="razao_social" value="<?php //echo $responsavel; ?>" disabled="disabled" required>
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="empresa" class="form-control" id="empresa">
                    <option value="" selected>Selecione uma empresa</option>
                    <?php
                    //$result = mysqli_query($conn,"SELECT nome_fantasia FROM cadastrar_empresa where responsavel='$responsavel'");
                    //while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php //echo($row['nome_fantasia']);?>"><?php //echo($row['nome_fantasia']);?></option>
                    <?php
                    //}
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Data da visita:</label>
                <input type="datetime-local" name="data" class="form-control" id="data" required>
            </div>
            <div class="form-group">
                <label>Selecione uma cor:</label>
                <input type="color" name="cor" class="form-control" id="cor" required>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="visita" id="visita" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>

-->
<!--

<div class="modal fade" id="propostas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="propostasLabel">Cadastrar Propostas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="formularios/valida_proposta.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Responsavel:</label>
                <input type="text" name="responsavel" class="form-control" id="razao_social" value="<?php //echo $responsavel; ?>" disabled="disabled" required>
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="empresa" class="form-control" id="empresa">
                    <option value="" selected>Selecione uma empresa</option>
                    <?php
                    //$result = mysqli_query($conn,"SELECT nome_fantasia FROM cadastrar_empresa where responsavel='$responsavel'");
                    //while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php //echo($row['nome_fantasia']);?>"><?php //echo($row['nome_fantasia']);?></option>
                    <?php
                    //}
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Proposta:</label>
                <input type="file" name="propostas" class="form-control" id="propostas" placeholder="Proposta" required>
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="propostas" id="propostas" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
-->
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