<?php

namespace controllers;
use Models\Products_Model;
use database\Connection;
use PDOException;

class Product_Controller
{
    static public function Get_All_Product()
    {
        $product=Products_Model::Get_All_Product();
        return $product;
    }
}




