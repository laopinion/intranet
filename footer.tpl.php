<footer>
	<section class="container">
		<div class="formatos_footer">
			<h2>Formatos</h2>
			<!--Formatos--><?php $view = views_get_view('formatos'); print $view->preview('block'); ?><!--Fin formatos-->
		</div>
		<div class="formulario">
			<h2>Formulario</h2>
			<h4>Quejas / Reclamos / Solicitudes / Opiniones </h4>
			 <!--formulario--><?php $block = module_invoke('webform', 'block_view', 'client-block-23');print render($block['content']); ?><!--FIN formulario-->
		</div>
	</section>
	<section class="politica">
		<section class="container-politica">
			<div class="cuadro">
				<div class="logo-footer">
					<div class="fecha">
						<script>
							var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
							var f=new Date();
							document.write(f.getDate() +" de "+ meses[f.getMonth()] + " de " + f.getFullYear());
						</script>
					</div>
				</div>
				<p>DIARIO LA OPINIÓN - Av. 4 Nro. 16 - 12. Teléfono (+57) (7) 5829999 - Fax (+57) (7) 5831502 - Cúcuta - ColombiaCopyright © 2001 - 2015 La Opinión S.A. - Todos los Derechos ReservadosReservados todos los derechos; queda prohibida la reproducción, distribución, comunicación pública y utilización total o parcial de los contenidos de esta web, en cualquier forma o modalidad sin previa, expresa y escrita autorización. Incluida en particular su mera reproducción y/o puesta a disposición como resúmenes, reseñas o revistas de prensa con ﬁnes comerciales directa e indirectamente lucrativos, a lo que se maniﬁesta oposición rotunda.</p>
			</div>
		</section> 
	</section>
</footer>