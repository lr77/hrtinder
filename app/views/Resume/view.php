<div class="breadcrumbs occupation_breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <!--<li><a href="index.html">Home</a></li>
                <li class="active">Single</li>-->
                <?=$breadcrumbs;?>
            </ol>
        </div>
    </div>
</div>


<div class="container">
    
</div>

<div class="container">
    <div class="single-main">
        <div class="col-md-9 single-main-left">
            <div class="sngl-top">
                <div class="row">   
        <h3 class="col-md-6">Просмотр резюме HR-Специалиста</h3>
        <p class="col-md-1"></p>
        <p class="col-md-5"><a href="<?=PATH;?>" class="add-cart item_add">К списку резюме</a></p>
    </div>
                <div class="col-md-5 single-top-left">
                    <img src="images/<?=$resume['photo'];?>" alt="">
                </div>
                <div class="col-md-7 single-top-right">
                    <div class="single-para simpleCart_shelfItem">
                        <h2><?=$resume['name'];?></h2>
                        <div class="star-on">
                            <ul class="star-footer">
                                <li><i> </i></li>
                                <li><i> </i></li>
                                <li><i> </i></li>
                                <li><i> </i></li>
                                <li><i> </i></li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <h5 class="item_price">Специалист...</h5>
                        <ul class="tag-men">
                            <li>
                                <span>Специализация</span>
                                <?php $occupation = hrtinder\App::$app->getProperty('occupations')[$resume['occupation_id']] ?>
                                <span>: <a href="occupation/view/<?= $occupation['alias'] ?>"><?= $occupation['title']; ?></a></span>
                            </li>
                        </ul>
                        <a id="productAdd"  class="add-cart item_add">.....</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="tabs">
                <ul class="menu_drop">
                    <li class="item1"><a href=""><img src="images/arrow.png" alt="">Информация о месте работы</a>
                        <ul>
                            <li class="subitem2">
                                <a>
                                    <?=$resume['resume_description'];?>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="item2"><a href=""><img src="images/arrow.png" alt="">Образование</a>
                        <ul>
                            <li class="subitem2">
                                <a>
                                    <?=$resume['education'];?>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="item3"><a href="#"><img src="images/arrow.png" alt="">Опыт</a>
                        <ul>
                            <li class="subitem1"><a>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                            <li class="subitem2"><a> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                            <li class="subitem3"><a>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                        </ul>
                    </li>
                    <li class="item4"><a href="#"><img src="images/arrow.png" alt="">Специализация</a>
                        <ul>
                            <li class="subitem2"><a> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                            <li class="subitem3"><a>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                        </ul>
                    </li>
                    <li class="item5"><a href="#"><img src="images/arrow.png" alt="">Контактная информацияt</a>
                        <ul>
                            <li class="subitem1"><a>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
                            <li class="subitem2"><a> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
                            <li class="subitem3"><a>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-3 single-right">
            <h3>Реклама или блок с информацией</h3>
            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- Recently viewed -->
<?php if ($recentlyViewed): ?>
<div class="container">
    <h2>Недавно просмотренные резюме:</h2>
    <div class="row">
        <?php foreach ($recentlyViewed as $user): ?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 my_margin">
                    <div>
                        <div class="my_hover">
                            <a href="resume/<?=$user->alias;?>"><img class="my_zoom-img max_height img-responsive" src="images/<?=$user->photo;?>" alt="" /></a>
                        </div>
                        
                        <div>
                            <h3 style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis ;"><?=$user->name;?></h3>
                            <p><?=$user->role;?></p>
                            <h4><a href="resume/<?=$user->alias;?>">Просмотр резюме</a></h4>
                        </div>
                        <div class="srch">
                            <span>!</span>
                        </div>
                    </div>
                </div>
                    <?php endforeach; ?>
                <div class="clearfix"></div>
        </div>
</div>
<?php endif; ?>