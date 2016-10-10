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

	/*---------SECCION VACACIONES-----------*/
	//INICIO CUMPLEAÑOS
	$('#vacaciones .cumple .next').click(function(){
		$('#vacaciones .cumple .view-content').css("left", "-939px");
		$('#vacaciones .cumple .next').css("display", "none");
		$('#vacaciones .cumple .previous').css("display", "block");
	});

	$('#vacaciones .cumple .previous').click(function(){
		$('#vacaciones .cumple .view-content').css("left", "23px");		
		$('#vacaciones .cumple .next').css("display", "block");
		$('#vacaciones .cumple .previous').css("display", "none");
	});//FIN CUMPLEAÑOS

	var mes = $("#entrevista-mes .entrevista-actual .view-display-id-block .views-field-field-fecha span").html();
	//console.log(mes);
	
	if(mes == "Enero"){
	  $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-122px -42px");
    }else if(mes == "Febrero"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-90px -42px");
    }else if(mes == "Marzo"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-50px -42px");
    }else if(mes == "Abril"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-86px -3px");
    }else if(mes == "Mayo"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-6px -40px");
    }else if(mes == "Junio"){
      $(this).find(".emojis").css("background-position", "-5px -4px");
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-5px -4px");
    }else if(mes == "Julio"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-50px -3px");
    }else if(mes == "Agosto"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-85px -80px");
    }else if(mes == "Septiembre"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-120px -248px");
    }else if(mes == "Octubre"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-50px -80px");
    }else if(mes == "Noviembre"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-158px -285px");
    }else if(mes == "Diciembre"){
      $("#entrevista-mes .entrevista-actual .view-display-id-block .emojis").css("background-position", "-7px -205px");
    }
    // var seccion = $(".view-principal.view-display-id-block .views-row-1 .nota .seccion .color").html();
    $("#entrevista-mes .view-id-secciones.view-display-id-block_1 .views-row").each(function(){
    	var mes = $(this).find(".views-field-field-fecha-1 span").html();
    	//console.log(mes);
	    if(mes == "Enero"){
	      $(this).find(".emojis").css("background-position", "-122px -42px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #005691"}); 
	      $(this).find("h3").css({background:"#005691"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#005691"});  
	    }else if(mes == "Febrero"){
	      $(this).find(".emojis").css("background-position", "-90px -42px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #F18751"}); 
	      $(this).find("h3").css({background:"#F18751"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#F18751"});
	    }else if(mes == "Marzo"){
	      $(this).find(".emojis").css("background-position", "-50px -42px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #42ACB2"}); 
	      $(this).find("h3").css({background:"#42ACB2"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#42ACB2"});
	    }else if(mes == "Abril"){
	      $(this).find(".emojis").css("background-position", "-86px -3px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #7EC4A7"}); 
	      $(this).find("h3").css({background:"#7EC4A7"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#7EC4A7"});
	    }else if(mes == "Mayo"){
	      $(this).find(".emojis").css("background-position", "-6px -40px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #9760A4"}); 
	      $(this).find("h3").css({background:"#9760A4"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#9760A4"});
	    }else if(mes == "Junio"){
	      $(this).find(".emojis").css("background-position", "-5px -4px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #899657"}); 
	      $(this).find("h3").css({background:"#899657"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#899657"});
	    }else if(mes == "Julio"){
	      $(this).find(".emojis").css("background-position", "-50px -3px ");
	      $(this).find("img").css({border:"20px solid #C172AD"}); 
	      $(this).find("h3").css({background:"#C172AD"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#C172AD"});
	    }else if(mes == "Agosto"){
	      $(this).find(".emojis").css("background-position", "-85px -80px");
	      $(this).find("img").css({border:"20px solid #01A3BF"}); 
	      $(this).find("h3").css({background:"#01A3BF"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#01A3BF"});
	    }else if(mes == "Septiembre"){
	      $(this).find(".emojis").css("background-position", "-120px -248px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #D61A21"}); 
	      $(this).find("h3").css({background:"#D61A21"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#D61A21"});
	    }else if(mes == "Octubre"){
	      $(this).find(".emojis").css("background-position", "-50px -80px ");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #F29100"}); 
	      $(this).find("h3").css({background:"#F29100"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#F29100"});
	    }else if(mes == "Noviembre"){
	      $(this).find(".emojis").css("background-position", "-158px -285px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #E796B7"}); 
	      $(this).find("h3").css({background:"#E796B7"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#E796B7"});
	    }else if(mes == "Diciembre"){
	      $(this).find(".emojis").css("background-position", "-7px -205px");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find("img").css({border:"20px solid #007644"}); 
	      $(this).find("h3").css({background:"#007644"}); 
	      $(this).find(".views-field-field-fecha-1").css({background:"#007644"});
	    }
    });

	//Galerias
	$("#galerias .view-id-secciones.view-display-id-block_3 .views-row").each(function(){
    	var mes = $(this).find(".fecha span").html();
    	//console.log(mes);
	    if(mes == "Enero"){
	      $(this).find(".emojis").css("background-position", "-122px -42px");
	      $(this).find(".fecha").css({background:"#005691"});  
	    }else if(mes == "Febrero"){
	      $(this).find(".emojis").css("background-position", "-90px -42px");
	      $(this).find(".fecha").css({background:"#F18751"}); 
	    }else if(mes == "Marzo"){
	      $(this).find(".emojis").css("background-position", "-50px -42px");
	      $(this).find(".fecha").css({background:"#42ACB2"}); 
	    }else if(mes == "Abril"){
	      $(this).find(".emojis").css("background-position", "-86px -3px");
	      $(this).find(".fecha").css({background:"#7EC4A7"}); 
	    }else if(mes == "Mayo"){
	      $(this).find(".emojis").css("background-position", "-6px -40px");
	      $(this).find(".fecha").css({background:"#9760A4"}); 
	    }else if(mes == "Junio"){
	      $(this).find(".emojis").css("background-position", "-5px -4px");
	      $(this).find(".fecha").css({background:"#899657"}); 
	    }else if(mes == "Julio"){
	      $(this).find(".emojis").css("background-position", "-50px -3px ");
	      $(this).find(".fecha").css({background:"#C172AD"}); 
	    }else if(mes == "Agosto"){
	      $(this).find(".emojis").css("background-position", "-85px -80px");
	      $(this).find(".fecha").css({background:"#01A3BF"}); 
	    }else if(mes == "Septiembre"){
	      $(this).find(".emojis").css("background-position", "-120px -248px");
	      $(this).find(".emojis").css("left", "135px");
	      $(this).find(".fecha").css({background:"#D61A21"}); 
	    }else if(mes == "Octubre"){
	      $(this).find(".emojis").css("background-position", "-50px -80px ");
	      $(this).find(".emojis").css("left", "100px");
	      $(this).find(".fecha").css({background:"#F29100"}); 
	    }else if(mes == "Noviembre"){
	      $(this).find(".emojis").css("background-position", "-158px -285px");
	      $(this).find(".emojis").css("left", "135px");
	      $(this).find(".fecha").css({background:"#E796B7"}); 
	    }else if(mes == "Diciembre"){
	      $(this).find(".emojis").css("background-position", "-7px -205px");
	      $(this).find(".emojis").css("left", "135px");
	      $(this).find(".fecha").css({background:"#007644"}); 
	    }
    });

}); //Cierre del document

