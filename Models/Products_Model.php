<?php

namespace Models;

use database\Connection;
use PDOException;

class Products_Model
{
  // _____get product by id__________
  // static public function Get_Product_ById($data)
  // {
  //   $id_product = $_POST['id_product'];
  //   $cnx = Connection::Connect()->prepare("SELECT * FROM product WHERE id_product=:id_product");
  //   $cnx->execute();
  //   $product = $cnx->fetch();
  //   return $product;
   
  // }
  static public function Get_All_Product()
  {
    $cnx = Connection::Connect()->prepare('SELECT product.name_product,categorie.name_categorie,product.id_product,product.qte_aviable,product.prix_achat,product.prix_vente FROM product INNER JOIN categorie ON product.id_categorie = categorie.id_categorie');
    $cnx->execute();
    return $products = $cnx->fetchAll();
    $cnx->closeCursor();
    $cnx=null;
  }
  //insert product
  static public function Insert_Product($data)
  {
    
    $cnx = Connection::Connect()->prepare('INSERT INTO product (name_product,id_categorie,qte_aviable,prix_achat,prix_vente) 
    VALUES (:name_product,:id_categorie,:qte_aviable,:prix_achat,:prix_vente)');
    $cnx->bindParam(':name_product', $data['name_product']);
    $cnx->bindParam(':id_categorie', $data['id_categorie']);
    $cnx->bindParam(':qte_aviable', $data['qte_aviable']);
    $cnx->bindParam(':prix_achat', $data['prix_achat']);
    $cnx->bindParam(':prix_vente', $data['prix_vente']);
    print_r($data);
    if ($cnx->execute()) {
      return 'ok';
      // print_r('$data');
    } else {
      return 'not ok';
    }
    $cnx->closeCursor();
    $cnx=null;
  }
  // _____Delete Product_____

  static public function Delete_Product($id_product)
  {
    $cnx = Connection::Connect()->prepare('DELETE FROM product WHERE id_product=:id_product');
    $cnx->bindParam(':id_product', $id_product);
    $cnx->execute();
   return $cnx->rowCount()>0;
  }

  // _____Update Product__________

  static public function Update_Product($data)
  {
    print_r($data);
    $cnx = Connection::Connect()->prepare('UPDATE product SET name_product=:name_product,qte_aviable=:qte_aviable,prix_achat=:prix_achat,prix_vente=:prix_vente WHERE id_product=:id_product');
   $cnx->bindParam(':id_product', $data['id_product']);
    $cnx->bindParam(':name_product', $data['name_product']);
    $cnx->bindParam(':qte_aviable', $data['qte_aviable']);
    $cnx->bindParam(':prix_achat', $data['prix_achat']);
    $cnx->bindParam(':prix_vente', $data['prix_vente']);
    
    if ($cnx->execute()){
      return 'ok';
    } else {
      return 'not ok';
    }
  }
}
