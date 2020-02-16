<?php
    session_start();
    if(!isset($_SESSION['id_usuario'])){
        header("location: ../tela_login/login.php");
        exit;
    }
?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="../css/administrador.css">
    <script src="../js/arquivo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
</head>

<body>
    <form method="POST">
    <!--menu lateral-->
    <div class="sidebar">
        <a class="active" href="administrador.php"><i class="fas fa-home"></i>&emsp;Home</a>
        <a class="menuleft" href="#"><i class="fas fa-calendar-alt"></i>&emsp;Agenda</a>
        <a class="menuleft" href="#" id="enviar"><i class="far fa-file-image"></i>&emsp;Imagens</a> 
        <a class="menuleft" href="#" id="enviar"><i class="fas fa-file-video"></i>&emsp;Vídeos</a> 
        <a class="menuleft" href="#"><i class="fas fa-question-circle"></i>&emsp;FAQ</a>
        <a class="menuleft" href="#"><i class="fas fa-file-upload"></i>&emsp;Arquivos</a>
        <a class="menuleft" href="./cadastrarUsuario.php" id="enviar"><i class="fas fa-user-plus"></i>&emsp;Cadastrar Usuário</a>
        <a class="menuleft" href="./listausuarios.html" id="trocarsenha"><i class="fas fa-user"></i>&emsp;Usuários Cadastrados</a>
        <a class="deslogar" href="./logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>
    </div>
    <!--barra azul do inicio-->
    <div class="content">
        <div class="barup">&nbsp;</div>

        <!-- nome da página barra cinza-->
        <div class="nomepage">
            <h4>HOME</h4><br>
            <h5>Ultimas Noticias</h5>
        </div>
        <div id="divisaorodape">&nbsp;</div>

        <!--conteúdo da página-->
        <!-- GRID NOTICIAS-->
        <div class="noticias">
            <div class="imagens">
                <a href="../index.html"><img src="../images/download.jpg" width="90%" height="100%"></a>
            </div>
            <div class="textimagens"><a href="../index.html"><span><i class="far fa-clock"></i> 20/01/2020</span>
          <h3>ESTE É O TITULO DA NOTICIA</h3>
          <p>Aqueles que demonstrarem legítimo interesse na apuração, elucidação, conhecimento e divulgação dos fatos
            ocorridos em torno da execução do plano de investimento e das atividades exercidas pela aludida sociedade
            empresarial;

            3. Pessoas que de alguma forma sofreram ou ainda sofrem prejuízos, de ordem material ou não material, uma
            vez
            que, ao que tudo indica, assim como os diretores e fundadores da associação e tantos outros, também
            acreditaram ou foram levados a acreditar na viabilidade da proposta de investimento de seus recursos na WS
            CORPORATE.</p>
        </a>
            </div>
            <div class="avaliacao">&emsp;Gostou disso?&emsp;<i class="fas fa-heart" style="color: red;"></i>&nbsp;1&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<i class="fas fa-comment">&nbsp;1</i>&emsp;<i class="fas fa-book"></i>&nbsp;Leia mais</div>
        </div>

        <!-- POP UP-->
        <!--pop up conteúdo enviar arquivos-->
        <div id="modal-promocao" class="modal-container">
            <div class="modal">
                <button class="fechar">X</button>
                <h3 class="subtitulo">Enviar Arquivo</h3>
                <div id="divisaorodape" style="opacity: .3;">&nbsp;</div>

                <form>
                    <label type="text">Nome do Arquivo</label><br><br>
                    <input type="text" class="input" style="width: 80%; padding: 1.5% 1%;" placeholder="Informe o nome do arquivo."><br><br>
                    <p><b>Arquivo:</b> Somente (jpg, png, pdf, docx, doc, jpeg)</p>
                    <a class="popupbt"><i class="fas fa-file-upload"></i>&emsp;Escolher Arquivo</a><br><br>

                    <input class="popupbt" value="Enviar" style="background-color: red; padding: 2% 0 2% 0; border-radius: 5px;">
                </form>
            </div>
        </div>
        <!--pop up alterar senha-->
        <div id="trocar-senha" class="modal-container">
            <div class="modal">
                <button class="fechar">X</button>
                <h3 class="subtitulo">Alterar Senha</h3>
                <div id="divisaorodape" style="opacity: .3;">&nbsp;</div>

                <form>
                    <label type="text">Nova Senha</label><br><br>
                    <input type="password" id="show1" class="input" style="width: 80%; padding: 1.5% 1%;" placeholder="Informe a nova senha."><br><br>
                    <button id="mostrarsenha2" type="button" onclick="mostrarSenha1()" style="position: absolute;font-size:1.3em;"><i class="far fa-eye"></i></button>
                    <label type="text">Confirmar Senha</label><br><br>
                    <input type="password" id="show2" class="input" style="width: 80%; padding: 1.5% 1%;" placeholder="Confirme a nova senha."><br><br>
                    <input class="popupbt" value="Alterar" style="background-color: red; padding: 2% 0 2% 0; border-radius: 5px;">
                </form>
            </div>
        </div>
        <!-- rodapé-->
        <div id="divisaorodape">&nbsp;</div>

        <div class="voltar-ao-topo">
            <p><a href="#"><button class="button" id="voltar-ao-topo"><i class="fa fa-angle-up"
              aria-hidden="true"></i></button></a></p>
        </div>
        <div class="Copyright">
            <p style="font-size: 0.7em; margin-bottom: -2%;"> &#174 2020 Copyright Todos os direitos reservados AD Prime</p>
        </div>
    </div>
</form>
</body>

<!-- final-->

</html>