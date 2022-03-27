<?php

require_once 'app/vendor/Model.php';
require_once 'app/vendor/Controller.php';
require_once 'app/models/User.php';


class UserController extends Controller
{
    //register
    //login
    //logout
    //view

    public function actionRegister()
    {
        $user = new User();

        if(!empty($_POST)){
            if($user->load($_POST) && $user->save()){
              return $this->render('user/register');
            }
        }
        $this->render('user/register');
    }   

    public function actionLogin(){

        $user = new User();

        if(!empty($_POST)){
            $user->load($_POST);
            if ($user->login()){
                return $this->render('user/view');
            }
        }
        $this->render('user/login');
    }

    public function actionLogOut()
    {
        session_start();

        unset($_SESSION['name']);
        unset($_SESSION['id']);

    }



    
}