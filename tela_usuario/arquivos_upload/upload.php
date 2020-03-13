<?php
include("db.php");
session_start();

if (isset($_FILES["Arquivo"]) && isset($_SESSION['id_usuario'])){
    $Arquivo = $_FILES["Arquivo"];
    $Pasta_Destino = "arquivos/";
    $Arquivo_Nome = $Arquivo['name'];
    $id_usuario = $_SESSION['id_usuario'];
    move_uploaded_file($Arquivo['tmp_name'], $Pasta_Destino . $Arquivo_Nome);
    mysql_query("INSERT INTO `arquivos` (`fk_id_usuario`,`arquivo_nome`,`arquivo_local`) VALUES ('$id_usuario','$Arquivo_Nome','$Pasta_Destino')");
    header("Location: ../enviados.php");
}
    
?>