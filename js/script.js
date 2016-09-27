$(document).ready(function() {
    
    $("header #barra .container #hamburger").click(function (){
    	$(this).toggleClass('open');
    	$("header #barra .container .menu").toggleClass("desplegar");
    	$("header #barra .container .fondo").toggle();
    });

}); //Cierre del document

