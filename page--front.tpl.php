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
                <!--Cumpleaños--><?php $view = views_get_view('usuarios'); print $view->preview('block'); ?><!--FIN Cumpleaños--> 
            </div>
        </div>
    </div>      
</section>