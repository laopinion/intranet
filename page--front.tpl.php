<section class="detailContent">
    <div id="home">
        <div class="content">
            <div class="destacadas">
                <div class="entrevista"><!--Entrevista del mes--><?php $view = views_get_view('home'); print $view->preview('block'); ?><!--FIN Entrevista del mes--></div>
                <div class="notas"><!--Otras notas--><?php $view = views_get_view('home'); print $view->preview('block_1'); ?><!--FIN Otras notas--></div>
            </div>
        </div>
    </div>      
</section>