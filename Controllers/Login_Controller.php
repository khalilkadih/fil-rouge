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

        if (isset($_POST['submit'])) {
            $email_user = $_POST['username'];
            $password_user = $_POST['password'];

            $login =Login_Model::Login($email_user, $password_user);
            if ($login) {
                // Session::Set('succes', 'Login Successfully');
                header('location:' . BASE_URL.'home');
            } else {
                die('Login Failed');
                // Session::Set('error', 'Login Failed');
                header('location: index');
            }
        }
    }
}
