<?php

namespace Models;
use database\Connection;
use PDOException;

class Clients_Model{

    public static function Get_All_Client()
    {
       
        $cnx=Connection::Connect()->prepare('select * from client');
        $cnx->execute();
        $clients=$cnx->fetchAll();
        return $clients;


    }
}