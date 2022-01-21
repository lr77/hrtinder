<div class="breadcrumbs occupation_breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <?=$breadcrumbs;?>
            </ol>
        </div>
    </div>
</div>

<?php 

    if (!empty($_GET['filter'])) {
        debug($_GET['filter']);
        // var_dump($_GET['filter']);
        $new_my = explode(',', $_GET['filter']);
        // var_dump($new_my);
        $sex = [];
        $education = [];

        foreach ($new_my as $value) {

            echo $value;

            if ($value == 1 || $value == 2) {
                $sex[] = $value;
            }

            if ($value == 3 || $value == 4 || $value == 5) {
                $education[] = $value;
            }
        }
        debug($sex);
        debug($education);
    }

?>



<div class="container">
    <div class="row fr_filter">
        <div class="col-md-9">
            <?php if (!empty($resumes)): ?>
                <div class="my_resumes">
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
                                <!-- <div class="srch">
                                    <span>!</span>
                                </div> -->
                            
                        </div>
                    <?php endforeach; ?>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <p>(<?=count($resumes);?>) Резюме из <?=$total;?></p>
                            <?php if ($pagination->countPages > 1): ?>
                            <?php echo $pagination; ?>
                            <?php endif; ?>
                    </div>
                </div>
            <?php else: ?>
                <h2>Нет активных резюме по данному направлению...</h2>
            <?php endif; ?>  
        </div>
        <div class="col-md-3 prdt-right">
             <div class="w_sidebar">
                <h3 class="text-center">Фильтрация</h3>
                
                <?php new \app\widgets\filter\Filter(); ?>
            </div>
        </div>
    </div>
</div>