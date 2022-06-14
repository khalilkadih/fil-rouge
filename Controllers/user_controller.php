<?php

namespace controllers;

use Models\Users_Model;
use Session;

class User_Controller
{
    public function Get_All_Users()
    {
        $users = Users_Model::Get_All_Users();
        return $users;
    }

    //get user by id
    // public function Get_User_ById($id)
    // {
    //     $user=Users_Model::Get_User_ById($id);
    //     return $user;
    // }

    //inset user
    public function InserUser()
    {
        if (isset($_POST['InsertData'])) 
        {
            $data = array(
                'name_user' => $_POST['name_user'],
                'role_user' => $_POST['role_user'],
                'email_user' => $_POST['email_user'],
                'password_user' => $_POST['password_user']
            );
            print_r($data);
            $user = Users_Model::InserUser($data);
            if ($user == 'ok') {
                Session::Set('succes', 'Employer Added Successfully');
                header('location:' . BASE_URL.'utilisateur');
            } else {
                echo "insertion echouée";
            }
        }
    }
    //update user
    public function UpdateUser($id)
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'name_user' => $_POST['name_user'],
                'role_user' => $_POST['role_user'],
                'email_user' => $_POST['email_user'],
                'password_user' => $_POST['password_user']
            );
            $user = Users_Model::UpdateUser($id, $data);
            if ($user == 'ok') {
                Session::Set('succes', 'Employer Updated Successfully');
                header('location:' . BASE_URL);
            } else {
                echo "insertion echouée";
            }
        }
    }
    //delete user
    public function DeleteUser($id)
    {
        $user = Users_Model::DeleteUser($id);
        if ($user == 'ok') {
            Session::Set('succes', 'Employer Deleted Successfully');
            header('location:' . BASE_URL);
        } else {
            echo "insertion echouée";
        }
    }
}
