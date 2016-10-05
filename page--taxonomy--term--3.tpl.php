<seccion id="entrevista-mes">
  <h2>Entrevista del mes</h2>
  <div class="entrevista-actual">
    <div class="mes">
        <script>
            var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
            var f=new Date();
            document.write(meses[f.getMonth()]);
        </script>
    </div>
     <!--Actual--><?php $view = views_get_view('secciones'); print $view->preview('block'); ?><!--FIN Actual-->  
  </div>
  <div class="entrevistas-anteriores">
    <h2>Entrevistas anteriores</h2>
    <!--Anteriores--><?php $view = views_get_view('secciones'); print $view->preview('block_1'); ?><!--FIN Anteriores-->  
  </div>
</seccion>