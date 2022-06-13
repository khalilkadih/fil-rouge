<?php


namespace Controllers;
use Models\Achats_Model;
class Achat_Controller{

static public function Get_All_Achat()
{
    $achat=Achats_Model::Get_All_Achat();
    return $achat;

}


}