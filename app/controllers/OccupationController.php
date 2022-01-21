<?php

namespace app\controllers;

use app\models\Occupation;
use app\models\Breadcrumbs;
use hrtinder\App;
use hrtinder\libs\Pagination;
use app\widgets\filter\Filter;

class OccupationController extends AppController
{
    public function viewAction()
    {

        $alias = $this->route['alias'];
        $occupation = \R::findOne('occupation', 'alias = ?', [$alias]);
        if (!$occupation) {
            throw new \Exception("Страница направления не найдена", 404);
            
        }

        $breadcrumbs = Breadcrumbs::getResumeBreadcrumbs($occupation->id);

        $occupation_model = new Occupation();
        $ids = $occupation_model->getIds($occupation->id);
        $ids = !$ids ? $occupation->id : $ids . $occupation->id;
        


        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        // $perpage = App::$app->getProperty('pagination');
        $perpage = 4;

        $sql_part = '';
        if (!empty($_GET['filter'])) {
            $filter = Filter::getFilter();
            if ($filter) {
                $cnt = Filter::getCountGroups($filter);
                // вариант выбирает всё не учитывая группы фильтров
                // $sql_part = "AND id IN (SELECT resume_id FROM attribute_resume WHERE attr_id IN ($filter))";
                // вариант выбирает учитывая группы фильтров
                $sql_part = "AND id IN (SELECT resume_id FROM attribute_resume WHERE attr_id IN ($filter) GROUP BY resume_id HAVING COUNT(resume_id) = $cnt)";
            }
        }


        $total = \R::count('resumes', "occupation_id IN ($ids) $sql_part");
        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();
        $resumes = \R::find('resumes', "occupation_id IN ($ids) $sql_part LIMIT $start, $perpage");

        if ($this->isAjax()) {
            $this->loadView('filter', compact('resumes', 'occupation', 'pagination', 'total'));
        }

        $this->setMeta($occupation->title, $occupation->description, $occupation->description);
        $this->set(compact('resumes', 'occupation', 'breadcrumbs', 'pagination', 'total'));

    }


}
