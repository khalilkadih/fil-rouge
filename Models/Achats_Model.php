<?php

namespace Models;
use database\Connection;

class Achats_Model{
    public static function Get_All_Achat()
    {
        $cnx=Connection::Connect()->prepare('select * from commande_fournisseur');
        $cnx->execute();
        $achat=$cnx->fetchAll();
        return $achat;

    }

}