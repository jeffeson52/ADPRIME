$(function(){
	$("#pesquisa_estado").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('proc_pesq_estado.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado_estado").html(retorna);
			});
		}
	});
});