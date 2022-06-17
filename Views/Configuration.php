<?php require_once('includes/header.php'); ?>

<main>
  <div class="d-flex" id="dashboard">
    <?php require_once('includes/navigation.php'); ?>

    <div class="container-fluid px-4">
      <div class="container-fluid px-4">
        <div class="row ">
          <div class=" d-flex justify-content-between my-3">
            <h1 class="fs-4 ">Configuration</h1>

          </div>
          <div class=" table-responsive-sm table-responsive-md">
            <div class="container-fluid px-4">
              <div class="row ">
                <div class=" d-flex justify-content-between my-3 ">
                  <h1 class="fs-4 ">Profile d'utilisateur </h1>

                </div>
                <div class="row ">
                  <div class="col-lg-4 card bg-light shadow p-4 mx-5 my-2">

                    <div class="sidebar  ">


                      <div class="text-center">
                        <img src="<?= BASE_URL_WITH_VIEWS ?>/img/user (1).png" class="w-50">
                      </div><!-- End sidebar categories-->

                      <h3 class="text-center my-2">El kadih khalil</h3>
                      <h5 class="text-center my-2">admin</h5>
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn my-2 w-50" style="background:#DD10C9 ; color: #012970; ">Modifier
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-7 card bg-light shadow p-4 ">
                    <article class="entry ">
                      <h2 class="entry-title text-center mb-4" style=" color: #012970; ">
                        Modifier le profile
                      </h2>
                      <div class="entry-content">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                          <div class="row gy-4">
                            <div class="col-md-6">
                              <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                            </div>
                            <div class="col-md-6 ">
                              <input type="email" class="form-control" name="email" placeholder="Votre e-mail" required>
                            </div>
                            <div class="col-md-12">
                              <input type="text" class="form-control" name="Téléphoner" placeholder="Téléphoner" required>
                            </div>
                            <div class="col-md-12">
                              <textarea class="form-control" name="message" rows="6" placeholder="Votre message" required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                              <button type="submit" class="btn  w-25" style="background:#DD10C9 ; color: #012970; ">Modifier
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </article><!-- End blog entry -->
                  </div><!-- End blog entries list -->
                </div>
                <div class=" d-flex justify-content-between my-3 card mt-5 p-5">
                  <h1 class="fs-4 ">Liste d'utilisateur </h1>

                </div>
                <table class="table table-striped mt-6">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                  </tbody>
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