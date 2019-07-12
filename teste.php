<html>
<head>
</head>
<body>
<form action="#" method="post">
<input type="radio" name="informa" value="0">Entrada
<input type="radio" name="informa" value="1">saida
<input type="submit" value="Enviar dados">
</form>
</body>
</html>
<?php
$informa = $_POST['informa'];
if($informa == 0){
    echo "saida = 0";
}else{
    echo "entrada = 0";
}
?>