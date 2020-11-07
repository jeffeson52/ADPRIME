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
  <link rel="stylesheet" href="../css/alterarsenha.css">
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
        <a class="menuleft" href="../tela_usuario/arquivos.php"><i class="fas fa-file-upload"></i>&emsp;Arquivos</a>
        <a class="menuleft" href="../tela_usuario/envia_arquivo_adm.php" id=""><i class="fas fa-file-upload"></i>&emsp;Enviar Arquivos</a>
        <a class="menuleft" href="../tela_usuario/ativar_usuarios.php" id="enviar"><i class="fas fa-user-plus"></i>&emsp;Ativar Usuários</a>
        <a class="menuleft" href="../tela_usuario/listausuarios.php" id="trocarsenha"><i class="fas fa-users"></i>&emsp;Usuários Cadastrados</a>
        <a class="menuleft" href="../tela_pesquisar/tela_pesquisa.php" id="trocarsenha"><i class="fas fa-search"></i>&emsp;Pesquisa Personalizada</a>
        <a class="menuleft" href="../tela_historico_update/historico_update.php" id="trocarsenha"><i class="fas fa-pencil-alt"></i>&emsp;Registros de Alteração</a>
        <a class="menuleft" href="../tela_usuario/altera_senha_adm.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
        <a class="deslogar" href="../tela_usuario/logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>

  </div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    

<div class="nomepage">
      <h4>Lista de usuários ativos/inativos</h4><br>
    </div>
    <div id="divisaorodape">&nbsp;</div>

    <section class="container grid grid-template-columns-3">
      <div class="item subgrid">
        <div>ID</div>
        <div>NOME</div>
        <div>AÇÃO</div>
      </div>
    </section>
    <?php
      include("../tela_usuario/arquivos_upload/db.php");

      $id_usuario = $_SESSION['id_usuario'];
      
      $consulta = mysql_query("SELECT * FROM usuarios WHERE status = 'Inativo' and status != 'Invisivel' and id_usuario != '$id_usuario'
      union (select * from usuarios where status != 'Inativo' and status != 'Invisivel' and id_usuario != '$id_usuario' GROUP BY nome ASC) ");
      if ($resultado = mysql_fetch_array($consulta)){
          do {
            ?>
            <section class="container grid grid-template-columns-3">
              <div class="item subgrid">
                <div>
                  <?php
                    echo $resultado["id_usuario"];
                  ?>
                </div>

                <div>
                  <?php
                  echo $resultado["nome"];  
                  ?>
                </div>

        <div>
        <?php echo "<a href='historico_user.php?id=".$resultado['id_usuario'] . " ' "; ?><a class="popupbt"><i class="fas fa-pencil-alt"></i></a> 
        </div>

      </div>
    </section>

        <?php
          }
          while($resultado = mysql_fetch_array($consulta));
          }
        ?></br></br>


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
          
          <input class="popupbt" value="Enviar" type="submit" style="background-color: red; padding: 2% 2% 2% 2%; border-radius: 5px;" >
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


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<!-- final-->
</html>