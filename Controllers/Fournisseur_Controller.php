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
                 Session::Set('success', 'Product Added Successfully');
                 header('location:' . BASE_URL.'fournisseurs');
            } else {
                echo "insertion echouée";
            }
            
            
          
        }
    }   
    
   // _____Delete Fournisseur_____
    public function Delete_Fournisseur($id_fournisseur){
        
        print_r($id_fournisseur);
        
        if(Fournisseurs_Model::Delete_Fournisseur($id_fournisseur)){
            Session::Set('success', 'Fournisseur Deleted Successfully');
            header('location:' . BASE_URL.'fournisseurs');
        }
        else{
            echo "Erreur";
        }
            

        
    }
    // _____Update Fournisseur_____//
    public function Update_Fournisseur(){
        if(isset($_POST['EditFournisseurs']))
        {
            $data=array(
                'id_fournisseur'=>$_POST['id_fournisseur'],
                'name'=>$_POST['name_fournisseur'],
                'telephone'=>$_POST['telephone_fournisseur'],
                'adress'=>$_POST['adress_fournisseur'],
                'observation'=>$_POST['observation_fournisseur']
            );
            print_r($data);
            
            $fournisseurs=Fournisseurs_Model::UpdateFournisseur($data);
            if ($fournisseurs == 'ok') {
                echo 'Updated successfully';
                Session::Set('success', 'Product Updated Successfully');
                header('location:' . BASE_URL.'fournisseurs');
            } else {
                echo "insertion echouée";
            }
        }
    }
}