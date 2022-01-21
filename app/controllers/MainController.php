<?php

namespace app\controllers;

use hrtinder\Cache;
use hrtinder\App;
use app\models\Resume;

class MainController extends AppController {

        // переопределение шаблона для всего контроллера
        // public $layout = 'another_layout';

    public function indexAction(){

        $link_at_main = 'HR-TINDER';

        $hits = \R::find('resumes', 'LIMIT 5');

        // переопределение шаблона для данного вида
        // $this->layout = 'default';
        // $this->layout = false;

        // Мета по умолчанию в AppController
        // $this->setMeta(App::$app->getProperty('base_name'), 'Описание...!!!', 'Ключевики...');

        
        $this->setMeta('HR-Tinder Главная');
        // В базовом классе View используется функция extract()
        // Она превращает массив данных в список данных (если это изначально был массив)
        // compact — Создаёт массив, содержащий названия переменных и их значения
        // данный массив передаётся в вид
        $this->set(compact('hits', 'recentlyViewed', 'link_at_main'));
    }

    public function indexxxAction()
    {
        $this->layout = 'production';
        debug($_GET);
        debug(App::$app->getProperties());
    }

}