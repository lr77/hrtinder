<?php

namespace app\controllers;

use app\models\AppModel;
use hrtinder\base\Controller;
use hrtinder\App;
use app\widgets\language\Language;
use hrtinder\Cache;

class AppController extends Controller{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
        $this->setMeta(App::$app->getProperty('base_name'), 'Описание...', 'Ключевики...'); 

        $languages = Language::getLanguages();
        App::$app->setProperty('languages', $languages);
        
        $language = Language::getLanguage($languages);
        App::$app->setProperty('language', $language);

        // if ((App::$app->getProperty('language')['code']) == 'TAT') {
        //     $this->layout = 'production2';
        // } else {
        //     $this->layout = 'default';
        // }

        App::$app->setProperty('occupations', self::cacheOccupations());

    }

    public static function cacheOccupations()
    {
        $cache = Cache::instance();
        $occupations = $cache->get('occupations');
        if (!$occupations) {
            $occupations = \R::getAssoc("SELECT * FROM `occupation`");
            $cache->set('occupations', $occupations, 3600);
        }
        return $occupations;
    }

}