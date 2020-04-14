<?php
include("./arquivos_upload/db.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$consulta = mysql_query("SELECT * FROM usuarios WHERE id_usuario = '$id' ");
        if ($resultado = mysql_fetch_array($consulta)){
          do {
            $update = mysql_query("UPDATE usuarios SET status = 'Inativo' WHERE id_usuario = '$id' ");
            header("location: ativar_usuarios.php ");
           }
          while($resultado = mysql_fetch_array($consulta));
          } 
?>