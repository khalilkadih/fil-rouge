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
        
        //____ Insert Fournisseur ____//
        static public function Insert_Fournisseur($data)
        {
            $cnx = Connection::Connect()->prepare('INSERT INTO fournisseur(name_fournisseur,telephone_fournisseur,adress_fournisseur,observation_fournisseur) 
            VALUES(:name_fournisseur,:telephone_fournisseur,:adress_fournisseur,:observation_fournisseur)');
            $cnx->bindParam(':name_fournisseur',$data['name']);
            $cnx->bindParam(':telephone_fournisseur',$data['telephone']);
            $cnx->bindParam(':adress_fournisseur',$data['adress']);
            $cnx->bindParam(':observation_fournisseur',$data['observation']);
            if($cnx->execute()){
                return 'ok';
            }
            else{
                echo 'Something Wrong';
            }
        
        }
        //_______Delete Fournisseur_______
        static public function Delete_Fournisseur($id_fournisseur)
        {
            $id_fournisseur=$_GET['id_fournisseur'];
            $cnx = Connection::Connect()->prepare('DELETE FROM fournisseur WHERE id_fournisseur=:id_fournisseur');
            $cnx->bindParam(':id_fournisseur',$id_fournisseur);
             $cnx->execute();
             return $cnx->rowCount()>0;
              
           
        }

        // _____Update Fournisseur_____//

        static public function UpdateFournisseur($data)
        {
            print_r($data);
        
            $cnx = Connection::Connect()->prepare('UPDATE fournisseur SET name_fournisseur=:name_fournisseur,telephone_fournisseur=:telephone_fournisseur,adress_fournisseur=:adress_fournisseur,observation_fournisseur=:observation_fournisseur WHERE id_fournisseur=:id_fournisseur');
            $cnx->bindParam(':name_fournisseur',$data['name']);
            $cnx->bindParam(':telephone_fournisseur',$data['telephone']);
            $cnx->bindParam(':adress_fournisseur',$data['adress']);
            $cnx->bindParam(':observation_fournisseur',$data['observation']);
            $cnx->bindParam(':id_fournisseur',$data['id_fournisseur']);
            if($cnx->execute()){
                return 'ok';
            }
            else{
                echo 'Something Wrong';
            }
        }
}