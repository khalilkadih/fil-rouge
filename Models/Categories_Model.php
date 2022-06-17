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


    // _____Delete Categorie_____
    static public function Delete_Categorie($id_categorie)
    {
        $cnx=Connection::Connect()->prepare("DELETE FROM categorie WHERE id_categorie=:id_categorie");
        $cnx->bindParam(':id_categorie',$id_categorie);
        $cnx->execute();
    }
}