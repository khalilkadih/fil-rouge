<?php

use Controllers\Vente_Controller;
use Controllers\Product_Controller;
use Controllers\Fournisseur_Controller;
use Controllers\Categorie_Controller;
use Controllers\Client_Controller;

require_once('includes/header.php');

$product = new Product_Controller();
$products = $product->Get_All_Product();
$fournisseur = new Fournisseur_Controller();
$fournisseurs = $fournisseur->Get_All_Fournisseur();
$categorie = new Categorie_Controller();
$categories = $categorie->Get_All_Categorie();
$client = new Client_Controller();
$clients = $client->Get_All_Client();

require_once('includes/header.php');

$vente = new Vente_Controller();

$ventes = $vente->Get_All_Vente();

if (isset($_POST['insertVente'])) {
    $vente->Insert_Vente();
}


if (isset($_GET['DeleteVente'])) {

    $vente->Delete_Vente();
}
if (isset($_POST['updateVente'])) {
    $vente->Update_Vente();
}


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
               
                    </div>
                </div>

            </nav>
            <div class="container-fluid px-4">
                <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Liste des Vente</h1>
                        <div>
                            <!-- <i class="fas fa-sort mx-3  "></i> -->
                            <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalInsertVente">
                                Ajouter une Vente
                            </button>
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
                                    <!-- <th>Categorie</th> -->
                                    <th>Prix de vente</th>
                                    <th>Date de vente</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($ventes as $vente) { ?>
                                    <tr class="item">
                                        <td class="id_commande_client"><?= $vente['id_commande_client'] ?></td>
                                        <td class="name_product"><?= $vente['name_product'] ?></td>
                                        <td class="name_client"><?= $vente['name_client'] ?></td>
                                        <?php //foreach ($categories as $cat) { 
                                        ?>
                                        <!-- <td><? //= $cat['name_categorie'] 
                                                    ?></td> -->
                                        <?php //} 
                                        ?>
                                        <td class="quantite_commande_client"><?= $vente['quantite_commande_client'] ?> pieces</td>
                                        <td class="prix_total_commande_client"><?= $vente['prix_total_commande_client'] ?> DHs</td>
                                        <td class="date_commande_client"><?= $vente['date_commande_client'] ?></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning modalUpdateVente">

                                                <i class="fa fa-edit"></i>
                                                Edit
                                            </a>
                                        </td>
                                        <td>


                                            </a>
                                            <a href="<?= BASE_URL ?>vente?DeleteVente=1&id_commande_client=<?= $vente['id_commande_client'] ?>" class="btn btn-danger btn-sm confirm">
                                                <i class="fa fa-trash"></i>
                                                Delete
                                            </a>
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
    <!-- __________________________________________Start Model Vente_________________________________________________________ -->

    <div class="modal fade" id="modalInsertVente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInsertVente">Add Vente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>ajouter un Client</h1>

                        <div class="form-group">
                            <label for="id_commande_client">reference Vente</label>
                            <input type="text" class="form-control" id="id_commande_client" name="id_commande_client" placeholder="reference Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid reference Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_client">Client</label>
                            <select class="form-control" id="id_client" name="id_client" required>
                                <option value="">Select Client</option>
                                <?php foreach ($clients as $client) { ?>
                                    <option value="<?= $client['id_client'] ?>"><?= $client['name_client'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Client.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_product">Produit</label>
                            <select class="form-control" id="id_product" name="id_product" required>
                                <option value="">Select Produit</option>
                                <?php foreach ($products as $product) { ?>
                                    <option value="<?= $product['id_product'] ?>"><?= $product['name_product'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Produit.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantite_commande_client">Quantite Vente</label>
                            <input type="text" class="form-control" id="quantite_commande_client" name="quantite_commande_client" placeholder="Quantite Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Quantite Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prix_total_commande_client">Prix Vente</label>
                            <input type="text" class="form-control" id="prix_total_commande_client" name="prix_total_commande_client" placeholder="Prix Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Prix Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_commande_client">Date Vente</label>
                            <input type="date" class="form-control" id="date_commande_client" name="date_commande_client" placeholder="Date Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Date Vente.
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertVente" class="btn btn-primary">Save data</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- _____________________________________________End Model Vente_________________________________________________________ -->
    <!-- __________________________Start Modal Update Vente__________________________________________ -->

    <div class="modal fade" id="modalUpdateVente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUpdateVente">Add Vente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>ajouter un Client</h1>

                        <div class="form-group">
                            <label for="id_commande_client">reference Vente</label>
                            <input type="text" class="form-control" id="id_commande_client" name="id_commande_client" placeholder="reference Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid reference Vente.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="quantite_commande_client">Quantite Vente</label>
                            <input type="text" class="form-control" id="quantite_commande_client" name="quantite_commande_client" placeholder="Quantite Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Quantite Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prix_total_commande_client">Prix Vente</label>
                            <input type="text" class="form-control" id="prix_total_commande_client" name="prix_total_commande_client" placeholder="Prix Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Prix Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_commande_client">Date Vente</label>
                            <input type="date" class="form-control" id="date_commande_client" name="date_commande_client" placeholder="Date Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Date Vente.
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updateVente" class="btn btn-primary">Save data</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- __________________________Start Modal Update Vente__________________________________________ -->
    <div class="modal fade" id="modalUpdateVente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUpdateVente">Add Vente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>ajouter un Client</h1>

                        <div class="form-group">
                            <label for="id_commande_client">reference Vente</label>
                            <input type="text" class="form-control" id="id_commande_client" name="id_commande_client" placeholder="reference Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid reference Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantite_commande_client">Quantite Vente</label>
                            <input type="text" class="form-control" id="quantite_commande_client" name="quantite_commande_client" placeholder="Quantite Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Quantite Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prix_total_commande_client">Prix Vente</label>
                            <input type="text" class="form-control" id="prix_total_commande_client" name="prix_total_commande_client" placeholder="Prix Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Prix Vente.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_commande_client">Date Vente</label>
                            <input type="date" class="form-control" id="date_commande_client" name="date_commande_client" placeholder="Date Vente" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid Date Vente.
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updateVente" class="btn btn-primary">Save data</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

   <?php require_once('includes/footer.php'); ?>
    <script>
        //to show modal 
        document.querySelectorAll('.modalUpdateVente').forEach(btn => {
            btn.addEventListener('click', e => {
                let item = e.target.closest('.item');
                const modal = document.querySelector('#modalUpdateVente');
                console.log(item);
                console.log(modal);
                $("#modalUpdateVente").modal('show')
            });
            //to update data 
            document.querySelectorAll('.modalUpdateVente').forEach(btn => {

                btn.addEventListener('click', e => {
                    let item = e.target.closest('.item');
                    const modal = document.querySelector('#modalUpdateVente');
                    console.log(item);
                    console.log(modal);
                    modal.querySelectorAll('input').forEach(input => {
                        input.value = item.getElementsByClassName(input.name)[0].innerText;
                    })
                    $("#modalUpdateVente").modal('show')

                });

            })



        })
    </script>