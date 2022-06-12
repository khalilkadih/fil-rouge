<?php

require_once('autoload.php');
require_once('views/includes/header.php');
require_once('./app/Session.php');
require_once('./app/session.php');
use database\Connection;
use controllers\HomeController;
$home = new HomeController();
$pages = ['index', 'Achat', 'Clients', 'Configuration','dashboard','produit','fournisseurs','rapports','utilisateur','vente','home'];

    $page = str_replace("/pfa/",'',$_SERVER['REQUEST_URI']);
    if ((in_array($page, $pages))) {
        $home->index($page);
    } else if($page==''){
           $home->index('index');
    }else{
       
        include('views/includes/404.php');
    }
