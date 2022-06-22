<?php

namespace Controllers;

use Models\Categories_Model;
use database\Connection;
use Redirect\Redirect;
use Session;



class Categorie_Controller
{

    public function Get_All_Categorie()
    {
        $categorie = Categories_Model::Get_All_Categorie();
        return $categorie;
    }

    ///____________Delte Categorie____________

    public function Delete_Categorie($id_categorie)
    {
        if (isset($id_categorie)) {
            Categories_Model::Delete_Categorie($id_categorie);
        }
    }

    //add categorie

    public function InsertCategorie()
    {
        if (isset($_POST['categorie_submit'])) {
            $data = array(
                'name_categorie' => $_POST['name_categorie'],
                'description_categorie' => $_POST['description_categorie'],
                
            );
            print_r($data);
            $user = Categories_Model::InserCategorie($data);
            if ($user) {
                // Session::Set('success', 'User Added Successfully');
                header('location:' . BASE_URL . 'Configuration');
                header('location:' . getUrlWIthMessage('Configuration', 'categorie added successfully', 'success'));
            } else {
                echo "insertion echouée";
            }
        }
    }

    ///delete categorie

    public function DeleteCategorie()
    {
        
        if (isset($_GET['deleteCategorie'])) 
        {
            
            $id_user = $_GET['id_categorie'];
           if(Categories_Model::DeleteCategorie($id_user))
           {
            // Session::Set('success', 'categorie Deleted Successfully');
                // Redirect::to(BASE_URL,'Configuration');
                header('location:'.getUrlWIthMessage('Configuration','categorie Deleted Successfully','success'));
           }
            else {
                echo "deleted echouée";
            }
        }
    }
}
