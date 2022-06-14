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

}