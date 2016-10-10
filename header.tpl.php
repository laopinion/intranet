<header>
	<a href="<?php print base_path(); ?>">
		<div class="logo"></div>
	</a>
	<div id="fecha">
		<script>
			var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
			var f=new Date();
		document.write(f.getDate() +" de "+ meses[f.getMonth()] + " de " + f.getFullYear());
		</script>
	</div>
	<section id="barra">
		<article class="container">
			<div class="fondo"></div>
			<div id="hamburger">
				<span class="izq_arriba"></span>
				<span class="der_arriba"></span>
				<span></span>
				<span></span>
				<span class="izq_abajo"></span>
				<span class="der_abajo"></span>
			</div>
			<div class="menu">
				<ul>
					<li><a href="<?php print base_path(); ?>entrevista-del-mes">Entrevista del mes</a></li>
					<div class="divider"></div>
					<li><a href="<?php print base_path(); ?>cumpleanos">Cumpleaños</a></li>
					<div class="divider"></div>
					<li><a href="<?php print base_path(); ?>vacaciones">Vacaciones</a></li>
					<div class="divider"></div>
					<li><a href="#">Actividades</a></li>
					<div class="divider"></div>
					<li><a href="#">Cuestionarios</a></li>
					<div class="divider"></div>
					<li><a href="#">Comites</a></li>
					<div class="divider"></div>
					<li><a href="<?php print base_path(); ?>galerias">Galerias</a></li>
					<div class="divider"></div>
					<div class="marca"></div>
				</ul>
			</div>
			<a href="#buscar">
				<div class="buscador"></div>
				<h4>Buscar</h4>
			</a>
		</article>
	</section>	
</header>