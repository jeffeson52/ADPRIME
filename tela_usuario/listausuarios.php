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
  <link rel="stylesheet" href="../css/listausuarios.css">
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
    <a class="menuleft" href="altera_senha_adm.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
    <a class="deslogar" href="./logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>
</div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    <div class="nomepage">
      <h4>Lista Usuários</h4><br>
      <h5>Lista de todos os usuários ATIVOS.</h5>
    </div>
    <div id="divisaorodape">&nbsp;</div>


    <!-- conteúdo da página-->
    <section class="container grid grid-template-columns-3">
      <div class="item subgrid">
        <div>TIPO USUÁRIO</div>
        <div>NOME</div>
        <div>AÇÃO</div>
      </div>
    </section>

    <?php
      include("./arquivos_upload/db.php");

      $id_usuario = $_SESSION['id_usuario'];
      
      $consulta = mysql_query("SELECT * FROM `usuarios` WHERE status = 'Ativo' and id_usuario != '$id_usuario' ORDER BY `nome` ASC ");
      if ($resultado = mysql_fetch_array($consulta)){
          do {
            ?>
            <section class="container grid grid-template-columns-3">
              <div class="item subgrid">
                <div>
                  <?php
                  $nivel = $resultado['nivel'];
                  if($nivel == 1){
                    echo "ADM";
                  }else{
                    echo "USER";
                  }
                  ?>
                </div>

                <div>
                  <?php
                  echo $resultado["nome"];
                  ?>
                </div>

        <div>
        <?php echo "<a href='altera_nivel_adm.php?id=".$resultado['id_usuario'] . " ' "; ?><a class="popupbt">ADM</a>
        <?php echo "<a href='altera_nivel_user.php?id=".$resultado['id_usuario'] . " ' "; ?><a class="popupbt">USER</a>
        <?php echo "<a href='../tela_atualiza_dados/adm_atualiza_dados_user.php?id=".$resultado['id_usuario'] . " ' "; ?><a class="popupbt"><i class="fas fa-edit"></i></a>
        <?php echo "<a href='delete_usuario.php?id=".$resultado['id_usuario'] . " ' "; ?><a class="popupbt"><i class="fas fa-trash-alt"></i></a>
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

        <form>
          <label type="text">Nome do Arquivo</label><br><br>
          <input type="text" class="input" style="width: 80%; padding: 1.5% 1%;"
            placeholder="Informe o nome do arquivo."><br><br>
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