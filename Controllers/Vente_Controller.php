<?php


namespace Controllers;
use Models\Ventes_Model;
class Vente_Controller
{
    public function Get_All_Vente()
    {
        $ventes = Ventes_Model::Get_All_Vente();
        return $ventes;
    }
}