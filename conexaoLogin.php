<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "adprime";


    $conexao = mysqli_connect($servidor, $usuario, $senha, $db) or die ('Não foi possivel conectar');
?>