<?php
require_once '../tela_login/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <link rel="Stylesheet" type="text/css" href="../css/cadastrar.css">
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="Stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/arquivo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta charset="utf-8">
    <title>Cadastrar novo usuário</title>
</head>

<body>
    <div class="login">

        <img src="../images/login.png" class="usuario" width="100" height="100" alt="">
        <div class="voltar">
            <a href="./administrador.php">
                <h1><i class="fas fa-sign-out-alt"></i></h1>
            </a>
            <p>Voltar</p>
        </div>
        <h1>Cadastrar</h1>

        <form method="POST">
            <!-- não apaga sa porra GABRIEL -->
            <br>
            <p>Nome</p>
            <a class="popupbt"><i class="far fa-user"></i></a>&nbsp;&nbsp;<input type="text" id="name" name="nome" placeholder="Insira seu nome" maxlength="40" />
            <p>E-mail</p>
            <a class="popupbt"><i class="fas fa-envelope"></i></a>&nbsp;&nbsp;<input type="text" id="name" name="email" placeholder="Insira seu email" maxlength="30" />
            <p>Telefone</p>
            <a class="popupbt"><i class="fas fa-phone"></i></a>&nbsp;&nbsp;<input type="text" id="name" name="telefone" placeholder="Insira seu telefone " maxlength="15" />
            <p>Senha</p>
            <a class="popupbt"><i class="fa fa-lock"></i></a>&nbsp;&nbsp;<input type="password" id="senha" name="senha" placeholder="Insira sua senha" maxlength="15" />
            <button id="mostrarsenha" type="button" onclick="mostrarSenha()" style="position: absolute;font-size:1.3em;"><i class="far fa-eye"></i></button>
            <p>Confirma Senha</p>
            <a class="popupbt"><i class="fas fa-lock"></i></a>&nbsp;&nbsp;<input type="password" id="senha2" name="Csenha" placeholder="Confirme sua senha" maxlength="15" />

            <select name="nivel"  style="background-color:inherit; color:dodgerblue; border-color:#555555; font-weight:400;">
                <option value="">Selecione</option>
                <option value="2">Usuario Comum</option>
                <option value="1">Administrador</option>
            </select><br />

            <input type="submit" id="enviar" value="Cadastrar"><br>

            <?php
            if (isset($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $telefone = addslashes($_POST['telefone']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
                $Csenha = addslashes($_POST['Csenha']);
                $nivel = addslashes($_POST['nivel']);

                //verifica se está tudo preenchido
                if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($Csenha) && !empty($nivel)) {
                    $u->conectar("adprime", "localhost", "root", "");
                    if ($u->msgErro == "") {
                        if ($senha == $Csenha) {
                            if ($u->cadastrar($nome, $telefone, $email, $senha, $nivel)) {
            ?>
                                <!--Nesta parte tudo é HTML, o PHP em nada interfere, você pode fazer seu CSS normalmente, apenas nas DIV-->
                                <div style=" border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(50, 205, 50, .2); border: 1px solid rgb(34, 139,34);">
                                    Cadastrado com sucesso
                                </div>
                            <?php
                            } else {
                            ?>
                                <div style="border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                                    Email já cadastrado
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <div style="border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                                As senhas não correspondem
                            </div>
                        <?php
                        }
                    } else {
                        ?>
                        <div style="border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                            <?php echo "Erro: " . $u->msgErro; ?>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div style="border-radius:10px; margin: 10px auto; padding: 10px; background-color: rgba(250, 128, 114, .2); border: 1px solid rgb(165, 42,42);">
                        Preencha todos os Campos
                    </div>
            <?php
                }
            }
            ?>

        </form>
    </div>
    <script>
        function mostrarSenha() {
            var tipo = document.getElementById("senha");
            if (tipo.type == "password") {
                tipo.type = "text";
            } else {
                tipo.type = "password";
            }

            var tipo2 = document.getElementById("senha2");
            if (tipo2.type == "password") {
                tipo2.type = "text";
            } else {
                tipo2.type = "password";
            }
        }
    </script>

</body>

</html>