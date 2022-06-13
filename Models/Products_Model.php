<?php

namespace Models;

use database\Connection;
use PDOException;

class Products_Model
{
    static public function Get_All_Product()
    {
        $cnx = Connection::Connect()->prepare('SELECT product.name_product,categorie.name_categorie,product.id_product,product.qte_aviable,product.prix_achat,product.prix_vente FROM product INNER JOIN categorie ON product.id_categorie = categorie.id_categorie');
        $cnx->execute();
        return $products = $cnx->fetchAll();
    }
}
