<?php

namespace app\controllers;

use app\models\User;
use app\models\UserResume;

class UserController extends AppController
{

    public function signupAction()
    {
        if (!empty($_POST)) {
            $user = new User;
            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
                $_SESSION['form_data'] = $data;
            } else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if ($user->save('user')) {
                $_SESSION['success'] = 'Пользователь зарегистрирован.';
                } else {
                    $_SESSION['error'] = 'Ошибка';
                }
            }
            redirect();
        }
        
        $this->setMeta('Регистрация');
    }

    public function loginAction(){
        if(!empty($_POST)){
            $user = new User();
            if($user->login()){
                $_SESSION['success'] = 'Вы успешно авторизованы';
                    if ($_SESSION['user']['role'] == 'admin') {
                        redirect(ADMIN);
                    }
            }else{
                $_SESSION['error'] = 'Логин/пароль введены неверно';
            }
            redirect(PATH);
        }
        $this->setMeta('Вход');
    }

    public function logoutAction(){
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect();
    }

    public function cabinetAction()
    {
        if (!User::checkAuth()) {
            
            redirect(PATH . '/user/login');
        }

        // проверка на существование резюме
        // $my_id = 50;
        // $check_current_resume = \R::getAssoc('SELECT user_id FROM resumes');
        // foreach ($check_current_resume as $value) {
        //     if ($value == $my_id) {
        //         echo 'resume found';
        //         break;
        //     }
        // }
        if ($_SESSION['user']['role']  == 'company') {
            $this->view = 'company';
        }

        if (!empty($_POST)) {
            $user = new UserResume;

            // Вариант в случае отсутствия фотографии
            if ($_POST['sex'] == 'm') {
                $_POST['photo'] = 'no_user_photo_male.jpg';
            } else {
                $_POST['photo'] = 'no_user_photo_femaile.jpg';
            }
            if ($_SESSION['user']['id']) {
               $_POST['user_id'] = $_SESSION['user']['id'];
            }

            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data)) {
                $user->getErrors();
            } else {
                if ($user->save('resumes')) {
                $_SESSION['success'] = 'Резюме успешно создано.';
                } else {
                    $_SESSION['error'] = 'Ошибка';
                }
            }
            redirect(PATH);
        }

        $this->setMeta('Личный кабинет');
    }

}

