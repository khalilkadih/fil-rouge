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

    //get user by id
    static public function Get_User_ById($id)
    {
        $cnx = Connection::Connect()->prepare('SELECT * FROM user WHERE id_user = :id');
        $cnx->bindParam(':id_user', $id);
        $cnx->execute();
        if($cnx->fetch()){
            return 'ok';
        }
        else
        {
            return 'not ok';
        }
    }

    //insert user 
    static public function InserUser($data){
      
        $cnx = Connection::Connect()->prepare('INSERT INTO user (name_user, role_user, email_user,password_user) VALUES (:name, :role,:email, :password)');
        $cnx->bindParam(':name', $data['name_user']);
        $cnx->bindParam(':role', $data['role_user']);
        $cnx->bindParam(':email', $data['email_user']);
        $cnx->bindParam(':password', $data['password_user']);
        if($cnx->execute()){
            return 'ok';
        }
        else
        {
            return 'not ok';
        }
    }
    //update user

    static public function UpdateUser($data){

        $stat=Connection::Connect()->prepare('UPDATE user 
        SET name_user = :name_user, role_user = :role_user, email_user = :email_user, password_user = :password_user 
        WHERE id_user = :id_user');
        $stat->bindParam(':name_user', $data['name_user']);
        $stat->bindParam(':role_user', $data['role_user']);
        $stat->bindParam(':email_user', $data['email_user']);
        $stat->bindParam(':password_user', $data['password_user']);
        $stat->bindParam(':id_user', $data['id_user']);
        if($stat->fetch()){
            return 'ok';
        }
        else
        {
            return 'not ok';
        }

    }
    //delete user
    static public function DeleteUser($id){
        $stat=Connection::Connect()->prepare('DELETE FROM user WHERE id_user = :id_user');
        $stat->bindParam(':id_user', $id);
        if($stat->fetch()){
            return 'ok';
        }
        else
        {
            return 'not ok';
        }
    }
}
