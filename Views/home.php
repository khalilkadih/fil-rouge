
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
                    <div class="navbar-nav ms-auto">
                        <div class="nav-item ">
                            <form class="d-flex  justify-content-end mt-3 ">
                                <input class="form-control me-2 " type="search" placeholder="Search..." aria-label="Search">
                                <a href="./profile.php" class="mx-3 "> <img src="<?=BASE_URL_WITH_VIEWS?>/img/user (1).png" class="mx-3 w-75"></a>
                            </form>
                        </div>
                    </div>
                </nav>
                <div class="container-fluid px-4">
                    <div class="row my-2 d-flex justify-content-center">
                        <div class="col-lg-3 col-md-5 mb-4  ">
                            <div class="p-3 d-flex justify-content-around align-items-center card_student bg-secondary ">
                                <div >
                                    <p class="fs-5 mb-5 Secondary-text text-white">
                                       <img src="<?= BASE_URL_WITH_VIEWS ?>/img/supplier.png"style="width: 50px;height: 50px;">
                                      Fournisseur
                                    </p>
                                </div>
                                <h1 class="fs-5 mt-5">243</h1>
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-5  mb-4 ">
                            <div class="p-3  d-flex justify-content-around align-items-center card_cours ">
                                <div>
                                    <img src="<?=BASE_URL_WITH_VIEWS?>/img/bookingCart.png">
                                    <p class="fs-5 mb-5 Secondary-text">Cas du stock </p>
                                </div>
                                <h1 class="fs-5 mt-5 text-white">13</h1>
                            </div>
                        </div>
                        <div class=" col-lg-3  col-md-5  mb-4 ">
                            <div class="p-3   d-flex justify-content-around align-items-center card_payment bg-secondary ">
                                <div>
                                    <img src="<?= BASE_URL_WITH_VIEWS ?>/img/bookingCart.png">

                                    <p class="fs-5 mb-5 Secondary-text text-white">vente d'aujourd'hui</p>
                                </div>
                                <h1 class="fs-5 mt-5">556</h1>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5  mb-4">
                            <div class="p-3   d-flex justify-content-around align-items-center card_user ">
                                <div>
                                    <i class="far fa-user fs-5  p-1"></i>

                                    <p class="fs-5 mb-5 text-white">Utilisateurs</p>
                                </div>
                                <h1 class="fs-5 mt-5 text-white">3</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid px-4">
                        <div class="row ">
                            <div class="d-flex mt-4 justify-content-around ">
                                <canvas id="myChart" style="width:100%;max-width:500px"></canvas>
                                <canvas id="chart2" style="width:100%;max-width:500px"></canvas>
                            </div>
                            <div class="mt-5">

                                <canvas id="Chart" style="width:100%;max-width:600px"></canvas>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
<?php include_once('includes/footer.php'); ?>
        