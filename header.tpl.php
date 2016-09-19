	<section class="" id="app_intranet">
		<a href="<?php print base_path(); ?>"><div id="logo_o"></div></a>
		<div id="fecha_actual">
			<script>
			var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
			var f=new Date();
			document.write(meses[f.getMonth()] + " " + f.getDate() + " de " + f.getFullYear());
			</script>
		</div>
	</section>
<header>
	<section class="app_container app_menu">
		<div class="row">
			<div id="menu">
				<div>
					<button class="btn-menu">
					    Menu
						<span class="glyphicon glyphicon-menu-hamburger app_icono_menu"></span>
					</button>
					<ul class="app_drop_menu" id="target">
						<li><a href="<?php print base_path(); ?>">Home</a></li>
					  	<li><a href="<?php print base_path(); ?>?q=documentos">Formato de Solicitudes</a></li>
					    <li><a href="<?php print base_path(); ?>?q=actividades">Actividades</a></li>
					    <li><a href="<?php print base_path(); ?>?q=cumpleanos">Cumpleaños</a></li>
					    <li><a href="<?php print base_path(); ?>?q=vacaciones">Vacaciones</a></li>
					    <li class="divider"></li>
					    <li><a href="http://localhost/proyecto/?q=/buscar_usuario">Buscar empleado</a></li>
					    <li><a href="<?php print base_path(); ?>celebraciones">Celebraciones</a></li>
					    <li><a href="<?php print base_path(); ?>entrevista-del-mes">Entrevistas</a></li>
					    <li><a href="<?php print base_path(); ?>comunicados">Comunicados</a></li>
					</ul>
				</div>
			</div>
			<a href="http://localhost/proyecto/?q=buscar">
			<div class="search">
				<form class="form">
				   Buscar
				    <div class="buscador">
				      <span class="input_btn">
				      	<input type="text" class="form_input" disabled>
				        <button class="btn_buscar" type="button"></button>
				      </span>
				    </div>
					<?//php $buscar_bloque = module_invoke('buscar', 'block_view', 'Page'); 
					//print render($buscar_bloque); ?>
				</form>
			</div>
			</a>
		</div> <!-- row-->
	</section>
</header>