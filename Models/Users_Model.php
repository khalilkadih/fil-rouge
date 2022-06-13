<?php

namespace Models;

use database\Connection;
use PDOException;

class Users_Model
{
    static public function Get_All_Users()
    {
        $cnx = Connection::Connect()->prepare('SELECT * FROM user');
        $cnx->execute();
        return $users = $cnx->fetchAll();
    }
}
