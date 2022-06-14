<?php

namespace controllers;
use Models\Products_Model;
use database\Connection;
use PDOException;
use Session;

class Product_Controller
{
    static public function Get_All_Product()
    {
        $product=Products_Model::Get_All_Product();
        return $product;
    }




    //insert product
    public function InserProduct()
    {
        if (isset($_POST['insertProduct'])) 
        {
           $data = array(
                'name_product' => $_POST['name_product'],
                'qte_aviable' => $_POST['qte_aviable'],
                'prix_achat' => $_POST['prix_achat'],
                'prix_vente' => $_POST['prix_vente'],
                'id_categorie' => $_POST['categorie']
                
            );


            $product = Products_Model::Insert_Product($data);
            if ($product == 'ok') {

                echo 'Inserted successfully';
                 Session::Set('succes', 'Product Added Successfully');
                header('location:' . BASE_URL.'produit');
            } else {
                echo "insertion echouée";
            }
        }
    }     
}




