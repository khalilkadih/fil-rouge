<?php require_once('includes/header.php'); ?>

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
                                <input class="form-control me-2 " type="search" placeholder="Search..."
                                    aria-label="Search">
                                <a href="./profile.html" class="mx-3 "> <img src="<?=BASE_URL_WITH_VIEWS?>/img/user (1).png"
                                        class="mx-3 w-75"></a>

                            </form>
                        </div>
                    </div>

                </nav>
                <div class="container-fluid px-4">
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Liste des Utilisateurs</h1>
                            <div>
                                <i class="fas fa-sort mx-3  "></i>
                                <a href="./ajouterEtudiant.html"> <button type="button" class="btn fw-bold  fs-6"
                                        style="background:#DD10C9 ; color: #012970;">Ajouter un utilisateur</button></a>
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
                                    <tr>
                                        <td>1</td>
                                        <td>username</td>
                                        <td>user@email.com</td>
                                        <td>7305477760</td>
                                        <td>1234567305477760</td>
                                        <td>08-Dec, 2021</td>
                                        <td> <i class="fas fa-pen mx-4 "></i></td>
                                        <td> <i class="fas fa-trash  "></i></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>username</td>
                                        <td>user@email.com</td>
                                        <td>7305477760</td>
                                        <td>1234567305477760</td>
                                        <td>08-Dec, 2021</td>
                                        <td> <i class="fas fa-pen mx-4 "></i></td>
                                        <td> <i class="fas fa-trash  "></i></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>username</td>
                                        <td>user@email.com</td>
                                        <td>7305477760</td>
                                        <td>1234567305477760</td>
                                        <td>08-Dec, 2021</td>
                                        <td> <i class="fas fa-pen mx-4 "></i></td>
                                        <td> <i class="fas fa-trash  "></i></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once('includes/footer.php'); ?>
