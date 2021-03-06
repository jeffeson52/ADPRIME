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
  <meta http-equiv="content-type" content="text/html; charset=utf-8" lang="pt-br" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="../css/usuario.css">
  <script src="../js/arquivo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
  <!--menu lateral-->
  <div class="sidebar">
    <a class="active" href="usuario.php"><i class="fas fa-home"></i>&emsp;Home</a>
    <a class="menuleft" href="enviados.php"><i class="fas fa-upload"></i>&emsp;Arquivos Enviados</a>
    <a class="menuleft" href="recebidos.php"><i class="fas fa-download"></i>&emsp;Arquivos Recebidos</a>
    <a class="menuleft" id="enviar"><i class="fas fa-file-upload"></i>&emsp;Enviar Arquivos</a>
    <a class="menuleft" href="../tela_atualiza_dados/atualiza_dados_user.php" id="trocarsenha"><i class="fas fa-user-edit"></i>&emsp;Atualizar dados</a>
    <a class="menuleft" href="altera_senha.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
    <a class="deslogar" href="./logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>
  </div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    <div id="divisaorodape">&nbsp;</div>
    <!-- conteúdo da página-->




    
  
    <!-- POP UP-->
    <!--pop up conteúdo enviar arquivos-->
    <div id="modal-promocao" class="modal-container">
      <div class="modal">
        <button class="fechar">X</button>
        <h3 class="subtitulo">Enviar Arquivo</h3>
        <div id="divisaorodape" style="opacity: .3;">&nbsp;</div>
        <form name="Form_Upload_Arquivo" action="./arquivos_upload/upload.php" method="post" enctype="multipart/form-data">
          <p><b>Arquivo(NOME DO ARQUIVO NÃO PODE CONTER ESPAÇOS):</b></p>
            <input type="file" name="Arquivo" />
            <p>Somente (jpg, png, pdf, docx, doc, jpeg)</p>
          <input value="Enviar" type="submit" style="background-color: red; padding: 2% 2% 2% 2%; border-radius: 5px; border: none;">
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

    <!--JAVA DO POP UP ENVIAR ARQUIVO-->
    <script>
      function iniciaModal(modalID) {
        const modal = document.getElementById(modalID);
        if (modal) {
          modal.classList.add('mostrar');
          modal.addEventListener('click', (e) => {
            if (e.target.id == modalID || e.target.className == 'fechar') {
              modal.classList.remove('mostrar');
            }
          });
        }
      }
      const logo = document.querySelector('#enviar');
      logo.addEventListener('click', () => iniciaModal('modal-promocao'));
    </script>

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
</body>
<!-- final-->
</html>