<?php 
    include("../tela_usuario/arquivos_upload/db.php");
    session_start();

    $login = $_SESSION['id_usuario'];

    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $Nresidencia = $_POST['Nresidencia'];
    $complemento = $_POST['complemento'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $pais = $_POST['pais'];
    $estado = $_POST['estado'];

    $consulta = mysql_query("SELECT * FROM endereco WHERE fk_id_usuario = '$login' ");
    if($resultado = mysql_fetch_array($consulta)){
        $enderecoDB = $resultado['endereco'];
        $bairroDB = $resultado['bairro'];
        $NresidenciaDB = $resultado['Nresidencia'];
        $complementoDB = $resultado['complemento'];
        $cidadeDB = $resultado ['cidade'];
        $cepDB = $resultado['cep'];
        $paisDB = $resultado['pais'];
        $estadoDB = $resultado['estado'];

        do{
            if($endereco == ""){
                $update = mysql_query("UPDATE endereco SET endereco = '$enderecoDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET endereco = '$endereco' WHERE fk_id_usuario = '$login' ");
            }

            if($bairro == ""){
                $update = mysql_query("UPDATE endereco SET bairro = '$bairroDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET bairro = '$bairro' WHERE fk_id_usuario = '$login' ");
            }

            if($Nresidencia == ""){
                $update = mysql_query("UPDATE endereco SET Nresidencia = '$NresidenciaDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET Nresidencia = '$Nresidencia' WHERE fk_id_usuario = '$login' ");
            }

            if($complemento == ""){
                $update = mysql_query("UPDATE endereco SET complemento = '$complementoDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET complemento = '$complemento' WHERE fk_id_usuario = '$login' ");
            }

            if($cidade == ""){
                $update = mysql_query("UPDATE endereco SET cidade = '$cidadeDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET cidade = '$cidade' WHERE fk_id_usuario = '$login' ");
            }

            if($cep == ""){
                $update = mysql_query("UPDATE endereco SET cep = '$cepDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET cep = '$cep' WHERE fk_id_usuario = '$login' ");
            }

            if($pais == ""){
                $update = mysql_query("UPDATE endereco SET pais = '$paisDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET pais = '$pais' WHERE fk_id_usuario = '$login' ");
            }

            if($estado == ""){
                $update = mysql_query("UPDATE endereco SET estado = '$estadoDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE endereco SET estado = '$estado' WHERE fk_id_usuario = '$login' ");
            }

            echo "<script>alert('Dados Alterados com Sucesso!');
                    window.location='atualiza_dados_user.php';</script>";
            
        }
    while($resultado = mysql_fetch_array($consulta));
    }
?>