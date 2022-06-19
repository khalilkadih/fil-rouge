<?php

use Controllers\Client_Controller;

require_once('includes/header.php');
$client = new Client_Controller();
$clients = $client->Get_All_Client();
$client->Insert_Client();

if (isset($_GET['deleteClient'])) {
    echo 'cleint deleted' . $_GET['deleteClient'];
    $client->Delete_Client();
}
if (isset($_POST['updateClient'])) {
    $client->UpdateClient();
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
                            <h1 class="fs-4 ">Liste Client</h1>
                            <div>
                                <!-- <i class="fas fa-sort mx-3  "></i> -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertClient">
                                    Ajouter un Client
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
                                        <th class=""> Edit</th>
                                        <th class=""> Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($clients as $client) : ?>
                                        <tr class="item">
                                            <td class="id_client"><?= $client['id_client'] ?></td>
                                            <td class="name_client"><?= $client['name_client'] ?>
                                            <td class="telephone_client"><?= $client['telephone_client'] ?></td>
                                            <td class="adress_client"><?= $client['adress_client'] ?></td>
                                            <td class="observation_client"><?= $client['observation_client'] ?></td>
                                            <td class="text-center">

                                                <a href="#" class="btn btn-sm btn-warning modalUpdateClient ">
                                                    <i class="fa fa-edit"></i>
                                                    Edit
                                            </td>
                                            <td>

                                                <a class="btn btn-sm btn-danger confirm" href="<?= BASE_URL ?>Clients?deleteClient=1&id_client=<?= $client['id_client'] ?>">
                                                    <i class="fa fa-edit"></i>
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
<!-- ___________________________start modal insert Client____________________________________________ -->

<div class="modal fade" id="modalInsertClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalInsertClient">Add Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
                    <h1>ajouter un Client</h1>
                    <div class="form-group">
                        <label for="name_client">Nom complet</label>
                        <input type="text" class="form-control" id="name_client" name="name_client" placeholder="Nom complet" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un nom complet
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="telephone_client">Telephone</label>
                        <input type="text" class="form-control" id="telephone_client" name="telephone_client" placeholder="Telephone" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un telephone
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adress_client">Adress</label>
                        <input type="text" class="form-control" id="adress_client" name="adress_client" placeholder="Adress" required>
                        <div class="invalid-feedback">
                            Veuillez entrer une adress
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observation_client">observation client:(optionnel)</label>
                        <textarea class="form-control" name="observation_client" id="observation_client" rows="3"></textarea>
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="insertClient" class="btn btn-primary">Save data</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- ___________________________End modal insert Client____________________________________________ -->
<!-- _______________________________________Start Model update Clients______________________________________ -->

<div class="modal fade" id="modalUpdateClient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalUpdateClient">Update Client</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$(this).closest('.modal').modal('hide')">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="needs-validation" novalidate>
                <div class="modal-body">
                    <h1>Editer un Client</h1>
                    <div class="form-group">
                        <input type="hidden" name="id_client" value="<?= $client['id_client'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="name_client">Nom complet</label>
                        <input type="text" class="form-control" id="name_client" name="name_client" placeholder="Nom complet" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un nom complet
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="telephone_client">Telephone</label>
                        <input type="text" class="form-control" id="telephone_client" name="telephone_client" placeholder="Telephone" required>
                        <div class="invalid-feedback">
                            Veuillez entrer un telephone
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="adress_client">Adress</label>
                        <input type="text" class="form-control" id="adress_client" name="adress_client" placeholder="Adress" required>
                        <div class="invalid-feedback">
                            Veuillez entrer une adress
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observation_client">observation client:(optionnel)</label>
                        <textarea class="form-control" name="observation_client" id="observation_client" rows="3"></textarea>
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$(this).closest('.modal').modal('hide')">Close</button>
                    <button type="submit" name="updateClient" class="btn btn-primary">Save data</button>
                </div>
            </form>
        </div>

    </div>
</div>



<!-- ____________________________________________End Model update Clients______________________________________ --> -->

<?php require_once('includes/footer.php'); ?>
<script>
    document.querySelectorAll('.modalUpdateClient').forEach(btn => {
        btn.addEventListener('click', e => {
            let item = e.target.closest('.item');
            const modal = document.querySelector('#modalUpdateClient');
            console.log(item);
            console.log(modal);
            $("#modalUpdateClient").modal('show')
        });
        //to update data 
        document.querySelectorAll('.modalUpdateClient').forEach(btn => {

            btn.addEventListener('click', e => {
                let item = e.target.closest('.item');
                const modal = document.querySelector('#modalUpdateClient');
                console.log(item);
                console.log(modal);
                modal.querySelectorAll('input').forEach(input => {
                    input.value = item.getElementsByClassName(input.name)[0].innerText;
                })
                $("#modalUpdateClient").modal('show')

            });

        })



    })
</script>