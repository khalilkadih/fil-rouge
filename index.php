<?php

require_once('autoload.php');
require_once('views/includes/header.php');
require_once('./app/Session.php');
require_once('./app/session.php');

use database\Connection;
use controllers\HomeController;

$home = new HomeController();
$pages = ['index', 'Achat', 'Client', 'Configuration','dashboard','produit','rapport','utilisateur','vente'];

if (isset($_GET['page'])) {
    if ((in_array($_GET['page'], $pages))) {

        $page = $_GET['page'];

        $home->index($page);
    } else {

        include('views/includes/404.php');
    }
} else {
    $home->index('home');
}
