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
    <a class="active" href="usuario.php"><i class="fas fa-home"></i>&emsp;Home</a>
    <a class="menuleft" href="enviados.php"><i class="fas fa-upload"></i>&emsp;Arquivos Enviados</a>
    <a class="menuleft" href="recebidos.php"><i class="fas fa-download"></i>&emsp;Arquivos Recebidos</a>
    <a class="menuleft" id="enviar"><i class="fas fa-file-upload"></i>&emsp;Enviar Arquivos</a>
    <a class="menuleft" href="altera_senha.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
    <a class="deslogar" href="./logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>

  </div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    <div id="divisaorodape">&nbsp;</div>
</br>
    <form id="formsenha"action="processa_altera_senha.php" method="POST">
        <label>Sua senha atual</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="senha_atual" placeholder="Digite sua atual senha">
        <label>Sua nova senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="nova_senha" placeholder="Nova senha">
        <label>Confirme sua nova senha</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="conf_senha" placeholder="Digite novamente sua nova senha">
        <button id="trocasenha"type="submit">Alterar</button>
      </form>

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