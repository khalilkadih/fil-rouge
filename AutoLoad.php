<?php 

session_start();
include_once('Constant.php');
include_once('./app/Redirect.php');
spl_autoload_register(function($className)
{
    $path=str_replace("\\",DIRECTORY_SEPARATOR,$className);
    $path=$className.'.php';
    if(is_readable($path))
    {
        require_once($path);
    }
});
const base_url="https://localhost/pfa/views";
