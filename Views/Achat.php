<?php

use Controllers\Achat_Controller;

require_once('includes/header.php');
$achat=new Achat_Controller();
$achats=$achat->Get_All_Achat();
//  print_r($achats);
?>
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
                            <a href="<?=BASE_URL?>/profile" class="mx-3 ">
                                <img src="<?=BASE_URL_WITH_VIEWS?>/img/user (1).png" class="mx-3 w-75"></a>

                        </form>
                    </div>
                </div>

            </nav>
            <div class="container-fluid px-4">
                <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Liste des achats</h1>
                        <div>
                            <i class="fas fa-sort mx-3  "></i>
                            <a href="./ajouterEtudiant.html"> <button type="button" class="btn fw-bold  fs-6" style="background:#DD10C9 ; color: #012970;">Ajouter une achat</button></a>
                        </div>
                    </div>
                    <div class=" table-responsive-sm table-responsive-md">
                        <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                            <thead>
                                <tr>
                                    <th> reference Achat</th>
                                    <th>produit</th>
                                    <th>fournisseur</th>
                                    <th>Quantite acheter</th>
                                    <th>Prix d'achat</th>
                                    <th>Date d'achat</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($achats as $achat): ?>
                                <tr>
                                <!-- (`id_commande_fournisseur`, `id_fournisseur`, `date_commande_fournissuer`,  -->
                                <!-- `quantite_commande_fournisseur`, `prix_total_commande_fournisseur`, `id_product`)                                                                -->
                                    <td><?= $achat['id_commande_fournisseur']?></td>
                                    <td><?= $achat['id_product']?></td>
                                    <td><?= $achat['id_fournisseur']?></td>
                                    <td><?= $achat['quantite_commande_fournisseur']?></td>
                                    <td><?= $achat['prix_total_commande_fournisseur']?></td>
                                    <td><?= $achat['date_commande_fournissuer']?></td>
                                    <td><a href="<?=BASE_URL?>/editAchat/<?=$achat['id_commande_fournisseur']?>"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="<?=BASE_URL?>/deleteAchat/<?=$achat['id_commande_fournisseur']?>"><i class="fas fa-trash-alt"></i></a></td>


                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once('includes/footer.php');
