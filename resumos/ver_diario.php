<?php
session_start();
include_once("conectar.php");

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$es = $_POST['es'];
$categoria = $_POST['categoria'];
$soma_valor = '0';

if($dia=='' or $mes=='' or $ano==''){
    $_SESSION['msg'] = "<p style='color:red;'>Selecione um dia, mês e ano !</p>";
    header("Location: diario.php");
    
}elseif($categoria == ''){
    $result_diario = "SELECT * FROM inserir_dados where dia='$dia' and mes='$mes' and ano='$ano' and es='$es'";
    $resultado_diario = mysqli_query($conn, $result_diario);
    while($row_diario = mysqli_fetch_assoc($resultado_diario)){
        echo "dia: " . $row_diario['dia'] . "<br>";
        echo "mes: " . $row_diario['mes'] . "<br>";
        echo "ano: " . $row_diario['ano'] . "<br>";
        echo "categoria: " . $row_diario['categoria'] . "<br>";
        echo "$es: " . $row_diario['es'] . "<br>";
        $guarda = $row_diario['valor'];
        $valor1 = number_format($guarda/100,2,",",".");
        echo "valor: " . $valor1 . "<br>";
        $soma_valor=$soma_valor + $row_diario['valor'];
        echo "observação: " . $row_diario['obs'] . "<br>";
        echo "foto: " . $row_diario['foto'] . "<br>";
        echo "Data de cadastro: " . $row_diario['created'] . "<br><hr><br>";
    }
}else{
    $result_diario = "SELECT * FROM inserir_dados where dia='$dia' and mes='$mes' and ano='$ano' and es='$es' and categoria='$categoria'";
    $resultado_diario = mysqli_query($conn, $result_diario);
    while($row_diario = mysqli_fetch_assoc($resultado_diario)){
        echo "dia: " . $row_diario['dia'] . "<br>";
        echo "mes: " . $row_diario['mes'] . "<br>";
        echo "ano: " . $row_diario['ano'] . "<br>";
        echo "$categoria: " . $row_diario['categoria'] . "<br>";
        echo "$es: " . $row_diario['es'] . "<br>";
        $guarda = $row_diario['valor'];
        $valor1 = number_format($guarda/100,2,",",".");
        echo "valor: " . $valor1 . "<br>";
        $soma_valor=$soma_valor + $row_diario['valor'];
        echo "observação: " . $row_diario['obs'] . "<br>";
        echo "foto: " . $row_diario['foto'] . "<br>";
        echo "Data de cadastro: " . $row_diario['created'] . "<br><hr><br>";
    }
}
$valor = number_format($soma_valor/100,2,",",".");
echo "Valor total: " . $valor;
?>