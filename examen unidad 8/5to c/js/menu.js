$(document).ready(main);
var cont = 1;

function main(){
	$('.menu_bar').click(function(){
		//$('nav').toggle();
		var ancho = screen.width;
		if(cont == 1)
		{
			$('nav').animate({
			top:'30%'});
			cont = 0;
		}
		else
		{
			cont = 1;
			$('nav').animate({
				top:'-132%'});
		}

	});
	window.onscroll = function (){

		if(cont==0){
			cont = 1;
			$('nav').animate({
			top:'-132%'});
		}	
	}
}

