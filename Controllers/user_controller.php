<?php
namespace controllers;
use Models\Users_Model;


class User_Controller
{
    public function Get_All_Users()
    {
        $users=Users_Model::Get_All_Users();
        return $users;

    }
}