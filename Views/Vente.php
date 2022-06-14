<?php

use Controllers\Vente_Controller;

require_once('includes/header.php');

$vente = new Vente_Controller();
$ventes = $vente->Get_All_Vente();
// echo '<pre>';
// print_r($ventes);
// echo '</pre>';


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
                            <a href="./profile.html" class="mx-3 "> <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="mx-3 w-75"></a>

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
                                    <th> reference Vente</th>
                                    <th>produit</th>
                                    <th>client acheter</th>
                                    <th>Quantite vente</th>
                                    <th>Prix de vente</th>
                                    <th>Date de vente</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($ventes as $vente)
                                 { ?>
                                    <tr>

                                        <td><?= $vente['id_commande_client'] ?></td>
                                        <td><?= $vente['name_product'] ?></td>
                                        <td><?= $vente['name_client'] ?></td>
                                        <td><?= $vente['quantite_commande_client'] ?> pieces</td>
                                        <td><?= $vente['prix_total_commande_client'] ?> DHs</td>
                                        <td><?= $vente['date_commande_client'] ?></td>
                                        <td class="d-flex flex-row ">
   
                                        <form action="" method="POST">

                                                <input type="hidden" name="id" value="<?php echo ($vente['id_commande_client']) ?>">
                                                <button class="btn btn-sm btn-warning ">
                                                    <i class="fa fa-edit"></i>Edit
                                                </button>
                                            </form>

                                            <form action="DeleteVente" method="POST" class="mx-2">

                                                <input type="hidden" name="id" value="<?php echo ($vente['id_commande_client']) ?>">
                                                <button class="btn btn-sm btn-danger ">

                                                    <i class="fa fa-edit"></i>
                                                    Delete
                                                </button>



                                            </form>

                                        </td>
                                    </tr>

                            </tbody>
                        <?php } ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once('includes/footer.php'); ?>