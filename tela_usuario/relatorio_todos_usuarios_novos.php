<?php 
    include_once('../tela_pesquisar/conexao.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <heade>
        <meta charset="utf-8">
        <title>Gerar Exel</title>
    </heade>
    <body>
        <?php 

        $id_usuario = $_SESSION['id_usuario'];
        
        $arquivo = 'Relatório.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Relatorio Geral</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>Nome</b></td>';
        $html .= '<td><b>E-mail</b></td>';
        $html .= '<td><b>RG</b></td>';
        $html .= '<td><b>CPF</b></td>';
        $html .= '<td><b>DataAniversario</b></td>';
        $html .= '<td><b>Telefone</b></td>';
        $html .= '<td><b>Celular</b></td>';
        $html .= '<td><b>Endereço</b></td>';
        $html .= '<td><b>N° Residencia</b></td>';
        $html .= '<td><b>CEP</b></td>';
        $html .= '<td><b>Pais</b></td>';
        $html .= '<td><b>Estado</b></td>';
        $html .= '<td><b>Complemento</b></td>';
        $html .= '<td><b>Bairro</b></td>';
        $html .= '<td><b>Cidade</b></td>';
        $html .= '<td><b>Mensagem</b></td>';
        $html .= '<td><b>Comprovação de Investimento</b></td>';
        
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$resultado = "SELECT u.id_usuario as id_usuario, u.nome as nome, u.email as email, u.rg as rg, u.cpf as cpf, u.dataAniversario as dataAniversario,
         t.telefone as telefone, t.celular as celular,
         e.endereco as endereco, e.Nresidencia as Nresidencia, e.cep as cep, e.pais as pais, e.estado as estado, e.complemento as complemento, e.bairro as bairro, e.cidade as cidade,
         d.dadosWallStreet as dadosWallStreet, d.cotak1 as cotak1, d.cotak3 as cotak3, d.cotak21 as cotak21, d.aporte as aporte, d.licenca as licenca, d.valorMineradora as valorMineradora,
         d.valorInvestimento as valorInvestimento, d.valorTaxa as valorTaxa, d.pagBoleto as pagBoleto, d.empresa as empresa, d.mensagem as mensagem, d.comprovante as comprovante
        FROM usuarios as u 
        INNER JOIN telefone as t 
        ON t.fk_id_usuario = u.id_usuario
        INNER JOIN endereco AS e
        ON e.fk_id_usuario = u.id_usuario
        INNER JOIN dadosgerais as d
        on d.fk_id_usuario = u.id_usuario
        WHERE u.id_usuario != '$id_usuario' AND u.status = 'Ativo' AND u.novo = 'Novo' ORDER BY nome ";
		$relatorio = mysqli_query($conn , $resultado);
		
		while($row_relatorio = mysqli_fetch_assoc($relatorio)){
			$html .= '<tr>';
			$html .= '<td>'.$row_relatorio["id_usuario"].'</td>';
			$html .= '<td>'.$row_relatorio["nome"].'</td>';
            $html .= '<td>'.$row_relatorio["email"].'</td>';
            $html .= '<td>'.$row_relatorio["rg"].'</td>';
            $html .= '<td>'.$row_relatorio["cpf"].'</td>';
            $html .= '<td>'.$row_relatorio["dataAniversario"].'</td>';
            $html .= '<td>'.$row_relatorio["telefone"].'</td>';
            $html .= '<td>'.$row_relatorio["celular"].'</td>';
            $html .= '<td>'.$row_relatorio["endereco"].'</td>';
            $html .= '<td>'.$row_relatorio["Nresidencia"].'</td>';
            $html .= '<td>'.$row_relatorio["cep"].'</td>';
            $html .= '<td>'.$row_relatorio["pais"].'</td>';
            $html .= '<td>'.$row_relatorio["estado"].'</td>';
            $html .= '<td>'.$row_relatorio["complemento"].'</td>';
            $html .= '<td>'.$row_relatorio["bairro"].'</td>';
            $html .= '<td>'.$row_relatorio["cidade"].'</td>';
            $html .= '<td>'.$row_relatorio["mensagem"].'</td>';
            $html .= '<td>'.$row_relatorio["comprovante"].'</td>';
			$html .= '</tr>';
			;
        }
        
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>

        ?>
    </body>
</html>