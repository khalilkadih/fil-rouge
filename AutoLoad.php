<?php 


include_once('Constant.php');
include_once('./app/Redirect.php');
include_once('Views/includes/Alert.php');

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
function displayMessage(){
    if(isset($_GET['message'])){
        ob_start();
    ?><div class='alert alert-<?= $_GET['type']?>'><?= $_GET['message']?></div><?php
    return ob_get_clean();
    }else
    return '';
}

function getUrlWIthMessage($url,$message,$type){
    return  BASE_URL . $url.'?message='.$message.'&type='.$type;
}