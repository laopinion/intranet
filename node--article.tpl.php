<section id="articulo">
	<div class="app_container">
		<div class="row">
			<div class="foto">
	        	<?php print render($content['field_imagen_portada']);?>
	        </div>
		</div>
		<div class="row menu_articulo">	
			<div class="col-md-3 opciones">
				<div class="menu_lateral">
					<ul>
						<li class="divider"></li>
						<li><a href="<?php print base_path(); ?>">Home</a></li>
						<li class="divider"></li>
						<li><a href="<?php print base_path(); ?>?q=documentos">Formato de Solicitudes</a></li>
						<li class="divider"></li>
					    <li><a href="<?php print base_path(); ?>?q=actividades">Actividades</a></li>
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
		      <div class="der">
		        <h1 class="titulo"><?php print $title;?></h1>
		        <div class="texto"><?php print render($content['body']);?></div> 
		        <!-- <div class="fecha">
		          <div class="icono"></div>
		          <div class="dia">
		            <label>Fecha de publicación:</label>
		            <?php //print render($content['field_created']);?>
		          </div>
		        </div> -->
		        <div class="seccion">
		          <div class="tax">
		          	<!-- <label for="Seccion">Sección</label> -->
		            <?php //print render($content['field_seccion']);?>
		          </div>
		        </div>
		      </div>  
		   </div> <!-- cierre del col-->
		</div>

		<div class="row">
    		<div class="app_cumple cumple_user">
            <!--cumpleaños--><?php $view = views_get_view('usuarios'); print $view->preview('block'); ?><!--FIN cumpleaños-->
            </div>
    	</div>

    	<div class="row">
    		<div class="mas_publicaciones">
            <!--otras publicaciones--><?php $view = views_get_view('home'); print $view->preview('block_4'); ?><!--FIN otras publicaciones-->
            </div>
    	</div>
	</div> <!-- Cierre del container-->
</section>