<?php
    session_start();
    $_SESSION['insricao-msg'] = true;
    header("Location: aprender_modulos.php");
?>