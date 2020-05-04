<?php
include("./arquivos_upload/db.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

session_start();
$_SESSION['id_user'] = $id;
header("Location: envia_arquivo_adm2.php");
?>