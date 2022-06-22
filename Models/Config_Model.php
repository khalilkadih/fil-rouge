<?php

namespace Models;
use database\Connection;

class Config_Model{


    static public function Get_Data(){
        $cnx=Connection::Connect()->prepare('SELECT * FROM configuration');
        $cnx->execute();
        $company = $cnx->fetchAll();
        return $company;

    }
}



