<div class="container"> 
    <div class="title">
        <h2>Vacaciones</h2>
    </div>
</div>
<div class="vacaciones-mes">
    <div class="mes">
        <script>
            var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
            var f=new Date();
            document.write(meses[f.getMonth()]);
        </script>
    </div>
    <!--Vacaciones--><?php $view = views_get_view('taxonomias'); print $view->preview('block_1'); ?><!--FIN Vacaciones-->
</div>

<section id="vacaciones">
   <div class="cumple">
      <div class="title">
          <h2>Cumpleaños</h2>
      </div>                
      <div class="previous"></div>
      <!--Cumpleaños--><?php $view = views_get_view('usuarios'); print $view->preview('block'); ?><!--FIN Cumpleaños-->
      <div class="next"></div>
  </div>
    <div class="nuevos">
        <div class="title">
            <h2>Nuevo Ingreso</h2>
        </div>
        <!--Nuevos--><?php $view = views_get_view('usuarios'); print $view->preview('block_3'); ?><!--FIN Nuevos--> 
    </div>
    <div class="notas-gente">
        <div class="title">
            <h2>Notas</h2>
        </div>
        <div class="triangulo"></div>
        <!--Notas--><?php $view = views_get_view('home'); print $view->preview('block_3'); ?><!--FIN Notas--> 
    </div>
    <div class="noestan">
        <div class="title">
            <h2>Los que ya no están con nosotros</h2>
        </div>
        <!--No estan--><?php $view = views_get_view('usuarios'); print $view->preview('block_4'); ?><!--FIN No estan--> 
    </div>
    <div class="galeria">
        <div class="title">
            <h2>Galerías</h2>
        </div>
        <!--Galeria--><?php $view = views_get_view('home'); print $view->preview('block_4'); ?><!--FIN Galeria--> 
    </div><!--Fin galeria-->
</section>