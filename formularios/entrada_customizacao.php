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
    function fMasc(objeto, mascara) {
      obj = objeto
      masc = mascara
      setTimeout("fMascEx()", 1)
    }

    function fMascEx() {
      obj.value = masc(obj.value)
    }

    function mTel(tel) {
      tel = tel.replace(/\D/g, "")
      tel = tel.replace(/^(\d)/, "($1")
      tel = tel.replace(/(.{3})(\d)/, "$1)$2")
      if (tel.length == 9) {
        tel = tel.replace(/(.{1})$/, "-$1")
      } else if (tel.length == 10) {
        tel = tel.replace(/(.{2})$/, "-$1")
      } else if (tel.length == 11) {
        tel = tel.replace(/(.{3})$/, "-$1")
      } else if (tel.length == 12) {
        tel = tel.replace(/(.{4})$/, "-$1")
      } else if (tel.length > 12) {
        tel = tel.replace(/(.{4})$/, "-$1")
      }
      return tel;
    }

    function mCNPJ(cnpj) {
      cnpj = cnpj.replace(/\D/g, "")
      cnpj = cnpj.replace(/^(\d{2})(\d)/, "$1.$2")
      cnpj = cnpj.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3")
      cnpj = cnpj.replace(/\.(\d{3})(\d)/, ".$1/$2")
      cnpj = cnpj.replace(/(\d{4})(\d)/, "$1-$2")
      return cnpj
    }
  </script>
  <script type="text/javascript">
    function mascara(o, f) {
      v_obj = o
      v_fun = f
      setTimeout("execmascara()", 1)
    }

    function execmascara() {
      v_obj.value = v_fun(v_obj.value)
    }

    function mreais(v) {
      v = v.replace(/\D/g, "")
      v = v.replace(/(\d{2})$/, ",$1")
      v = v.replace(/(\d+)(\d{3},\d{2})$/g, "$1.$2")
      return v
    }
  </script>
</head>

<body>
  <div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add_entrada_customizacao">Adicionar Entrada Customização</button>
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
        <th>Customização</th>
        <th>Tempo em Horas</th>
        <th>Ferramenta</th>
        <th>Empresa</th>
        <th>Valor Planejado</th>
        <th>Data Planejada</th>
        <th>Descrição Customização</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      //Mexer Banco de dados
      $result_diario = "SELECT * FROM entrada_customizacao";
      $resultado_diario = mysqli_query($conn, $result_diario);
      while ($row_diario = mysqli_fetch_assoc($resultado_diario)) {
        ?>
        <tr>
          <?php $id = $row_diario['ID']; ?>
          <td><?php echo $row_diario['customizacao']; ?></td>
          <td><?php echo $row_diario['tempo_horas']; ?> Horas</td>
          <td><?php echo $row_diario['ferramenta']; ?></td>
          <td><?php echo $row_diario['empresa']; ?></td>
          <td><?php echo $row_diario['valor_planejamento']; ?></td>
          <td><?php echo $row_diario['data_planejamento']; ?></td>
          <td><?php echo $row_diario['observacao']; ?></td>
          <td>
          <a href="receber_customizacao.php?ID=<?php echo $id; ?>"><button class="btn btn-success">Receber</button></a>
          </td>
        </tr>
      <?php
      }
      ?>
    <tbody>
  </table>
  <div class="modal fade" id="add_entrada_customizacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_entrada_customizacaoLabel">Entrada Customização</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="valida_entrada_customizacao.php" method="POST">
            <div class="form-group">
              <label>Customização:</label>
              <input type="text" name="customizacao" class="form-control" placeholder="Digite a Customização">
            </div>
            <div class="form-group">
              <label>Tempo em Horas</label>
              <input type="number" class="form-control" name="tempo_horas" placeholder="Digite o Tempo em Horas">
            </div>
            <div class="form-group">
              <label>Ferramenta:</label>
              <select class="form-control" name="ferramenta">
                <option value="" selected>Digite a Empresa</option>
                <option value="fives">E-5s</option>
                <option value="auditorias">E-Auditorias</option>
                <option value="vda">E-VDA</option>
                <option value="assitec">E-Assitec</option>
                <option value="projetos">E-Projetos</option>
                <option value="connect">E-Connect</option>
                <option value="tools">E-Tools</option>
                <option value="icalled">iCalled</option>
              </select>
            </div>
            <div class="form-group">
              <label>Empresa:</label>
              <select name="empresa" class="form-control" id="empresa">
                <option value="" selected>Selecione uma Empresa</option>
                <?php
                $result = mysqli_query($conn, "SELECT razao_social FROM cadastrar_empresa");
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <option value="<?php echo ($row['razao_social']); ?>"><?php echo ($row['razao_social']); ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Valor Planejado:</label>
              <input type="text" name="valor_planejamento" class="form-control" id="valor_planejamento" onkeypress="mascara(this,mreais)" size="20" />
            </div>
            <div class="form-group">
              <label>Data Planejada:</label>
              <input type="date" name="data_planejamento" class="form-control" id="data_planejamento">
            </div>
            <div class="form-group">
              <label>Descrição Customização:</label>
              <textarea name="observacao" class="form-control" id="observacao" placeholder="Descrição Customização"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <input type="submit" name="add_entrada_customizacao" id="add_entrada_customizacao" value="Salvar" class="btn btn-primary">
        </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>