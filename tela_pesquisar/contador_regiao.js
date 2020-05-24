$(function(){
	$("#pesquisa_regiao").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('contador_regiao.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".contador_regiao").html(retorna);
			});
		}
	});
});