<?php 
    include("../tela_usuario/arquivos_upload/db.php");
    session_start();

    $login = $_SESSION['id_usuario'];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $dataAniversario = $_POST['dataAniversario'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    $consulta = mysql_query("SELECT * FROM usuarios, telefone WHERE id_usuario = '$login' AND fk_id_usuario = '$login' ");
    if($resultado = mysql_fetch_array($consulta)){
        $nomeDB = $resultado['nome'];
        $rgDB = $resultado['rg'];
        $emailDB = $resultado['email'];
        $cpfDB = $resultado['cpf'];
        $dataAniversarioDB = $resultado ['dataAniversario'];
        $telefoneDB = $resultado['telefone'];
        $celularDB = $resultado['celular'];

        do{
            if($nome == ""){
                $update = mysql_query("UPDATE usuarios SET nome = '$nomeDB' WHERE id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE usuarios SET nome = '$nome' WHERE id_usuario = '$login' ");
            }

            if($rg == ""){
                $update = mysql_query("UPDATE usuarios SET rg = '$rgDB' WHERE id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE usuarios SET rg = '$rg' WHERE id_usuario = '$login' ");
            }

            if($email == ""){
                $update = mysql_query("UPDATE usuarios SET email = '$emailDB' WHERE id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE usuarios SET email = '$email' WHERE id_usuario = '$login' ");
            }

            if($cpf == ""){
                $update = mysql_query("UPDATE usuarios SET cpf = '$cpfDB' WHERE id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE usuarios SET cpf = '$cpf' WHERE id_usuario = '$login' ");
            }

            if($dataAniversario == ""){
                $update = mysql_query("UPDATE usuarios SET dataAniversario = '$dataAniversarioDB' WHERE id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE usuarios SET dataAniversario = '$dataAniversario' WHERE id_usuario = '$login' ");
            }

            if($telefone == ""){
                $update = mysql_query("UPDATE telefone SET telefone = '$telefoneDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE telefone SET telefone = '$telefone' WHERE fk_id_usuario = '$login' ");
            }

            if($celular == ""){
                $update = mysql_query("UPDATE telefone SET celular = '$celularDB' WHERE fk_id_usuario = '$login' ");
            }else{
                $update = mysql_query("UPDATE telefone SET celular = '$celular' WHERE fk_id_usuario = '$login' ");
            }

            echo "<script>alert('Dados Alterados com Sucesso!');
                    window.location='atualiza_dados_user.php';</script>";
            
        }
    while($resultado = mysql_fetch_array($consulta));
    }
?>