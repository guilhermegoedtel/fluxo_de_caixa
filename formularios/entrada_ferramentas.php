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
	v=v.replace(/\D/g,"")
	v=v.replace(/(\d{2})$/,",$1")
	v=v.replace(/(\d+)(\d{3},\d{2})$/g,"$1.$2")
	return v
}
</script>
</head>
<body>
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_entrada_ferramentas">Adicionar Entrada Ferramentas</button>
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
      <th>Inicio</th>
      <th>Periodo</th>
      <th>Termino</th>
      <th>Empresa</th>
      <th>Representante</th>
      <th>%</th>
      <th>E-5s</th>
      <th>E-Auditorias</th>
      <th>VDA</th>
      <th>E-Assitec</th>
      <th>E-Projetos</th>
      <th>E-Connect</th>
      <th>E-Tools</th>
      <th>iCalled</th>
      <th>% Pagar</th>
      <th>Ações</th>
    </tr>  
  </thead>
  <tbody>
<?php
//Mexer Banco de dados
$result_diario = "SELECT * FROM entrada_ferramenta";
$resultado_diario = mysqli_query($conn, $result_diario);
while($row_diario = mysqli_fetch_assoc($resultado_diario)){
?>
    <tr>
      <?php $id = $row_diario['ID']; ?>
      <td><?php echo $row_diario['inicio']; ?></td>
      <td><?php echo $row_diario['periodo']; ?> Meses</td>
      <td><?php echo $row_diario['termino']; ?></td>
      <td><?php echo $row_diario['empresa']; ?></td>
      <td><?php echo $row_diario['representante']; ?></td>
      <?php $porcentagem = $row_diario['porcentagem']; ?>
      <td><?php echo $porcentagem; ?></td>
      <?php $fives = $row_diario['fives']; ?>
      <?php $fives1 = number_format($fives/100,2,",","."); ?>
      <td><?php echo $fives1; ?></td>
      <?php $auditorias = $row_diario['auditorias']; ?>
      <?php $auditorias1 = number_format($auditorias/100,2,",","."); ?>
      <td><?php echo $auditorias1; ?></td>
      <?php $vda = $row_diario['vda']; ?>
      <?php $vda1 = number_format($vda/100,2,",","."); ?>
      <td><?php echo $vda1; ?></td>
      <?php $assitec = $row_diario['assitec']; ?></td>
      <?php $assitec1 = number_format($assitec/100,2,",","."); ?>
      <td><?php echo $assitec1; ?></td>
      <?php $projetos = $row_diario['projetos']; ?>
      <?php $projetos1 = number_format($projetos/100,2,",","."); ?>
      <td><?php echo $projetos1; ?></td>
      <?php $connect = $row_diario['connect']; ?>
      <?php $connect1 = number_format($connect/100,2,",","."); ?>
      <td><?php echo $connect1; ?></td>
      <?php $tools = $row_diario['tools']; ?>
      <?php $tools1 = number_format($tools/100,2,",","."); ?>
      <td><?php echo $tools1; ?></td>
      <?php $icalled = $row_diario['icalled']; ?>
      <?php $icalled1 = number_format($icalled/100,2,",","."); ?>
      <td><?php echo $icalled1; ?></td>
      <?php
        if($fives == ''){
            $fives = 0;
        }else if($auditorias == ''){
            $auditorias = 0;
        }else if($vda == ''){
            $vda = 0;
        }elseif($assitec == ''){
            $assitec = 0;
        }elseif($projetos == ''){
            $projetos = 0;
        }elseif($connect == ''){
            $connect = 0;
        }elseif($tools == ''){
            $tools = 0;
        }elseif($icalled == ''){
            $icalled = 0;
        }
        $total = ($fives + $auditorias + $vda + $assitec + $projetos + $connect + $tools + $icalled);
        $total = (($total * $porcentagem)/100);
        $total = number_format($total/100,2,",",".");
      ?>
      <td><?php echo $total; ?></td>
      <td><a href="pagar_porcentagem_representante.php?ID=<?php echo $id; ?>"><button class="btn btn-success">Pagar</button></a></td>
    </tr>
<?php
}
?>
<tbody>
</table>
<div class="modal fade" id="add_entrada_ferramentas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add_entrada_ferramentasLabel">Entrada Ferramentas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_entrada_ferramentas.php" method="POST">
            <div class="form-group">
                <label>Início:</label>
                <input type="date" name="inicio" class="form-control" placeholder="Digite o inicio do contrato">
            </div>
            <div class="form-group">
                <label>Periodo: (Meses)</label>
                <input type="number" class="form-control" name="periodo" placeholder="Digite o Periodo do Contrato" pattern="[0-9]+">
            </div>
            <div class="form-group">
                <label>Término:</label>
                <input type="date" class="form-control" name="termino" class="form-control" placeholder="Digite o Fim do Contrato">
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="empresa" class="form-control" id="empresa">
                    <option value="" selected>Selecione uma Empresa</option>
                    <?php
                    $result = mysqli_query($conn,"SELECT razao_social FROM cadastrar_empresa");
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php echo($row['razao_social']);?>"><?php echo($row['razao_social']);?></option>
                    <?php
                    }
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Representante:</label>
                <select name="representante" class="form-control" id="representante">
                    <option value="nao" selected>Não</option>
                    <?php
                    $result = mysqli_query($conn,"SELECT responsavel FROM representante");
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php echo($row['responsavel']);?>"><?php echo($row['responsavel']);?></option>
                    <?php
                    }
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Porcentagem(Caso tenha):</label>
                <input type="number" name="porcentagem" class="form-control" id="porcentagem" pattern="[0-9]+">
            </div>
            <div class="form-group">
                <label>E-5s:</label>
                <input type="text" name="fives" class="form-control" id="fives" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>E-Auditorias:</label>
                <input type="text" name="auditorias" class="form-control" id="auditorias" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>VDA:</label>
                <input type="text" name="vda" class="form-control" id="vda" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>E-Assitec:</label>
                <input type="text" name="assitec" class="form-control" id="assitec" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>E-Projetos:</label>
                <input type="text" name="projetos" class="form-control" id="projetos" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>E-Connect:</label>
                <input type="text" name="connect" class="form-control" id="connect" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
                <label>Icalled:</label>
                <input type="text" name="icalled" class="form-control" id="icalled" onkeypress="mascara(this,mreais)" size="20" />
            </div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="add_entrada_ferramentas" id="add_entrada_ferramentas" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>