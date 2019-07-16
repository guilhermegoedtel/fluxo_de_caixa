<?php
if(!isset($_SESSION['autenticado'])){
    header("location: ../index.php");
    session_destroy();
}
?>