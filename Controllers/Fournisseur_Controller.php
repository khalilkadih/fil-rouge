<?php

namespace Controllers;
use Models\Fournisseurs_Model;
use Session;
class Fournisseur_Controller{
    static public function Get_All_Fournisseur(){

        $fournisseurs=Fournisseurs_Model::Get_All_Fournisseur();
        return $fournisseurs;
    } 
    //____ Insert Fournisseur ____//
    public function Insert_Fournisseur(){
        print_r($_POST);
        if(isset($_POST['insertFournisseur']))
        {

            $data=array(
                'name'=>$_POST['name_fournisseur'],
                'telephone'=>$_POST['telephone_fournisseur'],
                'adress'=>$_POST['adress_fournisseur'],
                'observation'=>$_POST['observation_fournisseur']
            );
            
            $fournisseurs=Fournisseurs_Model::Insert_Fournisseur($data);
            if ($fournisseurs == 'ok') {

                echo 'Inserted successfully';
                 Session::Set('succes', 'Product Added Successfully');
                 header('location:' . BASE_URL.'fournisseurs');
            } else {
                echo "insertion echouée";
            }
            
            
          
        }
    }    
}