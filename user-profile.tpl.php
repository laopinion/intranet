<section id="perfil">
	<div class="title container">
		<h1>Nuestro personal</h1>
	</div>
	<div class="datos">
	    <div class="foto">
	    	<div class="container" style="padding: 40px 0; border-top: 1px solid #BFBFBF;
    border-bottom: 1px solid #BFBFBF;">
	    		<div class="perfil-foto">
	    			<?php print render($user_profile['user_picture']);?>
	    		</div>
			    <div class="perfil-datos">
			    	<div class="info">
			    		<?php print render($user_profile);?>
			    	</div>
			    </div> 
	    	</div>
	    </div>
	</div>  

	<div class="cumple container">
        <div class="title">
            <h2>Cumpleaños</h2>
        </div>                
        <!--Cumpleaños--><?php $view = views_get_view('usuarios'); print $view->preview('block'); ?><!--FIN Cumpleaños-->
    </div>

    <div class="notas-gente container">
        <div class="title">
            <h2>Notas</h2>
        </div>
        <div class="triangulo"></div>
        <!--Notas--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--FIN Notas--> 
    </div>
</section>