<?php if (!empty($resumes)): ?>
    <h2>Резюме направления: "<?php if ($occupation) echo $occupation->title; ?>"</h2>
        <?php foreach ($resumes as $user): ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 my_margin">
                <div class="my_hover">
                    <a href="resume/<?=$user->id;?>"><img class="my_zoom-img max_height img-responsive" src="images/<?=$user->photo;?>" alt=""></a>
                </div>
                <div>
                    <h3 style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis ;"><?=$user->name;?></h3>
                    <p><?=$user->role;?></p>
                    <h4><a href="resume/<?=$user->id;?>">Просмотр резюме</a></h4>
                </div>
            </div>
        <?php endforeach; ?>
            <div class="clearfix"></div>
            <div class="text-center">
                <p>(<?=count($resumes);?>) Резюме из <?=$total;?></p>
                    <?php if ($pagination->countPages > 1): ?>
                    <?php echo $pagination; ?>
                    <?php endif; ?>
            </div>
                
            <?php else: ?>
                <h2>Резюме соответствующих фильтрации не найдены...</h2>
            <?php endif; ?> 