<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
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
  <link rel="stylesheet" href="../css/pesquisar.css">
  <script src="../js/arquivo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
  <!--menu lateral-->
  <div class="sidebar">
    <a class="active" href="../tela_usuario/administrador.php"><i class="fas fa-home"></i>&emsp;Home</a>
    <a class="menuleft" href="#"><i class="fas fa-calendar-alt"></i>&emsp;Agenda</a>
    <a class="menuleft" href="#" id="enviar"><i class="far fa-file-image"></i>&emsp;Imagens</a>
    <a class="menuleft" href="#" id="enviar"><i class="fas fa-file-video"></i>&emsp;Vídeos</a>
    <a class="menuleft" href="#"><i class="fas fa-question-circle"></i>&emsp;FAQ</a>
    <a class="menuleft" href="../tela_usuario/arquivos.php"><i class="fas fa-file-upload"></i>&emsp;Arquivos</a>
    <a class="menuleft" href="../tela_usuario/envia_arquivo_adm.php" id=""><i class="fas fa-file-upload"></i>&emsp;Enviar Arquivos</a>
    <a class="menuleft" href="../tela_usuario/ativar_usuarios.php" id="enviar"><i class="fas fa-user-plus"></i>&emsp;Ativar Usuários</a>
    <a class="menuleft" href="../tela_usuario/listausuarios.php" id="trocarsenha"><i class="fas fa-users"></i>&emsp;Usuários Cadastrados</a>
    <a class="menuleft" href="../tela_pesquisar/tela_pesquisa.php" id="trocarsenha"><i class="fas fa-search"></i>&emsp;Pesquisa Personalizada</a>
    <a class="menuleft" href="../tela_usuario/altera_senha_adm.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
    <a class="deslogar" href="../tela_usuario/logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>
  </div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    <div class="nomepage">
      <h4>Pesquisa Personalizada</h4><br>
    </div>
    <div id="divisaorodape">&nbsp;</div>


    <!-- conteúdo da página-->

    <h2>Pesquisar pelo nome do usuários <a class='resultado_contador'></a></h2>
    <form method="POST" id="form-pesquisa" action="">
      <label>Pesquisar: </label>
      <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do usuário">
    </form>

    <a class='resultado'></a></br></br>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="personalizado.js"></script>
    <script type="text/javascript" src="contador_user.js"></script>

    <form method="POST" id="form-pesquisa" action="gerar_exel_nome.php">
      <label>Pesquisar: </label>
      <input type="text" name="pesquisa_nome" id="pesquisa_nome" placeholder="Digite o nome do usuário"><button type="submit" class="btn-exel">Gerar Excel</button>
    </form></br>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="divisaorodape">&nbsp;</div>

    <h2>Pesquisar por cidade <a class='contador_regiao'></a></h2>
    <form method="POST" id="form-pesquisa" action="">
      <label>Pesquisar: </label>
      <input type="text" name="pesquisa_regiao" id="pesquisa_regiao" placeholder="Digite a cidade">
    </form>

    <a class="resultado_regiao"></a></br></br>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="personalizado_regiao.js"></script>
    <script type="text/javascript" src="contador_regiao.js"></script>

    <form method="POST" id="form-pesquisa" action="gerar_exel_cidade.php">
      <label>Pesquisar: </label>
      <input type="text" name="pesquisa_cidade" id="pesquisa_cidade" placeholder="Digite a cidade"><button type="submit" class="btn-exel">Gerar Excel</button>
    </form></br>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="divisaorodape">&nbsp;</div>

    <h2>Pesquisar por estado <a class='contador_estado'></a></h2>
    <form method="POST" id="form-pesquisa" action="">
      <label>Pesquisar: </label>
      <input type="text" name="pesquisa_estado" id="pesquisa_estado" placeholder="Digite o estado">
    </form>

    <a class="resultado_estado"></a></br></br>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script type="text/javascript" src="personalizado_estado.js"></script>
    <script type="text/javascript" src="contador_estado.js"></script>

    <form method="POST" id="form-pesquisa" action="gerar_exel_estado.php">
      <label>Pesquisar: </label>
      <input type="text" name="pesquisa_estado" id="pesquisa_estado" placeholder="Digite a cidade"><button type="submit" class="btn-exel">Gerar Excel</button>
    </form></br>
    <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <div id="divisaorodape">&nbsp;</div>

    <h2>Gerar Relatorio por estados</h2>
    <form method='POST' id='form-pesquisa' action='gerar_exel_varias_cidades.php'>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <input type='checkbox' name='ac' value='ok' />AC</br>
            <input type='checkbox' name='al' value='ok' />AL</br>
            <input type='checkbox' name='ap' value='ok' />AP</br>
            <input type='checkbox' name='am' value='ok' />AM</br>
            <input type='checkbox' name='ba' value='ok' />BA</br>
            <input type='checkbox' name='ce' value='ok' />CE</br>
            <input type='checkbox' name='df' value='ok' />DF</br>
            <input type='checkbox' name='es' value='ok' />ES</br>
            <input type='checkbox' name='go' value='ok' />GO</br> 
          </div>
          <div class="col-sm">
            <input type='checkbox' name='ma' value='ok' />MA</br>
            <input type='checkbox' name='mt' value='ok' />MT</br>
            <input type='checkbox' name='ms' value='ok' />MS</br>
            <input type='checkbox' name='mg' value='ok' />MG</br>
            <input type='checkbox' name='pa' value='ok' />PA</br>
            <input type='checkbox' name='pb' value='ok' />PB</br>
            <input type='checkbox' name='pr' value='ok' />PR</br>
            <input type='checkbox' name='pe' value='ok' />PE</br>
            <input type='checkbox' name='pi' value='ok' />PI</br>
            
          </div>
          <div class="col-sm">
            <input type='checkbox' name='rj' value='ok' />RJ</br>
            <input type='checkbox' name='rn' value='ok' />RN</br>
            <input type='checkbox' name='rs' value='ok' />RS</br>
            <input type='checkbox' name='ro' value='ok' />RO</br>
            <input type='checkbox' name='rr' value='ok' />RR</br>
            <input type='checkbox' name='sc' value='ok' />SC</br>
            <input type='checkbox' name='sp' value='ok' />SP</br>
            <input type='checkbox' name='se' value='ok' />SE</br>
            <input type='checkbox' name='to' value='ok' />TO</br>
          </div>
        </div>
      </div>
      <input type='submit' value='Enviar' />
    </form>

    <div class="final">&nbsp;</div>

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
          <p><b>Arquivo:</b>
            Somente (jpg, png, pdf, docx, doc, jpeg)</p>
          <a class="popupbt"><i class="fas fa-file-upload"></i>&emsp;Escolher Arquivo</a><br><br>

          <input class="popupbt" value="Enviar" style="background-color: red; padding: 2% 0 2% 0; border-radius: 5px;">
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
</body>
<!-- final-->

</html>