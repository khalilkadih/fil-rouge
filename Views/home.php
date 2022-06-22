    <?php


    use Controllers\Fournisseur_Controller;
    use Controllers\Product_Controller;
    use Controllers\Vente_Controller;
    use Controllers\Client_Controller;

    $countFrns = new Fournisseur_Controller();
    $countFournsseur = $countFrns->Get_Count_Fournisseur();
    //__________________________________________//
    $produit = new Product_Controller();
    $countProduct = $produit->Get_Count_Product();
    $results = $produit->Get_All_Product();
    //__________________________________///
    $countVente = new Vente_Controller();
    $countVente = $countVente->Get_Count_Vente();

    //________________________________________//
    $countClient = new Client_Controller();
    $countClient = $countClient->Get_Count_Client();
    // $CountClients=$countClient->Get_Count_Client();



    ?>

    <?php require_once('includes/header.php'); ?>
    <main>
        <div class="d-flex" id="dashboard">
            <?php include_once('includes/navigation.php'); ?>
            <div id="page-content-dashboard" class="bt">
                <nav class="navbar navbar-expand-lg   py-1 px-4 cont ">
                    <div class="d-flex align-items-center">
                        <i class="fa fa-bars me-3 " id="menu-toggle"></i>
                        <h5>Accueil</h5>
                    </div>
                </nav>
                <div class="container-fluid px-4">
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-5 mb-4  ">
                            <div class="p-3 d-flex justify-content-around align-items-center card_student bg-secondary ">
                                <div>
                                    <p class="fs-5 mb-5 Secondary-text text-white">
                                        <img src="<?= BASE_URL_WITH_VIEWS ?>/img/supplier.png" style="width: 50px;height: 50px;">
                                        Fournisseur
                                    </p>
                                </div>
                                <h1 class="fs-5 mt-5"><?= $countFournsseur ?></h1>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-5  mb-4 ">
                            <div class="p-3  d-flex justify-content-around align-items-center card_cours ">
                                <div>
                                    <img src="<?= BASE_URL_WITH_VIEWS ?>/img/bookingCart.png">
                                    <p class="fs-5 mb-5 Secondary-text">Cas du stock </p>
                                </div>
                                <h1 class="fs-5 mt-5 text-white"><?= $countProduct ?></h1>
                            </div>
                        </div>
                        <div class=" col-lg-3  col-md-5  mb-4 ">
                            <div class="p-3   d-flex justify-content-around align-items-center card_payment bg-secondary ">
                                <div>
                                    <img src="<?= BASE_URL_WITH_VIEWS ?>/img/bookingCart.png">

                                    <p class="fs-5 mb-5 Secondary-text text-white">vente d'aujourd'hui</p>
                                </div>
                                <h1 class="fs-5 mt-5"><?php echo $countVente ?></h1>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5  mb-4">
                            <div class="p-3   d-flex justify-content-around align-items-center card_user ">
                                <div>
                                    <i class="far fa-user fs-5  p-1"></i>

                                    <p class="fs-5 mb-5 text-white">Clients</p>
                                </div>
                                <h1 class="fs-5 mt-5 text-white"><?= $countClient ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-4">
                        <div class="row ">
                            <div class="d-flex mt-4 justify-content-around ">

                                <!-- <canvas id="myChart" style="width:100%;max-width:500px"></canvas> 
                                <canvas width="5px" height="5px" style="background-color:purple;"></canvas> -->
                                <div class="mt-5">
                                    <hr>
                                    <h1 class=" mt-4 text-center  text-info">Situation of product in stock</h1>
                                    <div class="container py-2">
                                        <div class="row py-2">
                                            <div class="col-lg-50 mx-auto">
                                                <div class="card rounded shadow border-0">
                                                    <div class="card-body p-5 bg-white rounded">
                                                        <div class="table-responsive">
                                                            <table id="example" style="width:750px" class="table table-striped table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name of product</th>
                                                                        <th>Quantite disponible</th>
                                                                        <th>status</th>

                                                                    </tr>
                                                                </thead>
                                                                <?php foreach ($results as $result) { ?>
                                                                <tbody>
                                                                    <tr>
                                                                        
                                                                        <td><?= $result['name_product'] ?></td>
                                                                        <td><?= $result['qte_aviable'] ?></td>
                                                                        <td>
                                                                            <?php 
                                                                             if($result['qte_aviable']>100){
                                                                                echo'<span class="badge badge-success" style="background-color:green;">Aviable </span>';
                                                                                }else
                                                                                {
                                                                                    echo'<span class="badge badge-success " style="background-color:red;"> check stock </span>';
                                                                                    } 
                                                                                    ?>
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
                                    </div>


                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>

            <?php include_once('includes/footer.php'); ?>