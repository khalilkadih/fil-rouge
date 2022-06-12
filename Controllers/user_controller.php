<?php


class User_Controller
{
    public function Get_All_Users()
    {
        $users=Users::all();
        return $users;

    }
}