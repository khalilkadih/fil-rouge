<?php
// namespace controllers;

namespace controllers;
class Controller
{

    public function view($view_name)
    {

        include ('Views/'.$view_name.'.php');
    }
    
}
