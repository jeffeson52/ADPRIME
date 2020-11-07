<?php
include("./arquivos_upload/db.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$consulta = mysql_query("SELECT * FROM usuarios WHERE id_usuario = '$id' ");
        if ($resultado = mysql_fetch_array($consulta)){
          do {
            $deleta = mysql_query("DELETE FROM telefone WHERE fk_id_usuario = '$id' ");
            $deleta = mysql_query("DELETE FROM endereco WHERE fk_id_usuario = '$id' ");
            $deleta = mysql_query("DELETE FROM dadosgerais WHERE fk_id_usuario = '$id' ");
            $deleta = mysql_query("DELETE FROM arquivos WHERE fk_id_usuario = '$id' ");
            $deleta = mysql_query("DELETE FROM usuarios WHERE id_usuario = '$id'");
            header("location: listausuarios.php ");
           }
          while($resultado = mysql_fetch_array($consulta));
          } 

?>

