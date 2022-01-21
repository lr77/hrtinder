<?php

namespace app\controllers;

use app\models\Breadcrumbs;

class SearchController extends AppController
{
    public function typeaheadAction(){
        if($this->isAjax()){
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
            if($query){
                $resumes = \R::getAll('SELECT id, name FROM resumes WHERE name LIKE ? LIMIT 5', ["%{$query}%"]); //LIMIT должен быть на единицу больше чем в скрипте
                echo json_encode($resumes);
            }
        }
        die;
    }

    public function indexAction()
    {
        $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;
        if ($query) {
            $resumes = \R::find('resumes', "name LIKE ?", ["%{$query}%"]);
        }

        
        $this->setMeta('Поиск по: ' . h($query));
        $this->set(compact('resumes', 'query', 'breadcrumbs'));
    }
}
