<?php

namespace Controllers;

use Models\Clients_Model;
use Session;

class Client_Controller
{

    public function Get_All_Client()
    {
        $clients = Clients_Model::Get_All_Client();
        return $clients;
    }

    //_____insert client_____//

    public function Insert_Client()
    {
        if (isset($_POST['insertClient'])) {

            $data = array(
                'nom' => $_POST['name_client'],
                'telephone' => $_POST['telephone_client'],
                'adress' => $_POST['adress_client'],
                'observation' => $_POST['observation_client']
            );
            print_r($data);
            $client = Clients_Model::Insert_Client($data);
            if ($client == 'ok') {
                Session::Set('succes', 'Client Added Successfully');
                header('location:' . BASE_URL . 'Clients');
            } else {
                echo 'Something Wrong';
            }
        }
    }
}
