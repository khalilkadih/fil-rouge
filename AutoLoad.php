<?php 

session_start();
include_once('Constant.php');
include_once('./app/Redirect.php');

require_once('database/connection.php');
spl_autoload_register(function($className)
{
    $path=str_replace("\\",DIRECTORY_SEPARATOR,$className);
    $path=$className.'.php';
    if(is_readable($path))
    {
        require_once($path);
    }
});
// foreach (glob('./app/controllers/*.php') as $filename)
// {
//     require_once($filename);
// }
// foreach (glob('./app/models/*.php') as $filename)
// {
//     require_once($filename);
// }


