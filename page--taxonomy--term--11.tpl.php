<!DOCTYPE html>
<html>
<head>
  <title>Actividades</title>
</head>
<body>
  <section class="app_container">
    <div class="row">
      <div id="page">
        <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <div id="seccion">
        	<div class="seccion_bm"></div>
        	<div class="head">
        		<div class="taxonomia">
        			<!-- <h2>Actividades</h2> -->
        		</div>	
        	</div>
        	<div class="actividades contenido">
            	<!--Actividades--><?php $view = views_get_view('home'); print $view->preview('block_6'); ?><!--FIN Actividades-->
			     </div>
		    </div>
      </div>    
    </div>
    <div class="row">
        <div class="mas_publicaciones">
            <!--otras publicaciones--><?php $view = views_get_view('home'); print $view->preview('block_4'); ?><!--FIN otras publicaciones-->
            </div>
      </div>
  </section>
</body>
</html>