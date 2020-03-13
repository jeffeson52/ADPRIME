<?php
include("./arquivos_upload/db.php");

$id = filter_input(INPUT_GET, 'apagar', FILTER_SANITIZE_NUMBER_INT);

$consulta = mysql_query("SELECT * FROM usuarios, arquivos WHERE id_arquivo = '$id' ");
        if ($resultado = mysql_fetch_array($consulta)){
          do {
            $deleta = mysql_query("DELETE FROM arquivos WHERE id_arquivo = '$id'");
            header("location: listar_arquivos.php?id=".$resultado["fk_id_usuario"] ." ");
           }
          while($resultado = mysql_fetch_array($consulta));
          } 
?>