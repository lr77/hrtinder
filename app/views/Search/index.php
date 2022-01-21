<div class="breadcrumbs occupation_breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="<?=PATH;?>">Главная</a></li>
                <li>Поиск</li>
            </ol>
        </div>
    </div>
</div>

<div class="container">
        <div class="row">
            <?php if (!empty($resumes)): ?>
            <h2>Поиск по запросу: "<?php if ($query) echo $query; ?>"</h2>
                    <?php foreach ($resumes as $user): ?>
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
                <?php else: ?>
                    <h2>Нет данных соответствующих поиску...</h2><br><br><br>
                <?php endif; ?>
                <div class="clearfix"></div>
        </div>
    </div>