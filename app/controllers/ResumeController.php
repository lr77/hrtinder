<?php

namespace app\controllers;

use hrtinder\App;
use app\models\Resume;
use app\models\Breadcrumbs;
use app\models\User;

class ResumeController extends AppController
{
    public function viewAction()
    {
        if (!User::checkAuth()) {
            $_SESSION['error'] = 'Для просмотра резюме необходимо авторизоваться как Компания...';
            // session_destroy();
            redirect(PATH . '/user/login');
        }
        if ($_SESSION['user']['role'] == 'hr') {
            $_SESSION['error'] = 'Для просмотра резюме необходимо авторизоваться как Компания...';
            // session_destroy();
            redirect();
        }
        // $alias = $this->route['alias'];
        $id = $this->route['id'];
        // $resume = \R::findOne('resumes', "alias = ? AND status = '1'", [$alias]);
        $resume = \R::findOne('resumes', "id = ? AND status = '1'", [$id]);
        if (!$resume) {
            throw new \Exception ('Страница с данным резюме не найдена', 404);
        }

        // запись в куки запрошенного резюме
        $resume_model = new Resume();
        $resume_model->setRecentlyViewed($resume->id);
        
        // просмотренные резюме
        $r_viewed = $resume_model->getRecentlyViewed();

        $recentlyViewed = null;
        if ($r_viewed) {
            $recentlyViewed = \R::find('resumes', 'id in (' . \R::genSlots($r_viewed) . ') LIMIT 4', $r_viewed);
        }

        // хлебные крошки
        $breadcrumbs = Breadcrumbs::getResumeBreadcrumbs($resume->occupation_id, $resume->name);

        $this->set(compact('resume', 'recentlyViewed', 'breadcrumbs'));
        $this->setMeta('Просмотр резюме');

    }

    // пагнация


}
