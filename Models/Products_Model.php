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
    //insert product
  static public function Insert_Product($data)
  {
    $cnx=Connection::Connect()->prepare('INSERT INTO product (name_product,id_categorie,qte_aviable,prix_achat,prix_vente) 
    VALUES (:name_product,:id_categorie,:qte_aviable,:prix_achat,:prix_vente)');
    $cnx->bindParam(':name_product',$data['name_product']);
    $cnx->bindParam(':id_categorie',$data['id_categorie']);
    $cnx->bindParam(':qte_aviable',$data['qte_aviable']);
    $cnx->bindParam(':prix_achat',$data['prix_achat']);
    $cnx->bindParam(':prix_vente',$data['prix_vente']);
    print_r($data);
    if($cnx->execute()){
      return 'ok';
      // print_r('$data');
    }
    else
    {
      return 'not ok';
    }

  }
}
