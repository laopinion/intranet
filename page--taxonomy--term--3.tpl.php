<seccion id="entrevista-mes">
  <h2>Entrevista del mes</h2>
  <div class="entrevista-actual">
     <!--Actual--><?php $view = views_get_view('secciones'); print $view->preview('block'); ?><!--FIN Actual-->  
  </div>
  <div class="entrevistas-anteriores">
    <h2>Entrevistas anteriores</h2>
    <!--Anteriores--><?php $view = views_get_view('secciones'); print $view->preview('block_1'); ?><!--FIN Anteriores-->  
  </div>
  <div class="fechas-recordar">
      <div class="title">
          <h2>¿Sabia usted qué?</h2>
      </div>
      <!--Fechas para recordar--><?php $view = views_get_view('home'); print $view->preview('block_2'); ?><!--FIN Fechas para recordar--> 
  </div>
</seccion>