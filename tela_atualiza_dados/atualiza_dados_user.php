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
  <link rel="stylesheet" href="../css/button.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body>
  <!--menu lateral-->
  <div class="sidebar">
    <a class="active" href="../tela_usuario/usuario.php"><i class="fas fa-home"></i>&emsp;Home</a>
    <a class="menuleft" href="../tela_usuario/enviados.php"><i class="fas fa-upload"></i>&emsp;Arquivos Enviados</a>
    <a class="menuleft" href="../tela_usuario/recebidos.php"><i class="fas fa-download"></i>&emsp;Arquivos Recebidos</a>
    <a class="menuleft" id="enviar"><i class="fas fa-file-upload"></i>&emsp;Enviar Arquivos</a>
    <a class="menuleft" href="atualiza_dados_user.php" id="trocarsenha"><i class="fas fa-user-edit"></i>&emsp;Atualizar dados</a>
    <a class="menuleft" href="../tela_usuario/altera_senha.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
    <a class="deslogar" href="../tela_usuario/logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>
  </div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    
    <!-- conteúdo da página-->


    <div class="nomepage">
      <h4>Dados do Usuário</h4><br>
    </div>
    <div id="divisaorodape">&nbsp;</div>

    <section class="container grid grid-template-columns-3">
      <div >
      <?php
      include("../tela_usuario/arquivos_upload/db.php");
      
      $id = $_SESSION['id_usuario'];
      
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

          <div class="bt-container">
          <a href="altera_dados_pessoais.php" style="background-color: #1E90FF; padding: 1% 2% 1% 2%; border-radius: 5px;" class="popupbt">Alterar Dados</a>
          </div><br />

<div id="divisaorodape">&nbsp;</div><br />


<?php
      include("../tela_usuario/arquivos_upload/db.php");
      $id = $_SESSION['id_usuario'];
      
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

          <div class="bt-container">
          <a href="altera_endereco.php" style="background-color: #1E90FF; padding: 1% 2% 1% 2%; border-radius: 5px;" class="popupbt">Alterar Dados</a>
          </div><br />

<div id="divisaorodape">&nbsp;</div><br />

<?php
      include("../tela_usuario/arquivos_upload/db.php");
      $id = $_SESSION['id_usuario'];
      
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
                            <b>Cota: </b>
                            <?php 
                              $cotak1DB = $resultado['cotak1'];
                              $cotak3DB = $resultado['cotak3'];
                              $cotak21DB = $resultado['cotak21'];
                              if($cotak1DB == ''){
                                echo "";
                              }else{
                                echo $cotak1DB.",";
                              }
                              if($cotak3DB == ''){
                                echo "";
                              }else{
                                echo $cotak3DB.",";
                              }
                              if($cotak21DB == ''){
                                echo "";
                              }else{
                                echo $cotak21DB.",";
                              }
                            ?> <br/>
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

          <!-- <div class="bt-container">
          <a href="altera_dados_gerais.php" style="background-color: #1E90FF; padding: 1% 2% 1% 2%; border-radius: 5px;" class="popupbt">Alterar Dados</a>
          </div><br /> -->
                
            
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