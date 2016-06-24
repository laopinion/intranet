$(document).ready(function() {
    /*$('#user').hover(function(){
		$('.display').css("display", "block");
	});*/

    $('#menu').on( "click", function() {	 
	        $('#target').toggle();
	});

	$('.file a').text("Descargar");

	var departamento = $(".texto .field-name-field-departamento .field-item").text();
	console.log(departamento)
	$(".texto .field-name-field-departamento .field-label").addClass(departamento);

	//$(".views-slideshow-controls-text-previous a").text("");
	/*$(".views-slideshow-controls-text-previous a").css("background", "../img/previous.svg");*/
	//$(".views-slideshow-controls-text-next a").text("");
	/*$(".views-slideshow-controls-text-next a").css("background", "../img/next.svg");*/

}); //Cierre del document

