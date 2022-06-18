<?php


namespace Controllers;

use app;
use Models\Achats_Model;
use database\Connection;
use Redirect\Redirect;
use Session;

class Achat_Controller
{

    static public function Get_All_Achat()
    {
        $achat = Achats_Model::Get_All_Achat();
        return $achat;
    }

    //___insert_Achat____///
    public function Insert_Achat()
    {
        if (isset($_POST['insertAchat'])) {

            $data = array(

                'references_achat' => $_POST['references_achat'],
                'id_product' => $_POST['id_product'],
                'id_fournisseur' => $_POST['id_fournisseur'],
                'quantite_commande_fournisseur' => $_POST['quantite_acheter'],
                'prix_total_commande_fournisseur' => $_POST['prix_achat'],
                'date_commande_fournissuer' => $_POST['date_achat']
            );

            $achat = Achats_Model::Insert_Achat($data);
            if ($achat == 'ok') {
                Session::Set('success', 'Product Added Successfully');

                Redirect::to('Achat');       // echo 'Everything is ok';
            } else {
                echo 'Something went wrong';
            }
        }
    }
    //____________Delte Achat____________
    public function Delete_Achat()
    {
        if (isset($_GET['id_commande_fournisseur'])) {
            $id_commande_fournisseur = $_GET['id_commande_fournisseur'];

            $deleteAchat = Achats_Model::Delete_Achat($id_commande_fournisseur);
            if ($deleteAchat == 'ok') {
                Session::Set('success', 'Product Deleted Successfully');
                Redirect::to('Achat');
            } else {
                echo 'Something went wrong';
            }
        }
    }
    // ___update Achat___///
    public function Update_Achat()
    {
        if (isset($_POST['updatetAchat'])) {
            
            $data = array(
                'id_commande_fournisseur' => $_POST['references_achat'],
                'quantite_commande_fournisseur' => $_POST['quantite_acheter'],
                'prix_total_commande_fournisseur' => $_POST['prix_achat'],
                'date_commande_fournissuer' => $_POST['date_achat']
            );
           
            $updateAchat = Achats_Model::UpdateAchat($data);
            if ($updateAchat == 'ok') {
                Session::Set('success', 'Product Updated Successfully');
                Redirect::to('Achat');
            } else {
                echo 'Something went wrong';
            }
        }
    }
}
