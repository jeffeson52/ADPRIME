<?php

$file = $_GET['file'];
// pega o endereço do arquivo
header("Content-Type: application/save"); 
header("Content-Length:".filesize($file)); 
header('Content-Disposition: attachment; filename="' . $file . '"'); 
header("Content-Transfer-Encoding: binary");
header('Expires: 0'); 
header('Pragma: no-cache'); 
//le o arquivo e envia
$fp = fopen("$file", "r"); 
fpassthru($fp); 
fclose($fp);
// chamar assim na página html <a href=download.php?file=.$resultado['arquivo_local'] . $resultado['arquivo_nome'] >Arquivo</a>
?>

