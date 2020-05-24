<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" lang="pt-br" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" href="../css/alterarsenha.css">
  <link rel="stylesheet" href="../css/button.css">
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
      <h4>Dados do Usuário</h4><br>
    </div>
    <div id="divisaorodape">&nbsp;</div>

    <section class="container grid grid-template-columns-3">
      <div >
      <?php
      include("./arquivos_upload/db.php");
      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      
      $consulta = mysql_query("SELECT * FROM usuarios, telefone WHERE id_usuario = '$id' and fk_id_usuario = '$id' ");
      if ($resultado = mysql_fetch_array($consulta)){
          do {
            ?>
                <table border='3' style="width:100%">
                    <tr>
                        <th>Dados Pessoais</th>
                    </tr>
                    <tr>
                        <td>
                            <b>Nome: </b><?php echo $resultado["nome"]; ?> <br/>
                            <b>Email: </b><?php echo $resultado["email"]; ?> <br/>
                            
                            <b>RG: </b><?php echo $resultado["rg"]; ?> <br/>
                            <b>CPF: </b><?php echo $resultado["cpf"]; ?> <br/>
                            <b>Data de Aniversário: </b><?php echo $resultado["dataAniversario"]; ?> <br/>
                            <b>Telefone: </b><?php echo $resultado["telefone"]; ?> <br/>
                            <b>Celular: </b><?php echo $resultado["celular"]; ?> <br/>
                        </td>
                    </tr>
                </table><br/><br/>
        <?php
          }
          while($resultado = mysql_fetch_array($consulta));
          }
        ?>


<?php
      include("./arquivos_upload/db.php");
      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      
      $consulta = mysql_query("SELECT * FROM endereco WHERE fk_id_usuario = '$id' ");
      if ($resultado = mysql_fetch_array($consulta)){
          do {
            ?>
                <table border='3' style="width:100%">
                    <tr>
                        <th>Endereço</th>
                    </tr>
                    <tr>
                        <td>
                            <b>Endereço: </b><?php echo $resultado["endereco"]; ?> <br/>
                            <b>Bairro: </b><?php echo $resultado["bairro"]; ?> <br/>
                            <b>N° Residência: </b><?php echo $resultado["Nresidencia"]; ?> <br/>
                            <b>Complemento: </b><?php echo $resultado["complemento"]; ?> <br/>
                            <b>Cidade: </b><?php echo $resultado["cidade"]; ?> <br/>
                            <b>Cep: </b><?php echo $resultado["cep"]; ?> <br/>
                            <b>País: </b><?php echo $resultado["pais"]; ?> <br/>
                            <b>Estado: </b><?php echo $resultado["estado"]; ?> <br/>
                        </td>
                    </tr>
                </table><br/><br/>
        <?php
          }
          while($resultado = mysql_fetch_array($consulta));
          }
        ?>

<?php
      include("./arquivos_upload/db.php");
      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
      
      $consulta = mysql_query("SELECT * FROM dadosgerais WHERE fk_id_usuario = '$id' ");
      if ($resultado = mysql_fetch_array($consulta)){
          do {
            ?>
                <table border='3' style="width:100%">
                    <tr>
                        <th>Dados Gerais</th>
                    </tr>
                    <tr>
                        <td>
                            <b>Dados Wall Street: </b><?php echo $resultado["dadosWallStreet"]; ?> <br/>
                            <b>Aporte na empresa: </b> <i style="text-transform: uppercase;"><?php echo $resultado["aporte"]; ?> </i><br/>
                            <b>Cota: </b><?php echo $resultado["cotak1"].$resultado["cotak3"].$resultado["cotak21"]; ?> <br/>
                            <b>Possui licença de mineração: </b><?php echo $resultado["licenca"]; ?> <br/>
                            <b>Poder de mineração diária: </b><?php echo $resultado["poder"]; ?> <br/>
                            <b>Valor de cada mineradora e o valor total investido em mineradoras: </b><?php echo $resultado["valorMineradora"]; ?> <br/>
                            <b>Valor total de todos investimento: </b><i>R$ </i><?php echo $resultado["valorInvestimento"]; ?> <br/>
                            <b>Valor total dos investimentos (taxa): </b><i>R$ </i><?php echo $resultado["valorTaxa"]; ?> <br/>
                            <b>Melhor data para pagamento do boleto: </b>Dia <?php echo $resultado["pagBoleto"]; ?> <br/>
                            <b>Empresa: </b><?php echo $resultado["empresa"]; ?> <br/>
                            <b>Mesangem: </b><?php echo $resultado["mensagem"]; ?> <br/>
                            
                            
                        </td>
                    </tr>
                </table><br/><br/>

                <div class="bt-container">
                <?php echo "<a href='ativa_usuario.php?id=".$resultado['fk_id_usuario'] . " ' "; ?>
                <a style="background-color: #1E90FF; padding: 1% 2% 1% 2%; border-radius: 5px;" class="popupbt">Ativar Usuário</a>
                </div>
                
            
        <?php
          }
          while($resultado = mysql_fetch_array($consulta));
          }
        ?>
    </section>
    

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