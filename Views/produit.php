<?php

use Controllers\Categorie_Controller;
use controllers\Product_Controller;

if(isset($_POST['search'])){

    $find_product = new Product_Controller();
    $find=$find_product->find_product();
}else{


$product = new Product_Controller();
$results = $product->Get_All_Product();
$product->InserProduct();
$product->DeleteProduct();
//get all categorie
$categorie = new Categorie_Controller();
$categories = $categorie->Get_All_Categorie();
}
?>
<?php require_once("includes/header.php"); ?>
<main>
    <div class="d-flex" id="dashboard">
        <?php require_once('includes/navigation.php'); ?>

        <div id="page-content-dashboard" class="bt">
            <nav class="navbar navbar-expand-lg   py-1 px-4 cont ">
                <div class="d-flex align-items-center">

                    <i class="fa fa-bars me-3 " id="menu-toggle"></i>
                    <h5>Accueil</h5>
                </div>


                <div class="navbar-nav ms-auto d-flex">
                    <div class="nav-item ">

                        <form  metod="POST" class="d-flex  justify-content-end mt-3 ">
                            <input class="form-control me-2 "  name="search" type="search" placeholder="Search..." aria-label="Search">
                            <button class="btn btn-info btn-sm" name="search" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>



                    </div>
                    <div>
                        <a href="<?= BASE_URL_WITH_VIEWS ?>/utilisateur" class="mx-3 "> <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="mx-3 w-75"></a>

                    </div>
                </div>

            </nav>
            <div class="container-fluid px-4">
                <div class="container-fluid px-4">
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Liste Produit</h1>
                            <div>
                                <!-- <i class="fas fa-sort mx-3  "></i> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertProduct">
                                    Ajouter un Produit
                                </button>

                            </div>
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
                                        <th class="text-center"> Edit</th>
                                        <th class="text-center"> Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $result) { ?>
                                        <tr>
                                            <td><?php echo $result['id_product'] ?></td>
                                            <td><?php echo $result['name_product'] ?></td>
                                            <td><?= $result['qte_aviable'] ?></td>
                                            <td><?= $result['prix_achat'] ?></td>
                                            <td><?= $result['prix_vente'] ?></td>
                                            <td><?= $result['name_categorie'] ?></td>
                                            <td class="text-center">
                                                <form method="POST">
                                                    <input type="hidden" name="id" value="<?php echo ($result['id_product']) ?>">
                                                    <button class="btn btn-sm btn-warning ">
                                                        <i class="fa fa-edit"></i>Edit
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form method="POST" class="mx-2 confirm">

                                                    <input type="hidden" name="id_product" value="<?php echo ($result['id_product']) ?>">
                                                    <button type="submit" name="deleteProduct" class="btn btn-sm btn-danger confirm ">

                                                        <i class="fa fa-edit"></i>
                                                        Delete
                                                    </button>
                                                </form>
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
    <!-- --------------------------------------------Start Modal-------------------------------------------------- -->

    <div class="modal fade" id="modalInsertProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInsertProduct">Add Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>ajouter un produit</h1>
                        <div class="form-group">
                            <label for="name_product">name of product</label>
                            <input type="text" class="form-control" id="name_product" name="name_product" placeholder="name of product" required>
                            <div class="invalid-feedback">
                                please enter name of product
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="qte_aviable">Quantite Stocke</label>
                            <input type="text" class="form-control" id="qte_aviable" name="qte_aviable" placeholder="Quantite Stocke" required>
                            <div class="invalid-feedback">
                                please enter Quantite Stocke
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="prix_achat">Prix d'achat</label>
                            <input type="text" class="form-control" id="prix_achat" name="prix_achat" placeholder="Prix d'achat" required>
                            <div class="invalid-feedback">
                                please enter Prix d'achat
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prix_vente">Prix de vente</label>
                            <input type="text" class="form-control" id="prix_vente" name="prix_vente" placeholder="Prix de vente" required>
                            <div class="invalid-feedback">
                                please enter Prix de vente
                            </div>
                        </div>
                        <!-- //Normalement on travail avec select ici  -->
                        <!-- <div class="form-group">
                            <label for="id_categorie">id categorie</label>
                            <input type="text" class="form-control" id="id_categorie" name="id_categorie" placeholder="Prix de vente" required>
                            <div class="invalid-feedback">
                                please enter Prix de vente
                            </div>
                        </div> -->
                        <div class="form-group">

                            <label for="categorie"> chose categorie:</label>
                            <select class="form-control" id="id_categorie" name="categorie" required>
                                <option value="">chose categorie:</option>
                                <?php foreach ($categories as $categorie) { ?>
                                    <option value="<?= $categorie['id_categorie'] ?>">
                                        <?= $categorie['name_categorie'] ?>
                                    </option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="insertProduct" class="btn btn-primary">Save data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- --------------------------------------------End Modal-------------------------------------------------- -->
</main>

<?php require_once('includes/footer.php'); ?>