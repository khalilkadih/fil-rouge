<?php

require_once('autoload.php');
require_once('views/includes/header.php');
require_once('./app/Session.php');
require_once('./app/session.php');
require_once('./Views/includes/Alert.php');
use database\Connection; 
use controllers\HomeController;
$home = new HomeController();
$pages = ['index', 'Achat', 'Clients','login', 'Configuration','dashboard','produit','fournisseurs','rapports','utilisateur','vente','home','product/edit','product/delete','InsertUser','Achat'];
// $folders=['users_views','produits_views','vente_views','rapports_views','fournisseurs_views','clients_views','configuration_views','dashboard_views'];
    $page = str_replace("/pfa/",'',getRequestCleanUri());
    // echo $page;
    // print_r($_GET);
    if ((in_array($page, $pages))) {
        $home->index($page);
    } else if($page==''){
           $home->index('index');
    }else{
       
        include('views/includes/404.php');
    }

    function getRequestCleanUri(){
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

    }