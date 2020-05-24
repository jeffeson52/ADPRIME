<?php
$Usuario = "root";
$Senha = "";
$Host = "localhost";
$Database = "adprime3";

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');

if (mysql_connect($Host, $Usuario, $Senha)){
    mysql_select_db($Database);
    }
?>