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
}
