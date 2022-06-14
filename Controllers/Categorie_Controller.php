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

}