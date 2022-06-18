<?php

namespace Models;

use database\Connection;

class Ventes_Model
{


    static public function Get_All_Vente()
    {
        $cnx = Connection::Connect()->prepare('SELECT commande_client.id_commande_client,product.name_product,client.name_client,commande_client.quantite_commande_client,commande_client.prix_total_commande_client,commande_client.date_commande_client
        from commande_client
        inner JOIN client
        on client.id_client=commande_client.id_client
        inner JOIN product
        on product.id_product=commande_client.id_product');
        $cnx->execute();
        $vente = $cnx->fetchAll();
        return $vente;
    }
    //_____insert_Vente____///

    static public function Insert_Vente($data)
    {
        print_r($data);
        $cnx = Connection::Connect()->prepare('INSERT INTO commande_client (id_commande_client,id_product,id_client,quantite_commande_client,prix_total_commande_client,date_commande_client)
        values(:id_commande_client,:id_product,:id_client,:prix_total_commande_client,:quantite_commande_client,:date_commande_client)');
        $cnx->bindParam(':id_commande_client', $_POST['id_commande_client']);
        $cnx->bindParam(':id_product', $_POST['id_product']);
        $cnx->bindParam(':id_client', $_POST['id_client']);
        $cnx->bindParam(':quantite_commande_client', $_POST['quantite_commande_client']);
        $cnx->bindParam(':prix_total_commande_client', $_POST['prix_total_commande_client']);
        $cnx->bindParam(':date_commande_client', $_POST['date_commande_client']);
        $res=$cnx->execute();
        print_r($res);
        if($res){
            return true;
        }
        else{
            return false;
        }
        
        // return $cnx->rowCount()>0;
        
    }
    // ____ delete vente ____ ///

    static public function Delete_Vente($id_commande_client)
    {
        $cnx = Connection::Connect()->prepare('DELETE FROM commande_client WHERE id_commande_client = :id_commande_client');
        $cnx->bindParam(':id_commande_client', $id_commande_client);
        if ($cnx->execute()) {
            return 'ok';
        } else {
            return 'Something went wrong';
        }
    }
    // ____update Vente____
    static public function UpdateVente($data){

        $id_commande_client=$_POST['id_commande_client'];
        $cnx=Connection::Connect()->prepare('UPDATE `fournisseur` SET `name_fournisseur`=:name_fournisseur,`telephone_fournisseur`=:telephone_fournisseur,`adress_fournisseur`=:adress_fournisseur,`observation_fournisseur`=observation_fournisseur WHERE id_fournisseur=:id_fournisseur');
        $cnx->bindParam(':id_fournisseur',$_POST['id_fournisseur']);
        $cnx->bindParam(':name_fournisseur',$_POST['name_fournisseur']);
        $cnx->bindParam(':telephone_fournisseur',$_POST['telephone_fournisseur']);
        $cnx->bindParam(':adress_fournisseur',$_POST['adress_fournisseur']);
        $cnx->bindParam(':observation_fournisseur',$_POST['observation_fournisseur']);
        if($cnx->execute()){
            return true;
        }
        else{
            return false;
        }
        
    }
}
