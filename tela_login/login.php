<?php
require_once 'usuarios.php';
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
        <img src="../images/login.png" class="usuario" width="100" height="100" alt="" style="margin: 0 auto;">
        <div class="voltar">
            <a href="../index.html">
                <h1><i class="fas fa-sign-out-alt"></i></h1>
            </a>
            <p style="margin: 0 auto;">voltar</p>
        </div>
        <h1>Login</h1>

        <form method="POST">
            <!-- não apaga sa porra GABRIEL -->
            <br>
            <p>Usuário</p>
            <a class="popupbt"><i class="far fa-user"></i></a>&nbsp;&nbsp;<input type="text" id="name" name="email" placeholder="Insira seu nome de Usuário " maxlength="30" />
            <p>Senha</p>
            <a class="popupbt"><i class="fas fa-lock"></i></a>&nbsp;&nbsp;<input type="password" id="senha" name="senha" placeholder="Insira sua senha" maxlength="15" />

            <input type="submit" id="enviar" value="Login"><br>


            <?php

            if (isset($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);

                if (!empty($email) && !empty($senha)) {
                    $u->conectar("adprime2", "localhost", "root", "");
                    if ($u->msgErro == "") {
                        if ($u->logar($email, $senha)) {
                            
                        } else {
            ?>
                            <div style=" border-radius:10px;margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                                Email ou senha incorretos
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div style=" border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                            <?php echo "Erro: " . $u->msgErro; ?>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div style="border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                        Preencha todos os campos
                    </div>
            <?php
                }
            }

            ?>
        </form>
    </div>
</body>

</html>