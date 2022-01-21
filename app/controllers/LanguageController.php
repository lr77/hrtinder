<?php

namespace app\controllers;

// use app\models\Cart;
use hrtinder\App;


class LanguageController extends AppController {

    public function changeAction(){

        // $this->layout = 'production';

        $language = !empty($_GET['lang']) ? $_GET['lang'] : null;
        if($language){

            // $lang = \R::findOne('language', 'code = ?', [$language]);

            // it is better because we do not need db query
            $lang = App::$app->getProperty('language')['code'];

            if(!empty($lang)){
                setcookie('language', $language, time() + 3600*24*7, '/');
                // Cart::recalc($curr);
            }
        }

        redirect();
    }

}