<?php
// namespace controllers;

namespace Controllers;

class HomeController
{

    public function index($page)
    {

        include ('Views/'.$page.'.php');
    }
  
   
    
}

