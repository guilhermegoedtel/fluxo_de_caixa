<?php
session_start();
include '../includes/session.php';
include_once("conectar.php");

$mes = $_POST['mes'];
$ano = $_POST['ano'];
$es = $_POST['es'];
$categoria = $_POST['categoria'];
$soma_valor = '0';

if($es == "tudo"){
    if($mes=='' or $ano==''){
        $_SESSION['msg'] = "<p style='color:red;'>Selecione um mês e ano !</p>";
        header("Location: mensal.php");
    
    }elseif($categoria == ''){
        $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='entrada'";
        $resultado_diario = mysqli_query($conn, $result_diario);
        while($row_diario = mysqli_fetch_assoc($resultado_diario)){
            echo "dia: " . $row_diario['dia'] . "<br>";
            echo "mes: " . $row_diario['mes'] . "<br>";
            echo "ano: " . $row_diario['ano'] . "<br>";
            echo "categoria: " . $row_diario['categoria'] . "<br>";
            echo "Entrada: " . $row_diario['es'] . "<br>";
            //mudar
            $guarda1 = $row_diario['valor'];
            //mudar
            $valor2 = number_format($guarda1/100,2,",",".");
            //mudar
            echo "valor: " . $valor2 . "<br>";
            //mudar
            $soma_valor1=$soma_valor1 + $row_diario['valor'];
            echo "observação: " . $row_diario['obs'] . "<br>";
            echo "foto: " . $row_diario['foto'] . "<br>";
            echo "Data de cadastro: " . $row_diario['created'] . "<br><hr><br>";
        }
    }else{
        $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='entrada' and categoria='$categoria'";
        $resultado_diario = mysqli_query($conn, $result_diario);
        while($row_diario = mysqli_fetch_assoc($resultado_diario)){
            echo "dia: " . $row_diario['dia'] . "<br>";
            echo "mes: " . $row_diario['mes'] . "<br>";
            echo "ano: " . $row_diario['ano'] . "<br>";
            echo "$categoria: " . $row_diario['categoria'] . "<br>";
            echo "Entrada: " . $row_diario['es'] . "<br>";
            //mudar
            $guarda1 = $row_diario['valor'];
            //mudar
            $valor2 = number_format($guarda1/100,2,",",".");
            //mudar
            echo "valor: " . $valor2 . "<br>";
            $soma_valor1=$soma_valor1 + $row_diario['valor'];
            echo "observação: " . $row_diario['obs'] . "<br>";
            echo "foto: " . $row_diario['foto'] . "<br>";
            echo "Data de cadastro: " . $row_diario['created'] . "<br><hr><br>";
        }
/*Final 1º Ciclo*/    
    
if($categoria == ''){
    $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='saida'";
    $resultado_diario = mysqli_query($conn, $result_diario);
    while($row_diario = mysqli_fetch_assoc($resultado_diario)){
        echo "dia: " . $row_diario['dia'] . "<br>";
        echo "mes: " . $row_diario['mes'] . "<br>";
        echo "ano: " . $row_diario['ano'] . "<br>";
        echo "categoria: " . $row_diario['categoria'] . "<br>";
        echo "Saida: " . $row_diario['es'] . "<br>";
        //mudar
        $guarda2 = $row_diario['valor'];
        //mudar
        $valor3 = number_format($guarda2/100,2,",",".");
        //mudar
        echo "valor: " . $valor3 . "<br>";
        //mudar
        $soma_valor2=$soma_valor2 + $row_diario['valor'];
        echo "observação: " . $row_diario['obs'] . "<br>";
        echo "foto: " . $row_diario['foto'] . "<br>";
        echo "Data de cadastro: " . $row_diario['created'] . "<br><hr><br>";
    }
}else{
    $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='saida' and categoria='$categoria'";
    $resultado_diario = mysqli_query($conn, $result_diario);
    while($row_diario = mysqli_fetch_assoc($resultado_diario)){
        echo "dia: " . $row_diario['dia'] . "<br>";
        echo "mes: " . $row_diario['mes'] . "<br>";
        echo "ano: " . $row_diario['ano'] . "<br>";
        echo "$categoria: " . $row_diario['categoria'] . "<br>";
        echo "Saida: " . $row_diario['es'] . "<br>";
        //mudar
        $guarda1 = $row_diario['valor'];
        //mudar
        $valor2 = number_format($guarda1/100,2,",",".");
        //mudar
        echo "valor: " . $valor2 . "<br>";
        $soma_valor1=$soma_valor1 + $row_diario['valor'];
        echo "observação: " . $row_diario['obs'] . "<br>";
        echo "foto: " . $row_diario['foto'] . "<br>";
        echo "Data de cadastro: " . $row_diario['created'] . "<br><hr><br>";
    }    
    

$valor = number_format($soma_valor/100,2,",",".");
echo "Valor total de entrada é: " . $valor; 

$valor = number_format($soma_valor/100,2,",",".");
echo "Valor total de saida é: " . $valor; 
  
$valor = number_format($soma_valor/100,2,",",".");
echo "Valor total no caixa é: " . $valor; 
}









     























/*Se soma tudo para depois subitrair da entrada - saida*/
}elseif ($es == "entrada") {
    if($mes=='' or $ano==''){
        $_SESSION['msg'] = "<p style='color:red;'>Selecione um dia, mês e ano !</p>";
        header("Location: mensal.php");

    }elseif($categoria == ''){
        $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='$es'";
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
        $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='$es' and categoria='$categoria'";
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
    echo "Valor total de entrada: " . $valor;
    }






/*Se for saida(Gasto) soma tudo para depois subitrair da entrada*/
}else{
    if($mes=='' or $ano==''){
        $_SESSION['msg'] = "<p style='color:red;'>Selecione um dia, mês e ano !</p>";
        header("Location: mensal.php");

    }elseif($categoria == ''){
        $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='$es'";
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
        $result_diario = "SELECT * FROM inserir_dados where mes='$mes' and ano='$ano' and es='$es' and categoria='$categoria'";
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
    echo "Valor total de saida: " . $valor;
    }
?>