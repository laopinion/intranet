<section id="noticula">
	<div class="foto container">
		<?php print render($content['field_imagen_portada']);?>
	</div>
	<!-- <div class="resumen">
		<div class="container">
			<?php //print render($body[0]['summary']);?>			
		</div>
	</div>  -->
	<h1 class="titulo container"><?php print $title;?></h1>
	<div class="texto container"><?php print render($content['body']);?></div>
	<div class="notas-gente container">
        <div class="title">
            <h2>Notas</h2>
        </div>
        <div class="triangulo"></div>
        <!--Notas--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--FIN Notas--> 
    </div>
</section>