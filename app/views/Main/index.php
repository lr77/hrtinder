<!--product-starts-->
<?php $language = \hrtinder\App::$app->getProperty('language'); ?>
<?php // debug($language); ?>

<div class="container">
    <h2>Общая информация...</h2>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum tenetur minima sed eveniet minus, nostrum, dicta fugiat sapiente recusandae necessitatibus facere, nihil aperiam architecto at autem quod error. Temporibus nemo, odio error aliquid, obcaecati iusto odit in incidunt qui, alias porro voluptas quod et, tenetur? Repellat sunt asperiores fugit, blanditiis, tempore impedit. Quidem libero tempora nihil accusantium, enim voluptates veritatis adipisci, maxime fuga odio, minus repellendus quasi, culpa officia fugit!</p>
</div>

    <div class="container">
        <h2>Топ 5 резюме...</h2>
        <div class="row">
            <?php if ($hits): ?>
                    <?php foreach ($hits as $user): ?>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 my_margin">
                    <div>
                        <div class="my_hover">
                            <a href="resume/<?=$user->id;?>"><img class="my_zoom-img max_height img-responsive" src="images/<?=$user->photo;?>" alt="" /></a>
                        </div>
                        
                        <div>
                            <h3 style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis ;"><?=$user->name;?></h3>
                            <p><?=$user->role;?></p>
                            <h4><a href="resume/<?=$user->id;?>">Просмотр резюме</a></h4>
                        </div>
                        <div class="srch">
                            <span>!</span>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="clearfix"></div>
                
        </div>
    </div>

<!--product-end-->




