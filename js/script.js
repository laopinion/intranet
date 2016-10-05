$(document).ready(function() {
    
    $("header #barra .container #hamburger").click(function (){
    	$(this).toggleClass('open');
    	$("header #barra .container .menu").toggleClass("desplegar");
    	$("header #barra .container .fondo").toggle();
    });

    //INICIO CUMPLEAÑOS
	$('#home .content .cumple .next').click(function(){
		// click++;
		// if(click == 2){
		// 	$('#home .content .cumple .view-content').css("left", "0px");
		// }
		$('#home .content .cumple .view-content').css("left", "-939px");
		$('#home .content .cumple .next').css("display", "none");
		$('#home .content .cumple .previous').css("display", "block");
	});

	$('#home .content .cumple .previous').click(function(){
		$('#home .content .cumple .view-content').css("left", "23px");		
		$('#home .content .cumple .next').css("display", "block");
		$('#home .content .cumple .previous').css("display", "none");
	});//FIN CUMPLEÑAOS

	//INICIO VACACIONES
	$('#home .content .vacaciones .next').click(function(){
		$('#home .content .vacaciones .view-content').css("left", "-939px");
		$('#home .content .vacaciones .next').css("display", "none");
		$('#home .content .vacaciones .previous').css("display", "block");
	});

	$('#home .content .vacaciones .previous').click(function(){
		$('#home .content .vacaciones .view-content').css("left", "23px");		
		$('#home .content .vacaciones .next').css("display", "block");
		$('#home .content .vacaciones .previous').css("display", "none");
	});//FIN VACACIONES

	//INICIO FECHAS PARA RECORDAR
	$('#home .content .fechas-recordar .next').click(function(){
		$('#home .content .fechas-recordar .view-content').css("left", "-939px");
		$('#home .content .fechas-recordar .next').css("display", "none");
		$('#home .content .fechas-recordar .previous').css("display", "block");
	});

	$('#home .content .fechas-recordar .previous').click(function(){
		$('#home .content .fechas-recordar .view-content').css("left", "0px");		
		$('#home .content .fechas-recordar .next').css("display", "block");
		$('#home .content .fechas-recordar .previous').css("display", "none");
	});//FIN FECHAS PARA RECORDAR

	/*---------SECCION CUMPLEAÑOS-----------*/
	//INICIO VACACIONES
	$('#cumpleanos .vacaciones .next').click(function(){
		$('#cumpleanos .vacaciones .view-content').css("left", "-939px");
		$('#cumpleanos .vacaciones .next').css("display", "none");
		$('#cumpleanos .vacaciones .previous').css("display", "block");
	});

	$('#cumpleanos .vacaciones .previous').click(function(){
		$('#cumpleanos .vacaciones .view-content').css("left", "23px");		
		$('#cumpleanos .vacaciones .next').css("display", "block");
		$('#cumpleanos .vacaciones .previous').css("display", "none");
	});//FIN VACACIONES

}); //Cierre del document

