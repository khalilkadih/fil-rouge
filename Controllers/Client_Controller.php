<?php

namespace Controllers;
use Models\Clients_Model;

class Client_Controller
{

    public function Get_All_Client()
    {
        $clients=Clients_Model::Get_All_Client();
        return $clients;
        
    }
}