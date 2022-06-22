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

if(isset($_POST['updateUser'])){
    $updateUser = new User_Controller();
   $updateUser->update_user();
    echo 'we are here '; 
   print_r($_POST);
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
                                    <tr class="item">
                                        <td class="id_user"><?php echo $user['id_user']; ?></td>
                                        <td class="name_user"><?php echo $user['name_user']; ?></td>
                                        <td class="role_user"><?php echo $user['role_user']; ?></td>
                                        <td class="email_user"><?php echo $user['email_user']; ?></td>
                                        <td>

                                            <a href="#" class="btn btn-sm btn-warning modalUpdateUser">
                                                <i class="fa fa-edit"></i>Edit
                                        </td>
                                        <td>

                                            <a class="btn btn-sm btn-danger confirm" href="<?= BASE_URL ?>utilisateur?updateUser=1&id_user=<?= $user['id_user']?>">
                                                <i class="fa fa-edit"></i>
                                                Delete
                                            </a>

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
    <!-- _______________________________________________start update user___________________________ -->
    <div class="modal fade" id="modalUpdateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUpdateUser">Add user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="$(this).closest('.modal').modal('hide')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="needs-validation" novalidate>
                    <div class="modal-body">
                        <h1>Modifie un utilisateur</h1>
                        <div class="form-group">
                            <input type="hidden" name="id_user" value="<?=$user['id_user']?>">
                        </div>
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

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$(this).closest('.modal').modal('hide')">Close</button>
                            <button type="submit" name="updateUser" class="btn btn-primary">Save data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ___________________________________________End update user___________________________ -->

    <?php require_once('includes/footer.php'); ?>
    <script>
        //to show modal 
        document.querySelectorAll('.modalUpdateUser').forEach(btn => {

            btn.addEventListener('click', e => {
                let item = e.target.closest('.item');
                const modal = document.querySelector('#modalUpdateUser');
                console.log(item);
                console.log(modal);
                $("#modalUpdateUser").modal('show')
            });
            //to update data 
            document.querySelectorAll('.modalUpdateUser').forEach(btn => {

                btn.addEventListener('click', e => {
                    let item = e.target.closest('.item');
                    const modal = document.querySelector('#modalUpdateUser');
                    console.log(item);
                    console.log(modal);
                    modal.querySelectorAll('input').forEach(input => {
                        input.value = item.getElementsByClassName(input.name)[0].innerText;
                    })
                    $("#modalUpdateUser").modal('show')

                });

            })



        })
    </script>