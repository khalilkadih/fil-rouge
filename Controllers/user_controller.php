<?php

namespace controllers;

use Models\Users_Model;
use Redirect\Redirect;
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
        if (isset($_POST['InsertData'])) {
            $data = array(
                'name_user' => $_POST['name_user'],
                'role_user' => $_POST['role_user'],
                'email_user' => $_POST['email_user'],
                'password_user' => $_POST['password_user']
            );
            print_r($data);
            $user = Users_Model::InserUser($data);
            if ($user == 'ok') {
                // Session::Set('success', 'User Added Successfully');
                header('location:' . BASE_URL . 'utilisateur');
                header('location:' .getUrlWIthMessage('utilisateur','User added successfully','success'));

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
                Session::Set('success', 'Employer Updated Successfully');
                header('location:' . BASE_URL);
            } else {
                echo "insertion echouée";
            }
        }
    }
    //delete user
    public function DeleteUser()
    {
        
        if (isset($_GET['id_user'])) 
        {
            $id_user = $_GET['id_user'];
            $user = Users_Model::DeleteUser($id_user);
            if ($user == 'ok') {
                Session::Set('success', 'Employer Deleted Successfully');
                Redirect::to(BASE_URL . 'utilisateur');
            } else {
                echo "insertion echouée";
            }
        }
    }
    //update user

    public function update_user(){

        if(isset($_POST['updateUser'])){
            $data = array(
                'id_user' => $_POST['id_user'],
                'name_user' => $_POST['name_user'],
                'role_user' => $_POST['role_user'],
                'email_user' => $_POST['email_user'],
               
            );
            $user = Users_Model::UpdateUser($data);
            if($user =='ok'){
                Session::Set('success', 'Employer Updated Successfully');
                Redirect::to(BASE_URL . 'utilisateur');
            }
            else{
                echo "update echouée";
            }
        }
        else
        echo 'you outsid function update user';
    }


//login user
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
            $login = Users_Model::Login($data);
        
            if ($login and password_verify($_POST['password'],$login['password_user'])) {
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['role']=$login['role_user'];
                $_SESSION['name']=$login['name_user'];
                $_SESSION['poste']=$login['poste'];
               
                Session::Set('succes', 'Login Successfully');
                 header('location:' .getUrlWIthMessage('home','you are logged in','success'));
            } else {
                 header('location: '.getUrlWIthMessage('index','login failed','danger'));
            }
        }
    }

}
