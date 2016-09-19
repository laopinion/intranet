<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>

	<section class="app_container">
		<div class="row">
			<div class="articulos" >
				<!--articulos_1-->
                <div class="home_escritorio">
                    
                    <?php $view = views_get_view('home'); print $view->preview('block'); ?><!--articulos_1-->
                </div>
                    <div class="home_movil">
                        <?php $view = views_get_view('home_movil'); print $view->preview('block'); ?>
                    </div>				
			</div>
    	</div>
    	
    	<div class="row">
    		<div class="app_cumple">
            <!--cumpleaños-->
            <?php $view = views_get_view('usuarios'); print $view->preview('block'); ?><!--FIN cumpleaños-->
            </div>
    	</div>

    	<div class="row">
    		<div class="articulos">
    			<!--articulos_2-->
                <div class="home_escritorio"><?php $view = views_get_view('home'); print $view->preview('block_1'); ?>
                </div><!--articulos_2-->
                <div class="home_movil">
                    <?php $view = views_get_view('home_movil'); print $view->preview('block_1'); ?>
                </div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="app_vaca">
    			<!--vacaciones--><?php $view = views_get_view('usuarios'); print $view->preview('block_1'); ?><!--vacaciones-->
    		</div>
    	</div>

    	<div class="row">
			<div class="articulos" >
				<!--articulos_1-->
                <div class="home_escritorio"><?php $view = views_get_view('home'); print $view->preview('block_2'); ?>
                </div><!--articulos_1-->
                <div class="home_movil">
                    <?php $view = views_get_view('home_movil'); print $view->preview('block_2'); ?>
                </div>				
			</div>
    	</div>

    	<div class="row">
    		<div class="app_documen">
    			<!--Documentos--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--Documentos-->
    			<?php
				?>
    		</div>
    	</div>

    	<div class="row">
    		<div class="app_fechas_recordar">
    			<!--Fechas para recordar--><?php $view = views_get_view('home'); print $view->preview('block_5'); ?><!--Fechas para recordar-->
    			<?php
				?>
    		</div>
    	</div>
	</section>
		<!-- C:\wamp\www\proyecto\sites\default\themes\intranet> -->
</body>
</html>