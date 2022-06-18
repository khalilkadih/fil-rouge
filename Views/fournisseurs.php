<?php

use Controllers\Fournisseur_Controller;

require_once('includes/header.php');

$fournisseur = new Fournisseur_Controller();
$fournisseurs = $fournisseur->Get_All_Fournisseur();
$fournisseur->Insert_Fournisseur();


if (isset($_GET['DeleteFournisseur'])) {
    $fournisseur->Delete_Fournisseur($_GET['DeleteFournisseur']);
}
if(isset($_POST['EditFournisseurs'])){
    $fournisseur->Update_Fournisseur();
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
                        <form class="d-flex  justify-content-end mt-3 ">
                            <input class="form-control me-2 " type="search" placeholder="Search..." aria-label="Search">
                            <a href="<?= BASE_URL_WITH_VIEWS ?>/profile.php" class="mx-3 ">
                                <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="mx-3 w-75"></a>
                        </form>
                    </div>
                </div>

            </nav>
            <div class="container-fluid px-4">
                <div class="container-fluid px-4">
                    <div class="row ">
                        <div class=" d-flex justify-content-between my-3">
                            <h1 class="fs-4 ">Liste Fournisseurs</h1>
                            <div>
                                <!-- <i class="fas fa-sort mx-3  "></i> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertFournisseur">
                                    Ajouter un Un Fournisseur
                                </button>
                            </div>
                        </div>
                        <div class=" table-responsive-sm table-responsive-md">
                            <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                                <thead>
                                    <tr>
                                        <th>Id </th>
                                        <th>Nom complete</th>
                                        <th>Telephone</th>
                                        <th>Adress</th>
                                        <th>Observation </th>
                                        <!-- <th>solde non payé</th>
                                            <th>Produit Fournit</th> -->
                                        <th class=""> Edit</th>
                                        <th class=""> Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($fournisseurs as $fournisseur) : ?>

                                        <tr class="item">
                                            <td class="id_fournisseur"><?= $fournisseur['id_fournisseur'] ?></td>
                                            <td class="name_fournisseur"><?= $fournisseur['name_fournisseur'] ?></td>
                                            <td class="telephone_fournisseur"><?= $fournisseur['telephone_fournisseur'] ?></td>
                                            <td class="adress_fournisseur"><?= $fournisseur['adress_fournisseur'] ?></td>
                                            <td class="observation_fournisseur"><?= $fournisseur['observation_fournisseur'] ?></td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-warning modalUpdateFournisseur">

                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?= BASE_URL ?>fournisseurs?DeleteFournisseur=1&id_fournisseur=<?= $fournisseur['id_fournisseur'] ?>" class="btn btn-sm btn-danger modalDeleteFournisseur confirm">
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

    </div>
</main>
<!-- _________________________________________Start  insert fournisseur Modal______________________________________ -->

<div class="modal fade" id="modalInsertFournisseur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInsertFournisseur">Add Fournisseur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
                    <h1>ajouter un produit</h1>
                    <div class="form-group">
                        <label for="name_fournisseur">name of Fournisseur</label>
                        <input type="text" class="form-control" id="name_fournisseur" name="name_fournisseur" placeholder="name of Fournissuer" required>
                        <div class="invalid-feedback">
                            please enter name of Fournisseur
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telephone_fournisseur">telephone of Fournisseur</label>
                        <input type="text" class="form-control" id="telephone_fournisseur" name="telephone_fournisseur" placeholder="telephone of Fournisseur" required>
                        <div class="invalid-feedback">
                            please enter telephone of Fournisseur
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adress_fournisseur">adress of Fournisseur</label>
                        <input type="text" class="form-control" id="adress_fournisseur" name="adress_fournisseur" placeholder="adress of Fournisseur" required>
                        <div class="invalid-feedback">
                            please enter adress of Fournisseur
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observation_fournisseur">observation of Fournisseur</label>
                        <input type="text" class="form-control" id="observation_fournisseur" name="observation_fournisseur" placeholder="observation of Fournisseur" required>
                        <div class="invalid-feedback">
                            please enter observation of Fournisseur
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insertFournisseur" class="btn btn-primary">Save data</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- _________________________________________End insert Fournisseur Modal______________________________________ -->
<!-- _________________________________________start update Fournisseur Modal______________________________________ -->

<div class="modal fade" id="modalUpdateFournisseur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateFournisseur">Add Fournisseur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$(this).closest('.modal').modal('hide')">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
                    <h1>ajouter un produit</h1>
                    <div class="form-group">
                        <input type="hidden" name="id_fournisseur" value="<?= $fournisseur['id_fournisseur']?>">
                    </div>
                    <div class="form-group">
                        <label for="name_fournisseur">name of Fournisseur</label>
                        <input type="text" class="form-control" id="name_fournisseur" name="name_fournisseur" placeholder="name of Fournissuer" required>
                        <div class="invalid-feedback">
                            please enter name of Fournisseur
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telephone_fournisseur">telephone of Fournisseur</label>
                        <input type="text" class="form-control" id="telephone_fournisseur" name="telephone_fournisseur" placeholder="telephone of Fournisseur" required>
                        <div class="invalid-feedback">
                            please enter telephone of Fournisseur
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adress_fournisseur">adress of Fournisseur</label>
                        <input type="text" class="form-control" id="adress_fournisseur" name="adress_fournisseur" placeholder="adress of Fournisseur" required>
                        <div class="invalid-feedback">
                            please enter adress of Fournisseur
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observation_fournisseur">observation of Fournisseur</label>
                        <input type="text" class="form-control" id="observation_fournisseur" name="observation_fournisseur" placeholder="observation of Fournisseur" required>
                        <div class="invalid-feedback">
                            please enter observation of Fournisseur
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$(this).closest('.modal').modal('hide')">Close</button>
                    <button type="submit" name="EditFournisseurs" class="btn btn-primary">Save data</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- ________________________________________________end update Fournisseur Modal______________________________________ --> -->
<?php require_once('includes/footer.php'); ?>
<script>
    //to show modal 
    document.querySelectorAll('.modalUpdateFournisseur').forEach(btn => {
        btn.addEventListener('click', e => {
            let item = e.target.closest('.item');
            const modal = document.querySelector('#modalUpdateFournisseur');
            console.log(item);
            console.log(modal);
            $("#modalUpdateFournisseur").modal('show')
        });
        //to update data 
        document.querySelectorAll('.modalUpdateFournisseur').forEach(btn => {

            btn.addEventListener('click', e => {
                let item = e.target.closest('.item');
                const modal = document.querySelector('#modalUpdateFournisseur');
                console.log(item);
                console.log(modal);
                modal.querySelectorAll('input').forEach(input => {
                    input.value = item.getElementsByClassName(input.name)[0].innerText;
                })
                $("#modalUpdateFournisseur").modal('show')

            });

        })



    })
</script>