<?php 
    include("./arquivos_upload/db.php");
    session_start();

    $login = $_SESSION['id_usuario'];

    $senha_atual = $_POST['senha_atual'];
    $senha_nova = $_POST['nova_senha'];
    $conf_nova_senha = $_POST['conf_senha'];

    $consulta = mysql_query("SELECT * FROM usuarios WHERE id_usuario = '$login' ");
    if($resultado = mysql_fetch_array($consulta)){
        $senha = $resultado['senha'];
        $senhamd5 = md5($senha_nova);

        do{
            if(($senha_atual == "") && ($senha_nova == "") && ($conf_nova_senha == "")){
                echo "<script>alert('Preencha todos os campos!');
                window.location='altera_senha_adm.php';</script>";
                return false;
            }else{
                if((md5($senha_atual) != $senha )){
                    echo "<script>alert('Senha atual incorreta!');
                    window.location='altera_senha_adm.php';</script>";
                }elseif(($senha_nova != $conf_nova_senha)){
                    echo "<script>alert('As novas senhas digitadas estão diferentes!');
                    window.location='altera_senha_adm.php';</script>";
                }else{
                    if($update = mysql_query("UPDATE usuarios SET senha = '$senhamd5' WHERE id_usuario = '$login' ")){
                        echo "<script>alert('Senha Alterada com sucesso!');
                        window.location='altera_senha_adm.php';</script>";
                    }
                }
            }
        }
    while($resultado = mysql_fetch_array($consulta));
    }
?>