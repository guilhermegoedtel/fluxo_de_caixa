<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");
$responsavel = $_SESSION['nome'];
$mensagem = $_SESSION['msg'];
echo $mensagem;
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
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#status_ferramenta">Adicionar Status</button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <button type="button" class="btn btn-info" onclick="location.href='../principal_representantes.php'">Voltar</button>
            </li>
          </ul>
        </div>
    </nav>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
      <th>Status</th>
      <th>Empresa</th>
      <th>Ferramenta</th>
      <th>Período</th>
      <th>Ações</th>
    </tr>  
  </thead>
  <tbody>
    <?php
    $result = mysqli_query($conn,"SELECT ID, status, empresa, ferramentas, periodo FROM contratos where responsavel='$responsavel'");
    while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo($row['status']);?></td>
    <td><?php echo($row['empresa']);?></td>
    <td><?php echo($row['ferramentas']);?></td>
    <td><?php echo($row['periodo']);?></td>
    <td>
    <a href="altera_status.php?ID=<?php echo($row['ID']); ?>"><button class="btn btn-warning">Alterar</button></a>
    <a href="deleta_status.php?ID=<?php echo($row['ID']); ?>"><button class="btn btn-danger">Excluir</button></a>
    </td>
    </tr>
    <?php
    }
    ?> 
  <tbody>
</table>

<div class="modal fade" id="status_ferramenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="status_ferramentaLabel">Adicionar Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="valida_ferramentas.php" method="POST">
            <div class="form-group">
                <label>Status:</label>
                <select name="status" class="form-control" id="status">
                <option value="" selected>Status da ferramenta</option>
                <option value="Piloto">Piloto</option>
                <option value="Contrato">Contrato</option>
                <option value="Sem contrato">Sem contrato</option>
                </select>
            </div>
            <div class="form-group">
                <label>Empresa:</label>
                <select name="empresa" class="form-control" id="empresa">
                    <option value="" selected>Selecione uma empresa</option>
                    <?php
                    $result = mysqli_query($conn,"SELECT nome_fantasia FROM cadastrar_empresa where responsavel='$responsavel'");
                    while($row = mysqli_fetch_array($result)){
                    ?>
                    <option value ="<?php echo($row['nome_fantasia']);?>"><?php echo($row['nome_fantasia']);?></option>
                    <?php
                    }
                    ?> 
                </select>
            </div>
            <div class="form-group">
                <label>Ferramentas:</label>
                <select name="ferramentas" class="form-control" id="ferramentas">
                <option value="" selected>Ferramentas</option>
                <option value="e-5S">E-5S</option>
                <option value="e-Auditorias">E-Auditorias</option>
                <option value="VDA">VDA</option>
                <option value="e-Assistec">E-Assistec</option>
                <option value="e-Projetos">E-Projetos</option>
                <option value="e-Connect">E-Connect</option>
                <option value="e-RNC">E-RNC</option>
                <option value="e-Tools">E-Tools</option>
                <option value="iCalled">iCalled</option>
                </select>
            </div>
            <div class="form-group">
                <label>Selecione o periodo de contrato:</label>
                <select name="periodo" class="form-control" id="periodo">
                <option value="-" selected>Sem Contrato</option>
                <option value="Piloto">Piloto</option>
                <option value="1 Mês">1 Mês</option>
                <option value="2 Meses">2 Meses</option>
                <option value="3 Meses">3 Meses</option>
                <option value="4 Meses">4 Meses</option>
                <option value="5 Meses">5 Meses</option>
                <option value="6 Meses">6 Meses</option>
                <option value="7 Meses">7 Meses</option>
                <option value="8 Meses">8 Meses</option>
                <option value="9 Meses">9 Meses</option>
                <option value="10 Meses">10 Meses</option>
                <option value="11 Meses">11 Meses</option>
                <option value="12 Meses">12 Meses</option>
                <option value="13 Meses">13 Meses</option>
                <option value="14 Meses">14 Meses</option>
                <option value="15 Meses">15 Meses</option>
                <option value="16 Meses">16 Meses</option>
                <option value="17 Meses">17 Meses</option>
                <option value="18 Meses">18 Meses</option>
                <option value="19 Meses">19 Meses</option>
                <option value="20 Meses">20 Meses</option>
                <option value="21 Meses">21 Meses</option>
                <option value="22 Meses">22 Meses</option>
                <option value="23 Meses">23 Meses</option>
                <option value="24 Meses">24 Meses</option>
                <option value="25 Meses">25 Meses</option>
                <option value="26 Meses">26 Meses</option>
                <option value="27 Meses">27 Meses</option>
                <option value="28 Meses">28 Meses</option>
                <option value="29 Meses">29 Meses</option>
                <option value="30 Meses">30 Meses</option>
                <option value="31 Meses">31 Meses</option>
                <option value="32 Meses">32 Meses</option>
                <option value="33 Meses">33 Meses</option>
                <option value="34 Meses">34 Meses</option>
                <option value="35 Meses">35 Meses</option>
                <option value="36 Meses">36 Meses</option>
                <option value="37 Meses">37 Meses</option>
                <option value="38 Meses">38 Meses</option>
                <option value="39 Meses">39 Meses</option>
                <option value="40 Meses">40 Meses</option>
                <option value="41 Meses">41 Meses</option>
                <option value="42 Meses">42 Meses</option>
                <option value="43 Meses">43 Meses</option>
                <option value="44 Meses">44 Meses</option>
                <option value="45 Meses">45 Meses</option>
                <option value="46 Meses">46 Meses</option>
                <option value="47 Meses">47 Meses</option>
                <option value="48 Meses">48 Meses</option>
                </select>
              </div>
              <div class="form-group">
                <label>Data Inicial:</label>
                <input type="date" name="data_inicial" class="form-control" id="data_inicial" required>
              </div>
              <div class="form-group">
                <label>Data Final:</label>
                <input type="date" name="data_final" class="form-control" id="data_final" required>
              </div>
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <input type="submit" name="status_ferramenta" id="status_ferramenta" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>