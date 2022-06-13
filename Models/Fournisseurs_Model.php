<?php


namespace Models;
use database\Connection;

class Fournisseurs_Model
{
        static public function Get_All_Fournisseur()
        {
            $cnx = Connection::Connect()->prepare('SELECT * FROM fournisseur');
            $cnx->execute();
            return $fournisseurs = $cnx->fetchAll();
        } 
        
}