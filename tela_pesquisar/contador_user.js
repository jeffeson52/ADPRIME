$(function(){
	$("#pesquisa").keyup(function(){
		//Recuperar o valor do campo
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('contador_user.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado_contador").html(retorna);
			});
		}
	});
});