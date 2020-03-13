<?php
$Usuario = "root";
$Senha = "";
$Host = "localhost";
$Database = "adprime2";

if (mysql_connect($Host, $Usuario, $Senha)){
    mysql_select_db($Database);
    }
?>