<?php


require_once('includes/header.php');

//get all user from db 
use controllers\User_Controller;

$Allusers = new  User_Controller();
$users = $Allusers->Get_All_Users();
// print_r($users);


//insert user to db 
$Insertuser = new User_Controller();
$Insertuser->InserUser();
$Insertuser->DeleteUser();
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
                            <a href="./profile.html" class="mx-3 "> <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="mx-3 w-75"></a>

                        </form>
                    </div>
                </div>
            </nav>
            <div class="container-fluid px-4">
                <div class="row ">
                    <div class=" d-flex justify-content-between my-3">
                        <h1 class="fs-4 ">Liste des Utilisateurs</h1>
                        <div>
                            <!-- <i class="fas fa-sort mx-3  "></i> -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalInsertUser">
                                Ajouter un utilisateur
                            </button>
                        </div>
                        <!-- <a href="InsertUser" class="btn btn-primary">ajouter user</a> -->
                    </div>
                    <div class=" table-responsive-sm table-responsive-md">
                        <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                            <thead>
                                <tr>
                                    <th> id</th>
                                    <th>full name</th>
                                    <th>Poste</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <?php foreach ($users as $user) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $user['id_user']; ?></td>
                                        <td><?php echo $user['name_user']; ?></td>
                                        <td><?php echo $user['role_user']; ?></td>
                                        <td><?php echo $user['email_user']; ?></td>
                                        <td>
                                            <form action="" method="POST">

                                                <input type="hidden" name="id_user" value="<?php echo ($user['id_user']) ?>">
                                                <button class="btn btn-sm btn-warning ">
                                                    <i class="fa fa-edit"></i>Edit
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form method="POST" class="mx-2 confirm">

                                                <input type="hidden" name="id_user" value="<?php echo ($user['id_user']) ?>">
                                                <button type="submit" name="deleteUser" class="btn btn-sm btn-danger confirm ">

                                                    <i class="fa fa-edit"></i>
                                                    Delete
                                                </button>
                                            </form>


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
    <!--start modals-->
    <!-- Modal -->
    <div class="modal fade" id="modalInsertUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInsertUser">Add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>ajouter un utilisateur</h1>
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="name_user" placeholder="Nom" required>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email_user">Email</label>
                            <input type="email" class="form-control" id="email_user" name="email_user" placeholder="Email" required>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role_user">Poste</label>
                            <input type="text" class="form-control" id="role_user" name="role_user" placeholder="Entrer le poste" required>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_user">Password</label>
                            <input type="password" class="form-control" id="password_user" name="password_user" placeholder="Password" required>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="InsertData" class="btn btn-primary">Save data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--End  modals-->
    <?php require_once('includes/footer.php'); ?>


   
