<?php
session_start();
include '../includes/session.php';
?>
<!Doctype html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="ver_mensal.php" method="POST">
<input type="text" name="mes" placeholder="Digite o mês" required>
<input type="text" name="ano" placeholder="Digite o ano" required>
<br>
<select name="es">
    <option value="entrada">Entrada</option>
    <option value="saida">Saida</option>
    <option value="tudo" checked>Tudo</option>
</select>
<br>
<select name="categoria">
    <option value="" selected>Selecione uma categoria</option>
    <?php
        include_once("conectar.php");
        $result = mysqli_query($conn,"SELECT categoria FROM categoria");
        while($row = mysqli_fetch_array($result)){
    ?>
    <option value ="<?php echo($row['categoria']);?>"><?php echo($row['categoria']);?></option>
    <?php
    }
    ?> 
</select>
<br>
<input type="submit" value="Exibir dados mensal">
</form>
</body>
</html>