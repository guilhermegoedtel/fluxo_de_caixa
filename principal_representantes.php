<?php
session_start();
if(!isset($_SESSION['autenticado'])){
    header("location: index.php");
    session_destroy();
}
?>
<!DOCtype html>
<head>
<meta charset="utf-8">
<title>Fluxo de caixa</title>
</head>
<body>
<?php
include 'includes/header.php';
include 'includes/menu_representantes.php';
include 'includes/footer.php';
?>
</body>
</html>