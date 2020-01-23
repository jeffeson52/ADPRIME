<?php
    session_start();
    unset($_SESSION['id_usuario']);
    header("location: ../tela_login/login.php");
?>