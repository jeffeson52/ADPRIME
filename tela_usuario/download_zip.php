<?php

include("./arquivos_upload/db.php");

$id = filter_input(INPUT_GET, 'download', FILTER_SANITIZE_NUMBER_INT);

$consulta = mysql_query("SELECT * FROM arquivos WHERE fk_id_usuario = '$id' ");
        if ($resultado = mysql_fetch_array($consulta)){
          do {
            
           
// Define o nome do nosso pacote Zip.
$arquivo = 'doc.zip';

// Apaga o backup anterior para que ele não seja compactado junto com o atual.
if (file_exists($arquivo)) unlink(realpath($arquivo)); 

// diretório que será compactado
$diretorio = $resultado['arquivo_local'].$resultado['arquivo_nome']; // aqui estou compactando a pasta raiz do sistema.
$rootPath = realpath($diretorio);

// Inicia o Módulo ZipArchive do PHP
$zip = new ZipArchive();
$zip->open($arquivo, ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Compactação de subpastas
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

// Varre todos os arquivos da pasta
foreach ($files as $name => $file)
{
    if (!$file->isDir())
    {
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Adiciona os arquivos no pacote Zip.
        $zip->addFile($filePath, $relativePath);
    }
}

// Encerra a criação do pacote .Zip
$zip->close();

   $arquivo = 'doc.zip'; // define o nome do pacote Zip gerado na 9
   if(isset($arquivo) && file_exists($arquivo)){ // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
      switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){ // verifica a extensão do arquivo para pegar o tipo
         case "pdf": $tipo="application/pdf"; break;
         case "exe": $tipo="application/octet-stream"; break;
         case "zip": $tipo="application/zip"; break;
         case "doc": $tipo="application/msword"; break;
         case "xls": $tipo="application/vnd.ms-excel"; break;
         case "ppt": $tipo="application/vnd.ms-powerpoint"; break;
         case "gif": $tipo="image/gif"; break;
         case "png": $tipo="image/png"; break;
         case "jpg": $tipo="image/jpg"; break;
         case "mp3": $tipo="audio/mpeg"; break;
         case "php": // deixar vazio por seurança
         case "htm": // deixar vazio por seurança
         case "html": // deixar vazio por seurança
      }
      header("Content-Type: ".$tipo); // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
      exit; // aborta pós-ações
   }

}
while($resultado = mysql_fetch_array($consulta));
} 
?>