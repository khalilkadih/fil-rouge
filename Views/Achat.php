<?php

use Controllers\Achat_Controller;
use Controllers\Product_Controller;
use Controllers\Fournisseur_Controller;
use Controllers\Categorie_Controller;

require_once('includes/header.php');
$achat = new Achat_Controller();
$achats = $achat->Get_All_Achat();
$product = new Product_Controller();
$products = $product->Get_All_Product();
$fournisseur = new Fournisseur_Controller();
$fournisseurs = $fournisseur->Get_All_Fournisseur();

if(isset($_POST['insertAchat'])){
    $achat->Insert_Achat();
}


if(isset($_GET['DeleteAchat'])){
    $achat->Delete_Achat();
}


if(isset($_POST['updatetAchat'])){
    print_r($_POST);
    $achat->Update_Achat();
}
$categorie = new Categorie_Controller();
$categories = $categorie->Get_All_Categorie();


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
                            <a href="<?= BASE_URL ?>/profile" class="mx-3 ">
                                <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="mx-3 w-75"></a>

                        </form>
                    </div>
                </div>

            </nav>
            <div class="container-fluid px-4">
                <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Liste des achats</h1>

                        <div>
                            <!-- <i class="fas fa-sort mx-3  "></i> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertAchat">
                                Ajouter un Achat
                            </button>
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
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($achats as $achat) :
                                    
                                    ?>
                                  
                                    <tr class="item">
                                        <td class="references_achat">
                                            <?= $achat['id_commande_fournisseur'] ?>
                                        </td>
                                        <td class="name_product">
                                            <?= $achat['name_product'] ?>
                                        </td>
                                        <td class="name_fournisseur">
                                            <?= $achat['name_fournisseur'] ?>
                                        </td>
                                        <td class="quantite_acheter">
                                            <?= $achat['quantite_commande_fournisseur'] ?>
                                        </td>
                                        <td class="prix_achat">
                                            <?= $achat['prix_total_commande_fournisseur'] ?>
                                        </td>
                                        <td class="date_achat">
                                            <?= $achat['date_commande_fournissuer'] ?>
                                        </td>
                                        
                                        <td class="d-flex flex-row ">

                                            <a href="#" class="btn btn-sm btn-warning updateAchatModel">
                                                <i class="fa fa-edit"></i>
                                                Edit</a>
                                        </td>
                                        <td>
                                            <a href="<?= BASE_URL ?>vente?DeleteAchat=1&id_commande_client=<?= $vente['id_commande_client'] ?>">
                                            <i class="fa fa-trash"></i>   
                                            Delete
                                            </a>
                                        </td>


                                    </tr>
                            </tbody>
                        <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- __________________________________________  start Modal insert achat____________________________ -->

    <div class="modal fade" id="modalInsertAchat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInsertAchat">Add Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>ajouter un Client</h1>
                        <div class="form-group">
                            <label for="references_achat">reference achat</label>
                            <input type="text" class="form-control" id="references_achat" name="references_achat" placeholder="reference achat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid reference achat.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_product">produit</label>
                            <select class="form-control" id="id_product" name="id_product" required>
                                <option value="">
                                    choisir un produit

                                </option>
                                <?php foreach ($products as $product) : ?>
                                    <option value="<?= $product['id_product'] ?>">
                                        <?= $product['name_product'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid produit.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_fournisseur">fournisseur</label>
                            <select class="form-control" id="id_fournisseur" name="id_fournisseur" required>
                                <option value="">choisir un fournisseur</option>
                                <?php foreach ($fournisseurs as $fournisseur) : ?>
                                    <option value="<?= $fournisseur['id_fournisseur'] ?>"><?= $fournisseur['name_fournisseur'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid fournisseur.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_categorie">categorie</label>
                            <select class="form-control" id="id_categorie" name="id_categorie" required>
                                <option value="">choisir une categorie</option>
                                <?php foreach ($categories as $categorie) : ?>
                                    <option value="<?= $categorie['id_categorie'] ?>"><?= $categorie['name_categorie'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid categorie.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantite_acheter">quantite acheter</label>
                            <input type="text" class="form-control" id="quantite_acheter" name="quantite_acheter" placeholder="quantite acheter" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid quantite acheter.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prix_achat">prix d'achat</label>
                            <input type="text" class="form-control" id="prix_achat" name="prix_achat" placeholder="prix d'achat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid prix d'achat.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_achat">date d'achat</label>
                            <input type="date" class="form-control" id="date_achat" name="date_achat" placeholder="date d'achat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid date d'achat.
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="insertAchat" class="btn btn-primary">Save data</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- __________________________________________ End Modal insert achat____________________________ -->
    <!-- __________________________________________ Start Modal Update achat____________________________ -->

    <div class="modal fade" id="updateAchatModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateAchatModel">Add Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$(this).closest('.modal').modal('hide')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>ajouter un Client</h1>
                        
                            
                        <div class="form-group">
                            <label for="references_achat">reference achat</label>
                            <input type="text" class="form-control" id="references_achat" name="references_achat" placeholder="reference achat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid reference achat.
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <label for="quantite_acheter">quantite acheter</label>
                            <input type="text" class="form-control" id="quantite_acheter" name="quantite_acheter" placeholder="quantite acheter" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid quantite acheter.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prix_achat">prix d'achat</label>
                            <input type="text" class="form-control" id="prix_achat" name="prix_achat" placeholder="prix d'achat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid prix d'achat.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date_achat">date d'achat</label>
                            <input type="date" class="form-control" id="date_achat" name="date_achat" placeholder="date d'achat" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please provide a valid date d'achat.
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$(this).closest('.modal').modal('hide')">Close</button>
                            <button type="submit" name="updatetAchat" class="btn btn-primary">Save data</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
        <!-- __________________________________________ End Modal update achat____________________________ -->

    <?php
    require_once('includes/footer.php');

    ?>
   <script>
    //to show modal 
    document.querySelectorAll('.updateAchatModel').forEach(btn => {
        btn.addEventListener('click', e => {
            let item = e.target.closest('.item');
            const modal = document.querySelector('#updateAchatModel');
            console.log(item);
            console.log(modal);
            $("#updateAchatModel").modal('show')
        });
        //to update data 
        document.querySelectorAll('.updateAchatModel').forEach(btn => {

            btn.addEventListener('click', e => {
                let item = e.target.closest('.item');
                const modal = document.querySelector('#updateAchatModel');
                console.log(item);
                console.log(modal);
                modal.querySelectorAll('input').forEach(input => {
                    input.value = item.getElementsByClassName(input.name)[0].innerText;
                })
                $("#updateAchatModel").modal('show')

            });

        })



    })
</script>
