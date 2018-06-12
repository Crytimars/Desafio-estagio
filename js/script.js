
/*
	Função é executada assim que o document estiver carregado.
*/
$(document).ready(function(){

	/*
		Quando o mouse passar por cima do botão, a classe nav-show é adicionado à tag nav, 
		dessa forma o "submenu" aparece para o usuário.
		
		Quando o mouser sair de cima do botão, a classe é removida da tag nav
	*/
	$("nav").mouseover(function(){
		$(".nav-itens").addClass("nav-show");
	});
	$("nav").mouseout(function(){
		$(".nav-itens").removeClass("nav-show");
	});

	/*
		Quando o mouse passar por cima do botão, a propriedade opacity é alterada para o valor 1,
		desta forma o tooltip aparece na view.

		Quando o mouser sair de cima do botão, a propriedade opacity volta para o valor definido 0.
	*/
	$("a.tooltips").mouseover(function(){
		$(this).children(".text_tooltip").css('opacity', '1');
	});

	$("a.tooltips").mouseout(function(){
		$(this).children(".text_tooltip").css('opacity', '0');
	});

	$(".text_tooltip").mouseover(function(e){
		e.stopPropagation();
	});
});