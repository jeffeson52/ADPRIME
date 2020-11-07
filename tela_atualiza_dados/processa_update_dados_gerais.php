<?php 
    include("../tela_usuario/arquivos_upload/db.php");
    session_start();

    $login = $_SESSION['id_usuario'];

    $dadosWallStreet = $_POST['dadosWallStreet'];
    $aporte = $_POST['aporte'];
    $valorMineradora = $_POST['valorMineradora'];
    $valorInvestimento = $_POST['valorInvestimento'];
    $valorTaxa = $_POST['valorTaxa'];
    $pagBoleto = $_POST['pagBoleto'];
    $poder = $_POST['poder'];
    $mensagem = $_POST['mensagem'];
    $cotak1 = $_POST['cotak1'];
    $cotak3 = $_POST['cotak3'];
    $cotak21 = $_POST['cotak21'];

    $consulta = mysql_query("SELECT * FROM dadosgerais WHERE fk_id_usuario = '$login' ");
    if($resultado = mysql_fetch_array($consulta)){
        do{
            if($dadosWallStreet != ""){
                $update = mysql_query("UPDATE dadosgerais SET dadosWallStreet = '$dadosWallStreet' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($aporte != ""){
                $update = mysql_query("UPDATE dadosgerais SET aporte = '$aporte' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($valorMineradora != ""){
                $update = mysql_query("UPDATE dadosgerais SET valorMineradora = '$valorMineradora' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($valorInvestimento != ""){
                $update = mysql_query("UPDATE dadosgerais SET valorInvestimento = '$valorInvestimento' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($valorTaxa != ""){
                $update = mysql_query("UPDATE dadosgerais SET valorTaxa = '$valorTaxa' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($pagBoleto != ""){
                $update = mysql_query("UPDATE dadosgerais SET pagBoleto = '$pagBoleto' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($poder != ""){
                $update = mysql_query("UPDATE dadosgerais SET poder = '$poder' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($mensagem != ""){
                $update = mysql_query("UPDATE dadosgerais SET mensagem = '$mensagem' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($cotak1 != ""){
                $update = mysql_query("UPDATE dadosgerais SET cotak1 = '$cotak1' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($cotak3 != ""){
                $update = mysql_query("UPDATE dadosgerais SET cotak3 = '$cotak3' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($cotak21 != ""){
                $update = mysql_query("UPDATE dadosgerais SET cotak21 = '$cotak21' WHERE fk_id_usuario = '$login' ");
            }else{}

            echo "<script>alert('Dados Alterados com Sucesso!');
                    window.location='atualiza_dados_user.php';</script>";
            
        }
    while($resultado = mysql_fetch_array($consulta));
    }
?>