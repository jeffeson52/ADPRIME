<?php 
    include("../tela_usuario/arquivos_upload/db.php");
    session_start();

    $login = $_SESSION['id_user_update'];

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
        do{
            if($endereco != ""){
                $update = mysql_query("UPDATE endereco SET endereco = '$endereco' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($bairro != ""){
                $update = mysql_query("UPDATE endereco SET bairro = '$bairro' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($Nresidencia != ""){
                $update = mysql_query("UPDATE endereco SET Nresidencia = '$Nresidencia' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($complemento != ""){
                $update = mysql_query("UPDATE endereco SET complemento = '$complemento' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($cidade != ""){
                $update = mysql_query("UPDATE endereco SET cidade = '$cidade' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($cep != ""){
                $update = mysql_query("UPDATE endereco SET cep = '$cep' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($pais != ""){
                $update = mysql_query("UPDATE endereco SET pais = '$pais' WHERE fk_id_usuario = '$login' ");
            }else{}

            if($estado != ""){
                $update = mysql_query("UPDATE endereco SET estado = '$estado' WHERE fk_id_usuario = '$login' ");
            }else{}

            echo "<script>alert('Dados Alterados com Sucesso!');
                    window.location='adm_atualiza_dados_user.php';</script>";
            
        }
    while($resultado = mysql_fetch_array($consulta));
    }
?>