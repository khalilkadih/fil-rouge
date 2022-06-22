<?php


namespace Models;

use database\Connection;
use PDOException;

class Categories_Model
{
    static public function Get_All_Categorie()
    {
        $cnx = Connection::Connect()->prepare("SELECT * FROM categorie");
        $cnx->execute();
        $categorie = $cnx->fetchAll();
        return $categorie;
    }


    // _____Delete Categorie_____
    static public function Delete_Categorie($id_categorie)
    {
        $cnx = Connection::Connect()->prepare("DELETE FROM categorie WHERE id_categorie=:id_categorie");
        $cnx->bindParam(':id_categorie', $id_categorie);
        $cnx->execute();
    }


    ////insert categorie
    static public function InserCategorie($data)
    {
       
        $cnx = Connection::Connect()->prepare('INSERT INTO `categorie`(`name_categorie`, `description_categorie`) VALUES(:name_categorie,:description_categorie)');
        $cnx->bindParam(':name_categorie', $data['name_categorie']);
        $cnx->bindParam(':description_categorie', $data['description_categorie']);
        $cnx->execute();
       
        return $cnx->rowCount()>0;
    }



    ///delet categorie


    static public function DeleteCategorie($id_categorie){

        $stmt=Connection::Connect()->prepare('DELETE FROM categorie WHERE id_categorie = :id_categorie');
        $stmt->bindParam(':id_categorie', $id_categorie);
        $stmt->execute();
        return $stmt->rowCount()>0;
       
       
    }
}
