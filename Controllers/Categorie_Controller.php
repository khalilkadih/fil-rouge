<?php

namespace Controllers;
use Models\Categories_Model;
use database\Connection;


class Categorie_Controller{

    public function Get_All_Categorie()
    {
        $categorie=Categories_Model::Get_All_Categorie();
        return $categorie;
    }

    ///____________Delte Categorie____________

    public function Delete_Categorie($id_categorie)
    {
        if(isset($id_categorie)){
            Categories_Model::Delete_Categorie($id_categorie);
        }
    }

}