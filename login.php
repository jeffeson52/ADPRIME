<?php
session_start();
include('conexaoLogin.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: login.html');
    exit();
}

$usuario = mysqli_real_scape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_scape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: telausuario.html');
    exit;
}else{
    header('Location: login.html')
}

//na tela do usuario para pega a sessão do mesmo usa 
//<?php
//session_start();
//include('verifica_login.php');
//<h2>Olá, <?php echo $_SESSION['usuario'];</h2>