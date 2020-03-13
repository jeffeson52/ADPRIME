<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
    <a class="menuleft" id="enviar"><i class="fas fa-file-upload" ></i>&emsp;Enviar Arquivos</a>
    <a class="menuleft" href="altera_senha.php" id="trocarsenha"><i class="fas fa-key"></i>&emsp;Alterar Senha</a>
    <a class="deslogar" href="./logout.php"><i class="fas fa-sign-out-alt"></i>&emsp;Deslogar</a>

  </div>
  <!--barra azul do inicio-->
  <div class="content">
    <div class="barup">&nbsp;</div>
    <!-- nome da página barra cinza-->
    <div id="divisaorodape">&nbsp;</div>
</br>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <form enctype="multipart/form-data" action="processa_altera_senha.php" method="POST">
    <div class="form-group" >
        <label for="exampleInputEmail1">Digite sua senha atual:</label>
        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="senha_atual" placeholder="Digite sua atual senha">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Nova Senha:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="nova_senha" placeholder="Nova senha">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Digite novamente sua nova senha:</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="conf_senha" placeholder="Digite novamente sua nova senha">
    </div>
    <button type="submit" class="btn btn-primary">Alterar</button>
    </form>
  </div>
  <div class="col-sm-3"></div>
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<!-- final-->
</html>