<?php

namespace Controllers;
use Models\Config_Model;

class Config_Controller
{
   
    public function get_Company_info(){
        $data = Config_Model::Get_Data();
        return $data;        
    }
    
}