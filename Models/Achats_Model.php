<?php

namespace Models;
use database\Connection;

class Achats_Model{
    public static function Get_All_Achat()
    {
        $cnx=Connection::Connect()->prepare('SELECT commande_fournisseur.id_commande_fournisseur,product.name_product,fournisseur.name_fournisseur,commande_fournisseur.quantite_commande_fournisseur,commande_fournisseur.prix_total_commande_fournisseur,commande_fournisseur.date_commande_fournissuer
        from commande_fournisseur
        inner JOIN fournisseur
        on fournisseur.id_fournisseur=commande_fournisseur.id_fournisseur
        inner JOIN product
        on product.id_product=commande_fournisseur.id_product');
        $cnx->execute();
        $achat=$cnx->fetchAll();
        return $achat;

    }

    //___insert_Achat____///
    static public function Insert_Achat($data)
    {
      
        $cnx=Connection::Connect()->prepare('INSERT INTO commande_fournisseur(id_commande_fournisseur,id_product,id_fournisseur,quantite_commande_fournisseur,prix_total_commande_fournisseur,date_commande_fournissuer)
         VALUES(:references_achat,:id_product,:id_fournisseur,:quantite_commande_fournisseur,:prix_total_commande_fournisseur,:date_commande_fournissuer)');
        $cnx->bindParam(':references_achat',$data['references_achat']);
        $cnx->bindParam(':id_product',$data['id_product']);
        $cnx->bindParam(':id_fournisseur',$data['id_fournisseur']);
        $cnx->bindParam(':quantite_commande_fournisseur',$data['quantite_commande_fournisseur']);
        $cnx->bindParam(':prix_total_commande_fournisseur',$data['prix_total_commande_fournisseur']);
        $cnx->bindParam(':date_commande_fournissuer',$data['date_commande_fournissuer']);
        if($cnx->execute())
        {
            return 'ok';
        }
        else{
            echo 'Something went wrong';
        }
        
    }

    //____________Delte Achat____________
    static public function Delete_Achat($id_commande_fournisseur)
    {
        
            $cnx=Connection::Connect()->prepare('DELETE FROM commande_fournisseur WHERE id_commande_fournisseur=:id_commande_fournisseur');
            $cnx->bindParam(':id_commande_fournisseur',$id_commande_fournisseur);
            if($cnx->execute()){
                return 'ok';
            }
            else{
                echo 'Something went wrong';
            }
    
    }

    //____________Update Achat____________
    static public function UpdateAchat($data)
    {
        $cnx=Connection::Connect()->prepare('UPDATE commande_fournisseur SET  id_commande_fournisseur=:id_commande_fournisseur,quantite_commande_fournisseur=:quantite_commande_fournisseur,prix_total_commande_fournisseur=:prix_total_commande_fournisseur,date_commande_fournissuer=:date_commande_fournissuer WHERE id_commande_fournisseur=:id_commande_fournisseur');
        $cnx->bindParam(':id_commande_fournisseur',$data['id_commande_fournisseur']);
        $cnx->bindParam(':quantite_commande_fournisseur',$data['quantite_commande_fournisseur']);
        $cnx->bindParam(':prix_total_commande_fournisseur',$data['prix_total_commande_fournisseur']);
        $cnx->bindParam(':date_commande_fournissuer',$data['date_commande_fournissuer']);
        if($cnx->execute())
        {
            return 'ok';
        }
        else{
            echo 'Something went wrong';
        }
    }
}