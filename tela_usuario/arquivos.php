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
  <link rel="stylesheet" href="../css/enviados.css">
  <script src="../js/arquivo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
  <!--menu lateral-->
  <div class="sidebar">
  <a class="active" href="administrador.php"><i class="fas fa-home"></i>&emsp;Home</a>
        <a class="menuleft" href="#"><i class="fas fa-calendar-alt"></i>&emsp;Agenda</a>
        <a class="menuleft" href="#" id="enviar"><i class="far fa-file-image"></i>&emsp;Imagens</a> 
        <a class="menuleft" href="#" id="enviar"><i class="fas fa-file-video"></i>&emsp;Vídeos</a>
        <a class="menuleft" href="#"><i class="fas fa-question-circle"></i>&emsp;FAQ</a>
        <a class="menuleft" href="arquivos.php"><i class="fas fa-file-upload"></i>&emsp;Arquivos</a>
        <a class="menuleft" href="envia_arquivo_adm.php" id=""><i class="fas fa-file-upload"></i>&emsp;Enviar Arquivos</a>
        <a class="menuleft" href="./ativar_usuarios.php" id="enviar"><i class="fas fa-user-plus"></i>&emsp;Ativar Usuários</a>
        <a class="menuleft" href="./listausuarios.php" id="trocarsenha"><i class="fas fa-users"></i>&emsp;Usuários Cadastrados</a>
        <a class="menuleft" href="../tela_pesquisar/tela_pesquisa.php" id="trocarsenha"><i class="fas fa-search"></i>&emsp;Pesquisa Personalizada</a>
        
        <a class="menuleft" href="altera_senha_adm.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
        <a class="deslogar" href="./logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>
  </div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    <div class="nomepage">
      <h4>Arquivos Recebidos</h4><br>
      <h5>Lista de todos os arquivos que você recebeu.</h5>
      <?php
      include("./arquivos_upload/db.php");

      $id_usuario = $_SESSION['id_usuario'];
      
      $consulta = mysql_query("SELECT COUNT(id_usuario) as contador FROM usuarios where id_usuario != '$id_usuario' and status = 'Ativo' ");
      if ($resultado = mysql_fetch_array($consulta)){
          do {
            echo "<h5> Usuários Listados " .$resultado['contador']. "</h5>";
          }
          while($resultado = mysql_fetch_array($consulta));
        }
        ?>
    </div>
    <div id="divisaorodape">&nbsp;</div>


    <!-- conteúdo da página-->
    <section class="container grid grid-template-columns-3">
      <div class="item subgrid">
        <div>ID</div>
        <div>NOME</div>
        <div>AÇÃO</div>
      </div>
    </section>
    
    <?php
      include("./arquivos_upload/db.php");
      
      $id_usuario = $_SESSION['id_usuario'];
      
      $consulta = mysql_query("SELECT arquivos.arquivo_nome, arquivos.arquivo_local, id_arquivo, fk_id_usuario, usuarios.id_usuario, usuarios.nome, usuarios.status FROM arquivos, usuarios 
      WHERE id_usuario != '$id_usuario' AND status = 'Ativo' GROUP BY nome");
        if ($resultado = mysql_fetch_array($consulta)){
          do { 
    ?>

      <section class="container grid grid-template-columns-3">
        <div class="item subgrid">
          <div>
          <?php 
          echo "<a>" . $resultado["id_usuario"] . "</a><br />";
        ?>
          </div>
          <div>

          <?php 
            echo $resultado['nome'];
          ?>

        </div>
          <div>
          <?php echo "<a href='listar_arquivos.php?id=".$resultado['id_usuario'] . " ' "; ?><a class="popupbt"><i class="far fa-eye"></i></a>

          <?php 
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $_SESSION['fk_id_usuario'] = $id;
          ?>

<?php echo "<a href='download_zip.php?download=" .$resultado['id_usuario'] ." ' "; ?><a class="popupbt"><i class="fas fa-download"></i></a> 
          </div>
        </div>
      </section>

        <?php
          }
          while($resultado = mysql_fetch_array($consulta));
          }
        ?>

      <div class="final">&nbsp;</div>

    <!-- POP UP-->
    <!--pop up conteúdo enviar arquivos-->
    <div id="modal-promocao" class="modal-container">
      <div class="modal">
        <button class="fechar">X</button>
        <h3 class="subtitulo">Enviar Arquivo</h3>
        <div id="divisaorodape" style="opacity: .3;">&nbsp;</div>
        <form name="Form_Upload_Arquivo" action="./arquivos_upload/upload.php" method="post" enctype="multipart/form-data">
          <p><b>Arquivo:</b>
            <input type="file" name="Arquivo" /></br></br>
            Somente (jpg, png, pdf, docx, doc, jpeg)</p>
          <br>
          <input class="popupbt" value="Enviar" type="submit" style="background-color: red; padding: 2% 2% 2% 2%; border-radius: 5px;">
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
