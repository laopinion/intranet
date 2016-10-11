<section id="nuestragente">
	<div class="gente">
		<h2>Nuestra Gente</h2>
	</div>
	<div class="foto">
		<?php print render($content['field_imagen_portada']);?>
	</div>
	<div class="miembros">
		<?php print render($content['field_miembro']);?>
	</div>
	<div class="titulo">
		<h1><?php print $title;?></h1>
	</div>
	<div class="textor"><?php print render($content['body']);?></div>

	<div class="notas-gente ">
        <div class="title">
            <h2>Notas</h2>
        </div>
        <div class="triangulo"></div>
        <!--Notas--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--FIN Notas--> 
    </div>
</section>