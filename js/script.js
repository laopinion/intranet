$(document).ready(function() {
    
    $("header #barra .container #hamburger").click(function (){
    	$(this).toggleClass('open');
    	$("header #barra .container .menu").toggleClass("desplegar");
    });

}); //Cierre del document

