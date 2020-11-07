<?php
require_once 'tela_login/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>AD Prime</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" lang="pt-br" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/awsmining.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/arquivo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <noscript>
    <link rel="stylesheet" href="css/skel.css" />
    <link rel="stylesheet" href="css/awsmining.css" />
    </noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
</head>

<body class="homepage">

    <!-- Header Wrapper -->
    <div class="wrapper style1">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Logo -->
                <h1><a href="#" id="logo">AD Prime</a></h1>

                <!-- menu -->
                <nav id="nav">
                    <ul>
                        <li class="active"><a href="./index.html"><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="#"><i class="far fa-handshake"></i>Associado</a>
                            <ul>
                                <li><a href="./tela_login/login.php"><i class="fas fa-sign-in-alt"></i>Entrar</a></li>
                                <li><a href="https://usuario.gerencianet.com.br/segunda-via"><i class="fas fa-angle-double-right"></i>2ª&nbsp;via boletos</a>
                                </li>
                                <li><a href="#"><i class="fas fa-question"></i>Faq</a></li>
                            </ul>
                        </li>
                        <li><a href="./outrasEmpresas.php"><i class="fas fa-handshake"></i>Associe-se</a>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Banner -->
        <div id="banner">
            <section class="container">
                <h2>AD Prime</h2>
                <span>
					<h3>&nbsp;</h3>
				</span>
                <span>
					<h3>ASSOCIAÇÃO DE DEFESA E PROTEÇÃO AOS INTERESSES DOS INVESTIDORES EM MICRO EMPREENDIMENTOS EM
						BLOCK CHAIN</h3>
				</span>
            </section>
        </div>
    </div>

    <!-- Entre em Contato-->

    <div id="footer">
        <section class="container">
            <header class="major">
                <h2>Formulário de Cadastro de Associado <br><br></h2>
                <span class="byline">Use o formulário para enviar mensagens</span>
            </header>
            <!--formulário-->
            <form method="POST" style="border-radius: 10px 10px 10px;
          -webkit-border-radius: 10px;
          -moz-border-radius: 10px; width: 75%; margin-left:12.5%;" class="form">
                <header class="major">
                    <br><span class="byline">Cadastro seguro, preencha os dados corretamente para melhor
                      análise</span><br>
                    <Br>
                    <div class="row double">
                    <div class="textform 6u" >
                        <label for="name" style="float: left;">Verifique se a empresa na qual investiu já esta registrada: </label><br><br>
                        <select name="empresa" id="estado" type="option" style="background-color: #222222; color:white; border-color:#555555;">
                        <option>EMPRESAS</option>

                        <?php
                            include("./tela_usuario/arquivos_upload/db.php");

                            $consulta = mysql_query("SELECT empresa FROM empresa ");
                                    if ($resultado = mysql_fetch_array($consulta)){
                                    do {
                                        ?>
                                        <option><?php echo $resultado['empresa']; ?></option>
                                        <?php 
                                    }
                                    while($resultado = mysql_fetch_array($consulta));
                                    } 
                        ?>
                        </select>
                    </div>
                    <div class="textform 6u" >
                        <label for="name" style="float: left;">Caso a empresa não esteja registrada, realize aqui seu cadastro: </label><br><br>

                        <button type="button" onclick="window.location.href = './tela_outras_empresas/cadastrar_empresa.php' ">Cadastrar</button>
                                        
                    </div><br>
                        <div class="8u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="name" name="nome" placeholder="Nome completo" />
                        </div>
                        <div class="4u">
                            <label for="assunto" class="textform" style="width: 100%;">&nbsp;</label>
                            <input type="text" id="assunto" name="dataAniversario" placeholder="Data de Nascimento" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="6u">
                            <label for="mail" class="textform">&nbsp;</label>
                            <input type="text" id="mail" name="rg" placeholder="Carteira de identidade (RG)" />
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="cpf" placeholder="Cadastro de pessoa fisíca (CPF)" />
                        </div>
                    </div>
                    <div>
                        <label for="assunto" class="textform">&nbsp;</label>
                        <input type="email" id="mail" name="email" placeholder="E-mail" />
                    </div>
                    <div class="row double">
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="password" id="assunto" name="senha" placeholder="Digite sua senha " />
                        </div>
                        <div class=6u>
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="password" id="assunto" name="Csenha" placeholder="Confirme sua senha" />
                        </div>
                    <div class="row double">
                            </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="telefone" placeholder="Telefone " />
                        </div>
                        <div class=6u>
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="celular" placeholder="Celular" />
                        </div>
                        <div class="row double">
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="endereco" placeholder="Endereço" />
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="Nresidencia" placeholder="Número da residência" />
                        </div>
                        <div class="row double" style="float: left;">
                            <div class="3u">
                                <label for="assunto" class="textform" style="width: 100%;">&nbsp;</label>
                                <input type="text" id="assunto" name="cep" placeholder="CEP" />
                            </div>
                            <div style="border-radius: 10px 20px 30px;" class="5u">
                                <label for="assunto" class="textform">&nbsp;</label>
                                <input type="text" id="assunto" name="pais" placeholder="País" />
                            </div>
                            <div class="textform">
                                <label for="name">Estado:</label>
                                <select id="estado" type="option" name="estado"
                                    style="background-color: #222222; color:white; border-color:#555555;">
                                    <option value="">Selecione</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div><br></br>
                        </div>
                    </div>
                    <div>
                        <label for="assunto" class="textform">&nbsp;</label>
                        <input type="text" id="assunto" name="complemento" placeholder="Complemento" />
                    </div>
                    <div class="row double">
                        <div class="6u">
                            <label for="assunto" class="textform" class="fa fa-square">&nbsp;</label>
                            <input type="text" id="assunto" name="bairro" placeholder="Bairro" />
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform" class="fa fa-square">&nbsp;</label>
                            <input type="text" id="assunto" name="cidade" placeholder="Cidade" />
                        </div>
                    </div>
                    <div class="textform">
                        <label for="name" style="float: left;">Como você comprovará o investimento?</label><br><br>
                        <select name="comprovante" id="estado" type="option" style="background-color: #222222; color:white; border-color:#555555;">
                            <option value="E-mail">E-mail</option>
                            <option value="Prints">Prints</option>
                            <option value="Depositos Bancarios">Depósitos bancários</option>
                            <option value="Descrito na mensagem">Caso sejá mais de um descreva no campo abaixo</option>
                        </select>
                    </div><br><br>
                    <br>
                    <br>
                    <label for="msg" class="textform">Mensagem:</label>
                    <textarea name="mensagem" id="text" placeholder="Digite sua mensagem aqui"></textarea>
                    <br><br>
                        <input type="submit" id="enviar" placeholder="Enviar">
                    

        <?php
            if (isset($_POST['nome'])) {
                //Ligado a tabela USUARIO
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
                $Csenha = addslashes($_POST['Csenha']);
                $rg = addslashes($_POST['rg']);
                $cpf = addslashes($_POST['cpf']);
                $dataAniversario= addslashes($_POST['dataAniversario']);
                //ligado a tabela telefone
                $telefone = addslashes($_POST['telefone']);
                $celular = addslashes($_POST['celular']);
                //ligado a tabela endereco
                $endereco = addslashes($_POST['endereco']);
                $Nresidencia = addslashes($_POST['Nresidencia']);
                $cep = addslashes($_POST['cep']);
                $pais = addslashes($_POST['pais']);
                $estado = addslashes($_POST['estado']);
                $complemento = addslashes($_POST['complemento']);
                $bairro = addslashes($_POST['bairro']);
                $cidade = addslashes($_POST['cidade']);
                $mensagem = addslashes($_POST['mensagem']);
                $comprovante = addslashes($_POST['comprovante']);


                //verifica se está tudo preenchido
                if (!empty($nome) && !empty($email) && !empty($senha) && !empty($Csenha) && !empty($rg) && !empty($cpf) && !empty($dataAniversario)
                && !empty($celular) && !empty($endereco) && !empty($Nresidencia) && !empty($cep) && !empty($pais) && !empty($estado) && !empty($complemento)
                && !empty($bairro)  && !empty($cidade) && !empty($comprovante)) {
                    $u->conectar("adprime3", "localhost", "root", "");
                    if ($u->msgErro == "") {
                        if ($senha == $Csenha) {
                            if ($u->outrasEmpresas($nome, $email, $senha, $rg, $cpf, $dataAniversario, $telefone, $celular, $endereco, $Nresidencia, $cep, $pais, $estado,
                            $complemento, $bairro, $cidade, $mensagem, $comprovante)) {
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

                </header>
            </form><br>
    </div><br>

    <!-- rodapé -->

    <div id="copyright">
        <div class="diplay">
            <div class="row double">
                <div class="4u">
                    <div class="logoinf">
                        <H2>AD PRIME</H2>
                    </div>
                    <div class="textoinf">
                        <p>ASSOCIAÇÃO DE DEFESA E PROTEÇÃO AOS INTERESSES DOS INVESTIDORES EM MICRO EMPREENDIMENTOS EM BLOCK CHAIN</p>
                    </div>
                </div>
                <div class="4u">
                    <div class="menuinferior">
                        <li>Links Importantes</li>
                        <li><a href="./index.html"><button class="buttoninf">HOME</button></a></li>
                        <li><a href="./login.html"><button class="buttoninf">ENTRAR</button></a></li>
                        <li><a href="#"><button class="buttoninf">FAQ</button></a></li>
                    </div>
                </div>
                <div class="4u">
                    <div class="menuinferiortwo">
                        <li>Associe-se</li>
                        <li><a href="./wscriptacoin.html"><button class="buttoninf">KRIPTACOIN</button></a></li>
                        <li><a href="./awsmining.html"><button class="buttoninf">awsmining</button></a></li>
                        <li><a href="./outrasEmpresas.html"><button class="buttoninf">Outras Empresas</button></a></li>
                    </div>
                </div>
            </div>
            <div>
                <p style="font-size: 0.9em;">A Associação está expressamente proibida de representar pessoas que tenham relação com os investigados.</p>
            </div>
        </div>
        <div id="divisaorodape">&nbsp;</div>

        <div class="voltar-ao-topo">
            <p><a href="#"><button class="button" id="voltar-ao-topo"><i class="fa fa-angle-up"aria-hidden="true"></i></button></a></p>
        </div>
        <p style="font-size: 0.7em; margin-bottom: -2%;"> &#174 2020 Copyright Todos os direitos reservados AD Prime</p>
    </div>
</body>

</html>