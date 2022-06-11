<?php
// namespace controllers;

namespace controllers;
class HomeController
{

    public function index($page)
    {
        include ('views/'.$page.'.php');
    }
    
}
