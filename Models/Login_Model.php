<?php


namespace Models;

use Controllers\Login_Controller;
use database\Connection;

class Login_Model
{

    static public function Login($email_user, $password_user)
    {

        $login = Connection::Connect()->prepare('SELECT * FROM user WHERE email_user = :email_user AND password_user = :password_user');
        $login->execute(array(':email_user' => $email_user, ':password' => $password_user));
        if ($login) {
            return true;
        } else {
            return false;
        }
    }
}
