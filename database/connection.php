<?php

namespace database;

use PDOException;

class Connection
{

    static public function Connect()
    {

        try {
            $cnx = new \PDO('mysql:host=localhost;dbname=gestion_de_stock', 'root', '');
            $cnx->exec("set names utf8");
            $cnx->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
        }  catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }


        return $cnx;
    }
}

