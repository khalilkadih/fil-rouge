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
//_____insert client_____//
    public static function Insert_Client($data)
    {
        $cnx=Connection::Connect()->prepare('INSERT INTO client (name_client,telephone_client,adress_client,observation_client) 
        VALUES (:nom,:telephone,:adress,:observation)');
        $cnx->bindParam(':nom',$data['nom']);
        $cnx->bindParam(':telephone',$data['telephone']);
        $cnx->bindParam(':adress',$data['adress']);
        $cnx->bindParam(':observation',$data['observation']);
        if($cnx->execute()){
            return 'ok';
        }
        else
        {
            echo 'Something Wrong';
        }

    }
    // ______Delete Client_____________

   static public function Delete_Client($id_client){

    $cnx=Connection::Connect()->prepare('DELETE FROM client WHERE id_client=:id_client ');
    $cnx->bindParam(':id_client',$_POST['id_client']);
   if( $cnx->execute()){
         return 'ok';
    }
    else
    {
         echo 'Something Wrong';
    }   
   

   }

}