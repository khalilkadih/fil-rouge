<?php


namespace Controllers;

use Models\Ventes_Model;
use Redirect\Redirect;
use Session;

class Vente_Controller
{
    public function Get_All_Vente()
    {
        $ventes = Ventes_Model::Get_All_Vente();
        return $ventes;
    }
    //_____insert_Vente____///

    public function Insert_Vente()
    {
        if (isset($_POST['insertVente'])) {
            $data = array(
                'references_commande_client' => $_POST['id_commande_client'],
                'id_product' => $_POST['id_product'],
                'id_client' => $_POST['id_client'],
                'quantite_commande_client' => $_POST['quantite_commande_client'],
                'prix_total_commande_client' => $_POST['prix_total_commande_client'],
                'date_commande_client' => $_POST['date_commande_client']
            );


            if (Ventes_Model::Insert_Vente($data)) {
                Session::Set('success', 'Vente ajoutée avec succès');
                Redirect::to('vente');
                // echo "commande ajoutée avec succès";
                exit();
            } else {
                echo 'Something went wrong';
            }
        }
    }


    // ____ delete vente ____ ///


    public function Delete_Vente()
    {
        if (isset($_GET['id_commande_client'])) {
            $id_commande_client = $_GET['id_commande_client'];
            $vente = Ventes_Model::Delete_Vente($id_commande_client);
            if ($vente) {
                Session::Set('success', 'Vente supprimée avec succès');
                Redirect::to('vente');
                // echo "commande supprimée avec succès";
                exit();
            } else {
                echo 'Something went wrong';
            }
            
        }
    }

    // _____ update vente ____ ///
    public function Update_Vente()
    {
        if (isset($_POST['updateVente'])) {
            $data = array(
                'id_commande_client' => $_POST['id_commande_client'],
                'quantite_commande_client' => $_POST['quantite_commande_client'],
                'prix_total_commande_client' => $_POST['prix_total_commande_client'],
                'date_commande_client' => $_POST['date_commande_client']
            );
           
            $updateVente=Ventes_Model::UpdateVente($data);
            if ($updateVente=='ok') {
               
                Session::Set('success', 'Vente modifiée avec succès');
                Redirect::to('vente');
                // echo "commande modifiée avec succès";
                exit();
            } else {
                echo 'Something went wrong';
            }
        }
    }
}
