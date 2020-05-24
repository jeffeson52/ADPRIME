<?php
require_once '../tela_login/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="Stylesheet" type="text/css" href="../css/login.css">
    <link rel="Stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>Tela de Login</title>
</head>

<body>
    <div class="login">
        <img src="https://www.visaopontocom.com/wp-content/uploads/2017/02/icone-empresa.png" class="usuario far fa-building" width="100" height="100" alt="" style="margin: 0 auto;">
        <div class="voltar">
            <a href="../outrasEmpresas.php">
                <h1><i class="fas fa-sign-out-alt"></i></h1>
            </a>
            <p style="margin: 0 auto;">voltar</p>
        </div>
        <h1>Cadastrar Empresa</h1>

        <form method="POST">
            <!-- não apaga sa porra GABRIEL -->
            <br>
            <p>Nome da Empresa</p>
            <a class="popupbt"><i class="far fa-building"></i></a>&nbsp;&nbsp;<input type="text" id="name" name="empresa" placeholder="Insira o nome da Empresa " maxlength="30" />
            <input type="submit" id="enviar" value="Cadastrar"><br>

            <?php
            if (isset($_POST['empresa'])) {
            $empresa = addslashes($_POST['empresa']);

            if(!empty($empresa)){
            $u->conectar("adprime3", "localhost", "root", "");
            if($u->cadastroEmpresa($empresa)) {
                ?>
                    <!--Nesta parte tudo é HTML, o PHP em nada interfere, você pode fazer seu CSS normalmente, apenas nas DIV-->
                    <div style=" border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(50, 205, 50, .2); border: 1px solid rgb(34, 139,34);">
                        Cadastrado com sucesso
                    </div>
                <?php
            }else{
                ?>
                    <div style="border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                        Empresa já cadastrada
                    </div>
                <?php
            }
            }else{
                ?>
                    <div style="border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                        Campo vazio
                    </div>
            <?php
            }
        }
    
            ?>
        </form>
    </div>
</body>

</html>