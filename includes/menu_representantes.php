<?php
session_start();
include_once("session.php");
include_once("conectar.php");
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="assents/css/style.css" media="screen" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="css/simple-sidebar.css" rel="stylesheet">
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

<div class="d-flex" id="wrapper">
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <br>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_empresa">Adicionar Empresa</button><br>
            <button type="button" class="btn btn-warning" onclick="location.href='formularios/empresas_pessoal.php'">Ver empresas cadastradas</button>
            <button type="button" class="btn btn-warning" onclick="location.href='formularios/todas_empresas.php'">Ver empresas já cadastradas</button><br>
            <button type="button" class="btn btn-info" onclick="location.href='propostas.php'">Propostas</button>
            <button type="button" class="btn btn-info" onclick="location.href='videos.php'">Ver Videos apresentação</button>
            <button type="button" class="btn btn-info" onclick="location.href='empresas.php'">Gerencia Empresas</button>
        </div>
    </div>
</div>
<!--
<div id="tela">
    <nav class="navigation">
        <ul class="mainmenu">
            <li><a href="">Empresas</a>
                <ul class="submenu">
                    <li><button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_empresa">
                    Adicionar Empresa
                    </button></li>
                    <li><button type="button" class="btn btn-warning" onclick="location.href='formularios/empresas_pessoal.php'">Ver empresas cadastradas</button></li>
                    <li><button type="button" class="btn btn-warning" onclick="location.href='formularios/todas_empresas.php'">Ver empresas já cadastradas</button></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
-->
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>