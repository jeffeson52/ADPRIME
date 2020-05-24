<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
session_start();

$usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
$id_usuario = $_SESSION['id_usuario'];

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT COUNT(*) as contador FROM usuarios WHERE nome LIKE '%$usuarios%' AND id_usuario != '$id_usuario'";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo "<span class='number-conta'> - ".$row_user['contador']."</span>";
		
	}
}else{
	echo "0";
}


	