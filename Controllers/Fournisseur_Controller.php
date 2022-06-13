<?php

namespace Controllers;
use Models\Fournisseurs_Model;
class Fournisseur_Controller{
    static public function Get_All_Fournisseur(){

        $fournisseurs=Fournisseurs_Model::Get_All_Fournisseur();
        return $fournisseurs;
    } 
}