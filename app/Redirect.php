<?php

namespace classes;
class Redirect
{

    /**
     * redirect to a page 
     */
    static public function to($page)
    {
        header("location:$page");
    }
}