<?php


namespace Models;
use database\Connection;
use PDOException;
class Categories_Model
{
     static public function Get_All_Categorie()
    {
        $cnx=Connection::Connect()->prepare("SELECT * FROM categorie");
        $cnx->execute();
        $categorie=$cnx->fetchAll();
        return $categorie;
    }
}