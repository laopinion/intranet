<footer>
	<section class="app_container">
		<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-xs-12">
			<h2>Formulario</h2>
			<h4>Quejas / Reclamos / Solicitudes / Opiniones </h4>
			 <!--formulario--><?php $block = module_invoke('webform', 'block_view', 'client-block-23');print render($block['content']); ?><!--FIN formulario-->
			
		</div>
		</div>
	</section> 
</footer>