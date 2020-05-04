<?php
require_once 'tela_login/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>AD Prime</title>
    <meta charset="utf-8"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" lang="pt-br" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="css/wscriptacoin.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.dropotron.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/arquivo.js"></script>
    <script src="jquery.min.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
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
                                <li><a href="https://usuario.gerencianet.com.br/segunda-via"><i
                                            class="fas fa-angle-double-right"></i>2ª&nbsp;via boletos</a>
                                </li>
                                <li><a href="#"><i class="fas fa-question"></i>Faq</a></li>
                            </ul>
                        </li>
                        <li><a href=""><i class="fas fa-handshake"></i>Associe-se</a>
                            <ul>
                                <li><a href="./wscriptacoin.php"><i class="fas fa-handshake"></i>WS Kriptacoin</a></li>
                                <li><a href="./awsmining.html"><i class="fas fa-handshake"></i>AWS Mining</a></li>
                                <li><a href="./outrasEmpresas.html"><i class="fas fa-handshake"></i>Outras Empresas</a>
                                </li>
                            </ul>
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
                <h2>Formulário de Cadastro de Associado <br><br>wscriptacoin</h2>
                
            </header>
            <!--formulário-->
            <form style="border-radius: 10px 10px 10px;
          -webkit-border-radius: 10px;
          -moz-border-radius: 10px; width: 75%; margin-left:12.5%;" class="form"  method="POST">
                <header class="major">
                    <br><span class="byline">Cadastro seguro, preencha os dados corretamente para melhor
                        análise</span>
                        <span class="byline">OBS: Todos os campos com * são campos obrigátorios</span><br>
                    <Br>
                    <div class="row double">
                        <div class="8u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="name" name="nome" placeholder="Nome completo *" />
                        </div>
                        <div class="4u">
                            <label for="assunto" class="textform" style="width: 100%;">&nbsp;</label>
                            <input type="text" id="assunto" name="dataAniversario" placeholder="Data de Nascimento *" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="6u">
                            <label for="mail" class="textform">&nbsp;</label>
                            <input type="text" id="mail" name="rg" placeholder="Carteira de identidade (RG) *" />
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="cpf" placeholder="Cadastro de pessoa fisíca (CPF) *" />
                        </div>
                    </div>
                    <div></div>
                    <div class="row double">
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="telefone" placeholder="Telefone " />
                        </div>
                        <div class=6u>
                            <label for="assunto" class="textform">&nbsp;</label><br/>
                            <input type="text" id="assunto" name="celular" placeholder="Celular *" />
                        </div>
                        <div class="row double">
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="endereco" placeholder="Endereço *" />
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="text" id="assunto" name="Nresidencia" placeholder="Número da residência *" />
                        </div>
                        <div class="row double" style="float: left;">
                            <div class="3u">
                                <label for="assunto" class="textform" style="width: 100%;">&nbsp;</label>
                                <input type="text" id="assunto" name="cep" placeholder="CEP *" />
                            </div>
                            <div style="border-radius: 10px 20px 30px;" class="5u">
                                <label for="assunto" class="textform">&nbsp;</label>
                                <input type="text" id="assunto" name="pais" placeholder="País *" />
                            </div>
                            <div class="4u">
                                <div style="border-radius: 10px 20px 30px; width:100%;" class="6u">
                                    <label for="assunto" class="textform">&nbsp;</label>
                                    <input type="text" id="assunto" name="estado" placeholder="Estado *" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="assunto" class="textform">&nbsp;</label>
                        <input type="text" id="assunto" name="complemento" placeholder="Complemento *" />
                    </div>
                    <div class="row double">
                        <div class="6u">
                            <label for="assunto" class="textform" class="fa fa-square">&nbsp;</label>
                            <input type="text" id="assunto" name="bairro" placeholder="Bairro *" />
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform" class="fa fa-square">&nbsp;</label>
                            <input type="text" id="assunto" name="cidade" placeholder="Cidade *" />
                        </div>
                    </div>
                    <br><br>
                    <Br>
                    <div>
                        <label for="assunto" class="textform">E-MAIL para acesso na área do associado AD PRIME
                            (LOGIN):</label><br /><br />
                        <span style="text-align: justify; opacity: .4; text-align: left;">OBS. DEVE SER INDICADO UM
                            EMAIL POR ASSOCIADO, CASO
                            TENHA MAIS DE UM INVESTIDOR NA FAMÍLIA OU AMIGOS PRECISA SER DIFERENTES OS E-MAILS:</span>
                        <input type="text" id="assunto" name="email" placeholder="Digite seu email aqui *" />
                    </div>
                    <div class="row double">
                        <div class="6u">
                            <label for="assunto" class="textform">Senha para acesso na área do associado:</label>
                            <input type="password" id="assunto" name="senha" placeholder="Senha com 6 digitos *" />
                        </div>
                        <div class="6u">
                            <label for="assunto" class="textform">&nbsp;</label>
                            <input type="password" id="assunto" name="Csenha" placeholder="Confirmar senha *" />
                        </div><br><br>
                        <div>
                            <label for="msg" class="textform" style="text-align: justify;">Qual seu ID na Wall Street
                                Corporate
                                + Valor (E-mail) de
                                acesso na KRIPTACASH, Valor TOTAL em seu CPF: (OBS.Sua senha poderá ser solicitado
                                posteriormente):</label>
                            <textarea id="text" name="dadosWallStreet" placeholder="Digite seus dados aqui*"></textarea>
                        </div>
                        <div>
                            <label for="msg" class="textform" style="text-align: justify;">Qual foi o seu aporte na
                                empresa
                                Wall
                                Street Corporate
                                selecione: *</label><br /><br />
                            <div class="row double">
                                <div class="4u">
                                <select name="aporte" type="option" style="background-color: #222222; color:white; border-color:#555555;">
                                    <option value="">Selecione</option>
                                    <option value="k1">Aporte k1</option>
                                    <option value="k3">Aporte k3</option>
                                    <option value="k21">Aporte k21</option>
                                </select><br />
                                </div>
                            </div><br>
                            <Br>
                            <div class="textform">
                                <label for="name">Cota K1:</label>
                                <select id="estado" type="option" name="cotak1"
                                    style="background-color: #222222; color:white; border-color:#555555;">
                                    <option value="">Selecione</option>
                                    <option value="K1-01">01</option>
                                    <option value="K1-02">02</option>
                                    <option value="K1-03">03</option>
                                    <option value="K1-04">04</option>
                                    <option value="K1-05">05</option>
                                    <option value="K1-06">06</option>
                                    <option value="K1-07">07</option>
                                    <option value="K1-08">08</option>
                                    <option value="K1-09">09</option>
                                    <option value="K1-10">10</option>
                                    <option value="K1-11">11</option>
                                    <option value="K1-12">12</option>
                                    <option value="K1-13">13</option>
                                    <option value="K1-14">14</option>
                                    <option value="K1-15">15</option>
                                </select>
                            </div><br></br>
                            <div class="textform">
                                <label for="name">Cota K3:</label>
                                <select id="estado" type="option" name="cotak3"
                                    style="background-color: #222222; color:white; border-color:#555555;">
                                    <option value="">Selecione</option>
                                    <option value="K3-01">01</option>
                                    <option value="K3-02">02</option>
                                    <option value="K3-03">03</option>
                                    <option value="K3-04">04</option>
                                    <option value="K3-05">05</option>
                                    <option value="K3-06">06</option>
                                    <option value="K3-07">07</option>
                                    <option value="K3-08">08</option>
                                    <option value="K3-09">09</option>
                                    <option value="K3-10">10</option>
                                    <option value="K3-11">11</option>
                                    <option value="K3-12">12</option>
                                    <option value="K3-13">13</option>
                                    <option value="K3-14">14</option>
                                    <option value="K3-15">15</option>
                                </select>
                            </div><br></br>
                            <div class="textform">
                                <label for="name">Cota K21:</label>
                                <select id="estado" type="option" name="cotak21"
                                    style="background-color: #222222; color:white; border-color:#555555;">
                                    <option value="">Selecione</option>
                                    <option value="K21-01">01</option>
                                    <option value="K21-02">02</option>
                                    <option value="K21-03">03</option>
                                    <option value="K21-04">04</option>
                                    <option value="K21-05">05</option>
                                    <option value="K21-06">06</option>
                                    <option value="K21-07">07</option>
                                    <option value="K21-08">08</option>
                                    <option value="K21-09">09</option>
                                    <option value="K21-10">10</option>
                                    <option value="K21-11">11</option>
                                    <option value="K21-12">12</option>
                                    <option value="K21-13">13</option>
                                    <option value="K21-14">14</option>
                                    <option value="K21-15">15</option>
                                </select>
                            </div><br></br>
                            <label for="msg" class="textform">Você é detentor da licença de mineração
                                (Kriptacoin)?: *</label><br /><br />
                            <div class="row double">
                                <div class="3u">
                                <select name="licenca" type="option" style="background-color: #222222; color:white; border-color:#555555;">
                                    <option value="Sim">SIM</option>
                                    <option value="Não">NÃO</option>
                                </select><br />
                                </div>
                                
                            </div>
                            <div class="textform">
                                <label for="name">Qual o poder de mineração diária?: *</label><br /><br />
                                <select id="estado" type="option" name="poder"
                                    style="background-color: #222222; color:white; border-color:#555555; float: left;">
                                    <option value="">Selecione</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="4">04</option>
                                    <option value="8">08</option>
                                    <option value="12">12</option>
                                    <option value="20">20</option>
                                </select>
                            </div><br />
                            </br /><br/><br/>
                            <div>
                                <label for="assunto" class="textform">Informe o valor de cada mineradora e o valor TOTAL
                                    INVESTIDO EM MINERADORAS: *</label><br/>
                                <br/><span style="opacity: .4; text-align: left;">Ex. Comprei 2 mineradora que
                                    produz 2
                                    moedas por dia, valor de cada mineradora R$10.000,00 e o valor total
                                    R$20.000,00.</span>
                                <input type="text" id="assunto" name="valorMineradora" placeholder="Digite seu dados aqui">
                            </div>
                            <div>
                                <label for="assunto" class="textform">QUAL O VALOR TOTAL SOMANDO TODOS OS
                                    INVESTIMENTOS? *</label>
                                <br></br><span style="opacity: .4; text-align: left;">Ex: COMPRA DE MOEDAS WALL STREET
                                    CORPORATE
                                    + COMPRA DE COTAS + COMPRA DE MINERADORAS.</span>
                                <input type="text" id="assunto" name="valorInvestimento" placeholder="Digite seu dados aqui">
                            </div><br/>

                            <div>
                                <label for="assunto" class="textform">QUAL O VALOR TOTAL SOMANDO TODOS OS INVESTIMENTOS?</label><br/><br/>
                                <span class="exemplos">(EX: PARA VALOR INVESTIDO DE R$ 1.000,00 SERA PAGO UMA TAXA DE R$ 10,00, PARA VALOR IGUAL OU ACIMA DE R$ 5.000,00 VALOR DA TAXA FIXA DE R$ 50,00).</span>
                                    <div class="row"><br/>
                                        <div class="col-sm">
                                           Investido R$ <br/>
                                           <input type="text" onchange="calcularTaxa()" id="valortotal">,00<br/><br/>
                                        </div>
                                        <div class="col-sm">
                                            Taxa de R$ <br/>
                                            <input type="text" id="valortaxa" name="valorTaxa" readonly>,00
                                        </div>
                                    </div>
                            </div><br/>
                                
                            <div class="textform">
                                <label for="name">Melhor dia para pagamento do boleto: *</label><br /><br />
                                <select id="estado" type="option" name="pagBoleto"
                                    style="background-color: #222222; color:white; border-color:#555555; float: left;">
                                    <option value="">Selecione</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div><br />
                            </br /></br /></br />
                            <div class="textform">
                                <label for="name">Associado: *</label><br /><br />
                                <select id="estado" type="option" name="empresa"
                                    style="background-color: #222222; color:white; border-color:#555555; float: left;">
                                    <option value="WSCRIPTACOIN">WSCRIPTACOIN</option>
                                    
                                </select>
                            </div><br />
                            <div>
                                <div>
                                    <label for="msg" class="textform"
                                        style="text-align: justify; color: red; font-size: 1.3em;">Sou responsável pelos
                                        dados
                                        descritos e anexados neste
                                        cadastro, aceito receber e-mails informativos da AD PRIME:</label><br><br><br>
                                    <br><br><input type="checkbox" style="text-align: left;">Ciente e
                                    aceito</input><br>
                                </div>
                                <label for="msg" class="textform">Mensagem: *</label>
                                <textarea name="mensagem" id="text" placeholder="Digite sua mensagem aqui"></textarea>
                            </div>
                            <div><br><br>
                                
                                <input href="#" type="submit" class="button" id="enviar" >
                            </div>
                </header>
            </form>
    </div><br>
    </div><br>






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
                //ligado a tabela Dados Gerais
                $dadosWallStreet = addslashes($_POST['dadosWallStreet']);
                $cotak1 = addslashes($_POST['cotak1']);
                $cotak3 = addslashes($_POST['cotak3']);
                $cotak21 = addslashes($_POST['cotak21']);
                $aporte = addslashes($_POST['aporte']);
                $licenca = addslashes($_POST['licenca']);
                $poder = addslashes($_POST['poder']);
                $valorMineradora = addslashes($_POST['valorMineradora']);
                $valorInvestimento = addslashes($_POST['valorInvestimento']);
                $valorTaxa = addslashes($_POST['valorTaxa']);
                $pagBoleto = addslashes($_POST['pagBoleto']);
                $empresa = addslashes($_POST['empresa']);
                $mensagem = addslashes($_POST['mensagem']);

                

                //verifica se está tudo preenchido
                if (!empty($nome) && !empty($email) && !empty($senha) && !empty($Csenha) && !empty($rg) && !empty($cpf) && !empty($dataAniversario)
                && !empty($celular) && !empty($endereco) && !empty($Nresidencia) && !empty($cep) && !empty($pais) && !empty($estado) && !empty($complemento)
                && !empty($bairro)  && !empty($cidade) && !empty($dadosWallStreet) && !empty($aporte) && !empty($licenca) && !empty($poder) && !empty($valorMineradora) 
                && !empty($valorInvestimento) && !empty($valorTaxa) && !empty($pagBoleto) && !empty($empresa) && !empty($mensagem) ) {
                    $u->conectar("adprime3", "localhost", "root", "");
                    if ($u->msgErro == "") {
                        if ($senha == $Csenha) {
                            if ($u->cadastrar($nome, $email, $senha, $rg, $cpf, $dataAniversario, $telefone, $celular, $endereco, $Nresidencia, $cep, $pais, $estado,
                            $complemento, $bairro, $cidade, $dadosWallStreet, $cotak1, $cotak3, $cotak21, $aporte, $licenca, $poder, $valorMineradora, $valorInvestimento, 
                            $valorTaxa, $pagBoleto, $empresa, $mensagem)) {
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



    <!-- rodapé -->

    <div id="copyright">
        <div class="diplay">
            <div class="row double">
                <div class="4u">
                    <div class="logoinf">
                        <H2>AD PRIME</H2>
                    </div>
                    <div class="textoinf">
                        <p>ASSOCIAÇÃO DE DEFESA E PROTEÇÃO AOS INTERESSES DOS INVESTIDORES EM MICRO EMPREENDIMENTOS EM
                            BLOCK CHAIN</p>
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
                <p style="font-size: 0.9em;">A Associação está expressamente proibida de representar pessoas que tenham
                    relação com os investigados.</p>
            </div>
        </div>
        <div id="divisaorodape">&nbsp;</div>

        <div class="voltar-ao-topo">
            <p><a href="#"><button class="button" id="voltar-ao-topo"><i class="fa fa-angle-up"
                            aria-hidden="true"></i></button></a></p>
        </div>
        <p style="font-size: 0.7em; margin-bottom: -2%;"> &#174 2020 Copyright Todos os direitos reservados AD Prime</p>
    </div>

    <script>
        function calcularTaxa(){  
            valor = document.getElementById("valortotal").value;
            taxa = valor * 1/100    
            campotaxa = document.getElementById("valortaxa");
            document.getElementById("valortaxa").value = taxa;
        }
        
    </script> 

</body>

</html>