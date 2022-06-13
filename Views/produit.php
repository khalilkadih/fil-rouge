<?php

use controllers\Product_Controller;

$product=new Product_Controller();
$results=$product->Get_All_Product();
// echo '<pre>';
// print_r($results);
// echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Gestion du stock </title>
</head>

<body>
    <main>
        <div class="d-flex" id="dashboard">
            <?php require_once('includes/navigation.php'); ?>

            <div id="page-content-dashboard" class="bt">
                <nav class="navbar navbar-expand-lg   py-1 px-4 cont ">
                    <div class="d-flex align-items-center">

                        <i class="fa fa-bars me-3 " id="menu-toggle"></i>
                        <h5>Accueil</h5>
                    </div>


                    <div class="navbar-nav ms-auto">
                        <div class="nav-item ">
                            <form class="d-flex  justify-content-end mt-3 ">
                                <input class="form-control me-2 " type="search" placeholder="Search..." aria-label="Search">
                                <a href="./profile.html" class="mx-3 "> <img src="<?=BASE_URL_WITH_VIEWS?>/img/user (1).png" class="mx-3 w-75"></a>

                            </form>
                        </div>
                    </div>

                </nav>
                <div class="container-fluid px-4">
                    <div class="container-fluid px-4">
                        <div class="row ">
                            <div class=" d-flex justify-content-between my-3">
                                <h1 class="fs-4 ">Liste Produit</h1>

                            </div>
                            <div class=" table-responsive-sm table-responsive-md">
                                <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id </th>
                                            <th>name of product</th>
                                            <th>Quantite Stocke</th>
                                            <th>Prix d'achat </th>
                                            <th>prix de vente</th>
                                            <th>categorie name</th>
                                            <th class="text-center"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- (`id_product`, `name_product`, `qte_aviable`, `prix_achat`, `prix_vente`, `id_categorie`) -->
                                        <?php foreach ($results as $result) { ?>
                                            <tr>
                                                <td><?php echo $result['id_product'] ?></td>
                                                <td><?php echo $result['name_product'] ?></td>
                                                <td><?= $result['qte_aviable'] ?></td>
                                                <td><?= $result['prix_achat'] ?></td>
                                                <td><?= $result['prix_vente'] ?></td>
                                                <td><?= $result['name_categorie'] ?></td>
                                                <td class="text-center">
                                                    <a href="<?=BASE_URL_WITH_VIEWS?>/product/edit?id=<?=$result['id_product']?>" class="btn btn-primary">Edit</a>
                                                    <a href="<?=BASE_URL_WITH_VIEWS?>/product/delete?id=<?=$result['id_product']?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                  
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>



    </main>
    
    <?php require_once('includes/header.php'); ?>
