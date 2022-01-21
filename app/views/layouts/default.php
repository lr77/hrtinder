<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <link rel="shortcut icon" href="images/star.png" type="image/png">
    <?=$this->getMeta();?>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu -->
    <link href="megamenu/css/ionicons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="megamenu/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-7 top-header-left">
                <div class="drop">
                    <div class="box">
                        <select id="language" tabindex="4" class="dropdown drop">
                            <?php new \app\widgets\language\Language(); ?>
                        </select>
                    </div>
                    <div class="btn-group">
                        <a class="dropdown-toggle" data-toggle="dropdown">Авторизация 
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if (!empty($_SESSION['user'])): ?>
                                <li>
                                    <a>Добро пожаловать <?=h($_SESSION['user']['name']);?></a>
                                </li>
                                <li>
                                    <a href="user/cabinet">Личный кабинет</a>
                                </li>
                                <li>
                                    <a href="user/logout">Выход</a>
                                </li>
                            <?php else: ?>
                                <li>
                                    <a href="user/login">Вход</a>
                                </li>
                                <li>
                                    <a href="user/signup">Регистрация</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-5 top-header-left">
                <div class="cart box_1">
                    <?php if (!empty($_SESSION['user'])): ?>
                    <p style="color: #fff;">Вы авторизованы как: <span> </span><?=$_SESSION['user']['role'];?></p>
                <?php endif; ?>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<!--start-logo-->
<div class="logo">

    <?php if (!isset($link_at_main)): ?>
            <a href="<?= PATH ;?>"><h1>HR-TINDER</h1></a>
        <?php else: ?>
            <h1>HR-TINDER</h1>
        <?php endif; ?>

</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="menu-container">
                    <div class="menu">
                    <?php new \app\widgets\menu\Menu([
                        'tpl' => WWW . '/menu/menu.php',
                        'container' => 'ul', // able to change container
                        // 'attrs' => [
                        //     'style' => 'border: 1px solid red;',
                        //     'id=' => 'menu',
                        // ],
                    ]); ?>
                    </div>
                </div>
                

                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <form action="search" method="get" autocomplete="off">
                        <input type="text" class="typeahead" id="typeahead" name="s" placeholder="Поиск">
                        <input type="submit" value="">
                    </form>
                    <!-- <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value=""> -->
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->

<?php // require_once dirname(__DIR__) . '/common/animated_boxes.php'; ?>
<?php // require APP . '/views/common/animated_boxes.php'; ?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php echo $content;?>
</div>

<!--information-starts-->
<div class="information">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                    <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                    <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Information</h3>
                <ul>
                    <li><a href="#"><p>Specials</p></a></li>
                    <li><a href="#"><p>Products</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>My Account</h3>
                <ul>
                    <li><a href="account.html"><p>My Account</p></a></li>
                    <li><a href="#"><p>Info...</p></a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Store Information...</h3>
                <p><a href="mailto:example@email.com">contact@example.com</a></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>HR-Tinder</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->

<div class="preloader"><img src="images/ring.svg" alt=""></div>

<script>
    var path = '<?=PATH;?>';
</script>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.js"></script>
<script src="js/typeahead.bundle.js"></script>

<!-- <script src="js/simpleCart.min.js"> </script> -->
<!--dropdown-->
<script src="js/jquery.easydropdown.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script type="text/javascript">
    $(function() {

        var menu_ul = $('.menu_drop > li > ul'),
            menu_a  = $('.menu_drop > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<!--Slider-Starts-Here-->

<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<script src="megamenu/js/megamenu.js"></script>
<script src="js/imagezoom.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script src="js/main.js"></script>

<?php
if (DEBUG) {
    $logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug( $logs->grep( 'SELECT' ) );
}

?>

</body>
</html>