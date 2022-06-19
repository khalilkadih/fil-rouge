<?php


namespace Models;

use Controllers\Login_Controller;
use database\Connection;

class Login_Model
{

    static public function Login($data)
    {
        $email_user=$data['email'];
        $password_user=$data['password'];
        
        $pdoStatment = Connection::Connect()->prepare('SELECT * FROM user WHERE email_user = :email AND password_user = :password');
        $pdoStatment->execute(array(':email' => $email_user, ':password' => $password_user));
        return $pdoStatment->fetch();
    }
}
