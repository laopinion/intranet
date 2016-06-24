<section id="documento">
	<div class="app_container">
		<div class="row">
			
		</div>
		<div class="row">	
			<div class="col-md-3 menu_articulo">
				<div class="menu_lateral">
					<ul>
						<li class="divider"></li>
						<li><a href="<?php print base_path(); ?>">Home</a></li>
						<li class="divider"></li>
						<li><a href="<?php print base_path(); ?>?q=documentos">Formato de Solicitudes</a></li>
						<li class="divider"></li>
					    <li><a href="#">Actividades</a></li>
					    <li class="divider"></li>
					    <li><a href="<?php print base_path(); ?>?q=cumpleanos">Cumpleaños</a></li>
					    <li class="divider"></li>
					    <li><a href="<?php print base_path(); ?>?q=vacaciones">Vacaciones</a></li>
					    <li class="divider"></li>
					    <li><a href="#">Action</a></li>
					</ul>
				</div>
			</div>
	      <div class="col-md-9">
	        
	        <?php //include("compartir.tpl.php"); ?>
	      
		      <div class="der">
		        <h1 class="titulo">Formatos<?php //print $title;?></h1>
		        <!-- <div class="foto">
		        	<?php //print render($content['field_imagen_formato']);?>
		        </div> -->
		        <div class="texto"><?php //print render($content['body']);?></div> 
		        <div class="pdf"><?php print render($content['field_scribd']);?></div> 
		   
		      </div>  
		   </div> <!-- cierre del col-->
		</div>

		<div class="row">
    		<div class="app_documen">
    			<!--Documentos--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--Documentos-->
    			<?php
				?>
    		</div>
    	</div>

		<div class="row">
    		<div class="app_cumple cumple_user">
            <!--cumpleaños--><?php $view = views_get_view('usuarios'); print $view->preview('block'); ?><!--FIN cumpleaños-->
            </div>
    	</div>

    	<div class="row">
    		<div class="mas_publicaciones">
            <!--OtrasPublicaciones--><?php $view = views_get_view('home'); print $view->preview('block_4'); ?><!--FIN OtrasPublicaciones-->
            </div>
    	</div>
	</div> <!-- Cierre del container-->
</section>