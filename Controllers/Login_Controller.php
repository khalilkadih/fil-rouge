<?php

namespace Controllers;

use Models\Login_Model;
use database\Connection;
use Session;

class Login_Controller
{

    //crete a login function
    public function Login()
    {

        if (isset($_POST['LoginUser'])) {

            $data=array(
                'email'=>$_POST['email'],
                'password'=>$_POST['password']
            );
            // $email_user = $_POST['email'];
            // $password_user = $_POST['password'];
            if(empty($_POST['email']) OR empty($_POST['password'])){
                header('location: '.getUrlWIthMessage('index','login failed','danger'));
                exit;
            }
            $login = Login_Model::Login($data);
        
            if ($login) {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role']=$login['role_user'];
                Session::Set('succes', 'Login Successfully');
                 header('location:' .getUrlWIthMessage('home','you are logged in','success'));
            } else {
                 header('location: '.getUrlWIthMessage('index','login failed','danger'));
            }
        }
    }
    // __logout user_____
    
}
