<?php

require_once('autoload.php');
require_once('views/includes/header.php');
require_once('./app/Session.php');
require_once('./app/session.php');
require_once('./Views/includes/Alert.php');

use database\Connection;
use controllers\HomeController;

$home = new HomeController();

$pages = ['index', 'Achat', 'Clients','facture', 'Configuration', 'produit', 'fournisseurs', 'rapports', 'utilisateur', 'vente', 'home', 'Achat','logout'];
$protectedPages=['Achat', 'Clients','Configuration', 'produit', 'fournisseurs', 'rapports', 'utilisateur', 'vente', 'home', 'Achat','logout'];

    $page = str_replace("/pfa/", '', getRequestCleanUri());
if(in_array($page, $protectedPages)){
    session_start();
    if(!isset($_SESSION['email'])){
        header('location: index');
        exit;
    }else{
        openPage($page);
    }
}else{
    openPage($page);
}
function getRequestCleanUri()
{
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}
function openPage($page){
    if($page=='logout')
        logout();   
    global $pages;
    global $home;
    if ((in_array($page, $pages))) {
        $home->index($page);
    } else if ($page == '') {
        $home->index('index');
    } else {
        include('views/includes/404.php');
    }
}
 function Logout()
    {
        session_start();
        session_destroy();
        // print_r($_SESSION);
        header('location:' . BASE_URL . 'index');
        exit;
    }
