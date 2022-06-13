<?php

use controllers\User_Controller;

require_once('includes/header.php'); ?>

<?php

$users = new  User_Controller();
$users = $users->Get_All_Users();
print_r($users); ?>
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
                            <i class="fas fa-sort mx-3  "></i>
                                 <button type="button"  class="btn btn-primary" data-toggle="modal" data-target="#modalInsertUser">
                                    Ajouter un utilisateur
                                </button>
                        </div>
                    </div>
                    <div class=" table-responsive-sm table-responsive-md">
                        <table class="table bg-white rounded shadow-sm align-middle overflow-scroll  table-hover">
                            <thead>
                                <tr>
                                    <th> id</th>
                                    <th>full name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php foreach ($users as $user) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $user['id_user']; ?></td>
                                        <td><?php echo $user['name_user']; ?></td>
                                        <td><?php echo $user['role_user']; ?></td>
                                        <td><?php echo $user['email_user']; ?></td>
                                        <td> <i class="fas fa-pen mx-4 "></i></td>
                                        <td> <i class="fas fa-trash  "></i></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h1>ajouter un utilisateur</h1>
            <form action="<?= BASE_URL_WITH_VIEWS ?>/utilisateur.php" method="post">
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role">
                        <option>admin</option>
                        <option>user</option>
                    </select>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> <!--End  modals-->
<?php require_once('includes/footer.php'); ?>