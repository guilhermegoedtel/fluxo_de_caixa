<?php
session_start();
if(!isset($_SESSION['autenticado'])){
    header("location: ../index.php");
    session_destroy();
}
include_once("conectar.php");
?>
<!Doctype html>
<head>
<meta charset="utf-8">
<!--Script's para mascaras-->
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
<!--Fim Script's para mascaras-->
</head>
<body>
<form action="valida_empresa.php" method="POST">
<lable>Razão Social:   </lable><input type="razao_social" name="razao_social" placeholder="Razão Social" required>
<lable>Nome Fantasia:  </lable><input type="nome_fantasia" name="nome_fantasia" placeholder="Nome Fantasia" required>
<lable>CNPJ:           </lable><input type="text" name="cnpj" placeholder="CNPJ" onkeydown="javascript: fMasc( this, mCNPJ );" required>
<lable>Logotipo:       </lable><input type="file" name="logotipo" placeholder="Logotipo" required>
<lable>Endereço:       </lable><input type="text" name="endereco" placeholder="Endereço" required>
<lable>Número:         </lable><input type="number" name="numero" placeholder="Número" pattern="[0-9]+" required>
<lable>Complemento:    </lable><input type="text" name="complemento" placeholder="Complemento">
<lable>Bairro:         </lable><input type="text" name="bairro" placeholder="Bairro" required>
<lable>Estado:         </lable>
<select id="estado" name="estado">
    <option value="">Selecione um estado</option>
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
<lable>Cidade:         </lable><input type="text" name="cidade" placeholder="Cidade" required>
<lable>Responsável:    </lable><input type="text" name="responsavel" placeholder="Responsável" required>
<lable>Telefone Fixo:  </lable><input type="text" name="telefone" placeholder="Telefone Fixo" onkeydown="javascript: fMasc( this, mTel );" required>
<lable>Celular:        </lable><input type="text" name="celular" placeholder="Celular" onkeydown="javascript: fMasc( this, mTel );">
<lable>Email:          </lable><input type="email" name="email" placeholder="Email" required>
<lable>Latitude:       </lable><input type="number" name="latitude" placeholder="Latitude" required>
<lable>Longitude:      </lable><input type="number" name="longitude" placeholder="Longitude" required>
<input type="submit" value="Cadastrar Empresa">
<button><a href="../index.php">Cancelar</a></button>
</form>
</body>
</html>