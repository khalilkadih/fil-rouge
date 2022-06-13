<?php

use Controllers\Client_Controller;

 require_once('includes/header.php'); 
$client=new Client_Controller();
$clients=$client->Get_All_Client();
// print_r($clients);

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
                                <input class="form-control me-2 " type="search" placeholder="Search..."
                                    aria-label="Search">
                                <a href="<?=BASE_URL_WITH_VIEWS?>/profile.php" class="mx-3 ">
                                    <img src="<?=BASE_URL_WITH_VIEWS?>/img/user (1).png"
                                        class="mx-3 w-75"></a>

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
                                <table
                                    class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id </th>
                                            <th>Nom complete</th>
                                            <th>Telephone</th>
                                            <th>Adress</th>
                                            <th>Observation </th>
                                            <th class="text-center"> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($clients as $client):?>
                                        <tr>
                                            <td><?=$client['id_client']?></td>
                                            <td><?=$client['name_client']?> 
                                            <td><?=$client['telephone_client']?></td>
                                            <td><?=$client['adress_client']?></td>
                                            <td><?=$client['observation_client']?></td>

                                          
                                            <td class="text-center">
                                                <a href="<?=BASE_URL_WITH_VIEWS?>/profile.php"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="<?=BASE_URL_WITH_VIEWS?>/profile.php"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?=BASE_URL_WITH_VIEWS?>/profile.php"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once('includes/footer.php'); ?>
