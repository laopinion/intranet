<footer>
	<section class="container">
		<div class="formatos_footer">
			<!--Formatos--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--Fin formatos-->
		</div>
		<div class="formulario">
			<h2>Formulario</h2>
			<h4>Quejas / Reclamos / Solicitudes / Opiniones </h4>
			 <!--formulario--><?php $block = module_invoke('webform', 'block_view', 'client-block-23');print render($block['content']); ?><!--FIN formulario-->
		</div>
	</section> 
</footer>