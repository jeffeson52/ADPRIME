<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';
session_start();

$estado = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
$id_usuario = $_SESSION['id_usuario'];

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM usuarios, endereco WHERE id_usuario = fk_id_usuario AND estado LIKE '%$estado%' AND id_usuario != '$id_usuario' AND fk_id_usuario != '$id_usuario' ";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo "<li>".$row_user['nome']."</li>";
	}
}else{
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nenhum usuário encontrado ...";
}