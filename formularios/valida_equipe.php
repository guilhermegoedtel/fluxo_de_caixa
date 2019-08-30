<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$ID = $_POST['ID'];
$registro = $_POST['registro'];
$equipe = $_POST['equipe'];
$funcao = $_POST['funcao'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cnh = $_POST['cnh'];

$id = $ID + 1;

/*
echo $ID = $_POST['ID'];
echo $registro = $_POST['registro'];
echo $equipe = $_POST['equipe'];
echo $funcao = $_POST['funcao'];
echo $endereco = $_POST['endereco'];
echo $numero = $_POST['numero'];
echo $complemento = $_POST['complemento'];
echo $bairro = $_POST['bairro'];
echo $cidade = $_POST['cidade'];
echo $cnh = $_POST['cnh'];

echo $id = $ID + 1;
*/

// Pegando o tipo do arquivo
$arquivo = $_FILES["foto"]["name"];
$separa = explode(".",$arquivo);
$separa = array_reverse($separa);
$tipo = $separa[0];
// Salvado arquivo com qualquer nome
$nome = "$id".".".$tipo;
if(move_uploaded_file($_FILES['foto']['tmp_name'],'../foto_colaborador/'.$nome)){

$result_usuario = "INSERT INTO equipe(tipo_imagem, registro, equipe, funcao, endereco, numero, complemento, bairro, cidade, cnh, created)
VALUES('$tipo','$registro','$equipe', '$funcao','$endereco','$numero','$complemento','$bairro','$cidade','$cnh', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

}else{
    echo 'Arquivo não enviado';
}
header('Location: ../formularios/add_equipe.php');
?>