<?php
// namespace controllers;

namespace controllers;
class HomeController
{

    public function index($page)
    {
        include ('Views/'.$page.'.php');
    }
    
}
