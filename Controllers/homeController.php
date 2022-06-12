<?php
// namespace controllers;

namespace controllers;
use database\Connection;

class HomeController
{

    public function index($page)
    {

        include ('Views/'.$page.'.php');
    }
    // public function views($page,$folder)
    // {
    //     include ('Views/'.$folder.'/'.$page.'.php');
    // }
   
    
}

