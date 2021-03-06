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
                    
                        </div>
                    </div>

                </nav>
                <div class="container-fluid px-4">
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Rapport des produits</h1>
                            <div>
                                <i class="fas fa-sort mx-3  "></i>
                                <a href="./ajouterEtudiant.html"> <button type="button" class="btn fw-bold  fs-6"
                                        style="background:#DD10C9 ; color: #012970;">Ajouter une achat</button></a>
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
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Rapport des Achats</h1>
                            <div>
                                <i class="fas fa-sort mx-3  "></i>
                                <a href="./ajouterEtudiant.html"> <button type="button" class="btn fw-bold  fs-6"
                                        style="background:#DD10C9 ; color: #012970;">Ajouter une achat</button></a>
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
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Rapport des Ventes</h1>
                            <div>
                                <i class="fas fa-sort mx-3  "></i>
                                <a href="./ajouterEtudiant.html"> <button type="button" class="btn fw-bold  fs-6"
                                        style="background:purple ; color: #012970;">Ajouter une achat</button></a>
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
