<section class="detailContent">
    <div id="home">
        <div class="content">
            <div class="destacadas">
                <div class="entrevista"><!--Entrevista del mes--><?php $view = views_get_view('home'); print $view->preview('block'); ?><!--FIN Entrevista del mes-->                    
                </div>
                <div class="notas">
                <div class="title">
                    <h2>Notículas</h2>
                </div>
                <!--Otras notas--><?php $view = views_get_view('home'); print $view->preview('block_1'); ?><!--FIN Otras notas-->                    
                </div>
            </div>
            <div class="cumple">
                <div class="title">
                    <h2>Cumpleaños</h2>
                </div>                
                <div class="previous"></div>
                <!--Cumpleaños--><?php $view = views_get_view('usuarios'); print $view->preview('block'); ?><!--FIN Cumpleaños-->
                <div class="next"></div>
            </div>
            <div class="vacaciones">
                <div class="title">
                    <h2>Vacaciones</h2>
                </div>
                <div class="previous"></div>
                <!--Vacaciones--><?php $view = views_get_view('usuarios'); print $view->preview('block_1'); ?><!--FIN Vacaciones-->                
                <div class="next"></div>
            </div>
            <div class="fechas-recordar">
                <div class="title">
                    <h2>¿Sabia usted qué?</h2>
                </div>
                <div class="previous"></div>
                <!--Fechas para recordar--><?php $view = views_get_view('home'); print $view->preview('block_2'); ?><!--FIN Fechas para recordar-->                               
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
        </div>
    </div>      
</section>