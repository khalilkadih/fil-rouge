<?php

use Controllers\Config_Controller;
use Controllers\Categorie_Controller;

$company = new Config_Controller();
$data = $company->get_Company_info();

$categorie = new Categorie_Controller;
$listeOfCategorie = $categorie->Get_All_Categorie();
$categorie->InsertCategorie();
if(isset($_GET['deleteCategorie'])){
  $categorie->DeleteCategorie();
}




require_once('includes/header.php'); ?>

<main>
  <div class="d-flex" id="dashboard">
    <?php require_once('includes/navigation.php'); ?>

    <div class="container-fluid px-4">
      <div class="container-fluid px-4">
        <div class="row ">
          <div class=" d-flex justify-content-between my-1">
            <h1 class="fs-4 ">Configuration</h1>

          </div>
          <div class=" table-responsive-sm table-responsive-md">
            <div class="container-fluid px-4">
              <div class="row ">
                <div class=" d-flex justify-content-between my-1 ">
                  <h1 class="fs-4">Profile d'utilisateur connecte </h1>

                </div>
                <div class="row">
                  <div class="col-lg-4 card bg-light shadow p-4 mx-5 my-1">

                    <div class="sidebar ">


                      <div class="text-center">
                        <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="w-40">
                      </div><!-- End sidebar categories-->

                      <h3 class="text-center my-2"><span class="text-primary">FullName</span> :<?= $_SESSION['name'] ?></h3>
                      <h3 class="text-center my-2 "> <span class="text-primary">Role</span>:<?= $_SESSION['role'] ?></h3>
                      <h3 class="text-center my-2"> <span class="text-primary">Mission</span>:<?= $_SESSION['poste'] ?></h3>
                      <h3 class="text-center my-2"><span class="text-primary">Email</span>:<?= $_SESSION['email'] ?></h3>

                      <div class="col-md-12 text-center">
                        <!-- <button type="submit" class="btn my-2 w-50" style="background:purple ; color: #012970; ">Modifier
                        </button> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 card bg-light shadow p-2">
                    <article class="entry ">
                      <h2 class="entry-title text-center mb-4" style=" color: #012970; ">
                        Data Of Company
                      </h2>
                      <div class="sidebar  ">


                        <div class="text-center">
                          <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="w-40">
                        </div><!-- End sidebar categories-->

                        <h3 class="text-center my-2"><span class="text-primary">FullName</span> :<?= $data[0]['nom_etreprise'] ?></h3>
                        <h3 class="text-center my-2 "> <span class="text-primary">Role</span>:<?= $data[0]['Telephone_Entpse'] ?></h3>
                        <h3 class="text-center my-2"> <span class="text-primary">Email</span>:<?= $data[0]['email_Etpse'] ?></h3>
                        <h3 class="text-center my-2"><span class="text-primary">Adress</span>:<?= $data[0]['Adress'] ?></h3>

                      </div>

                    </article>
                  </div>
                </div>

                <form method="POST">
                  <div class=" d-flex justify-content-between my-1 card  p-2">
                    <h1 class="fs-4 ">Liste des categorie </h1>
                    <div class="col-md-6">
                      <input type="text" class="form-control" name="name_categorie" placeholder="name of categorie" required>
                    </div>
                    <div class="col-md-6 mt-3">
                      <input type="text" class="form-control" name="description_categorie" placeholder="desc of categorie" required>
                    </div>

                    <button type="submit" name="categorie_submit" class="btn   mt-4 w-25" style="background:purple ; color: #012970; ">Ajouter Categorie
                    </button>
                </form>

              </div>
              <table class="table table-striped mt-6">
                <thead>
                  <tr>
                    <th scope="col">id categorie</th>
                    <th scope="col">Name categorie</th>
                    <th scope="col">Description of categorie</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listeOfCategorie as $ls) {

                  ?>
                    <tr>
                      <th scope="row"><?= $ls['id_categorie'] ?></th>
                      <td><?= $ls['name_categorie'] ?></td>
                      <td><?= $ls['description_categorie'] ?></td>
                      <td>
                        <a class="btn btn-sm btn-danger confirm" href="<?= BASE_URL ?>Configuration?deleteCategorie=1&id_categorie=<?= $ls['id_categorie'] ?>">
                          <i class="fa fa-edit"></i>
                          Delete
                        </a>
                      </td>
                    </tr>
                </tbody>
              <?php } ?>
              </table>
              <div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</main>

<!-- crete card for show all user -->

<?php require_once('includes/footer.php'); ?>

</body </html>