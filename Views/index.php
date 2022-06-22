<?php

session_start();
if(isset($_SESSION['email'])){
    header('location: home');
    exit;
}
use Controllers\User_Controller;

if (isset($_POST['LoginUser'])) {
    //   echo 'hello';
    $login = new User_Controller();
    $login->Login();
}


?>


    <?php require_once('includes/header.php'); ?>

    <section class="vh-100 gradient-custom" style="background: #6a11cb;
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">


                            <div class="mb-md-5 mt-md-4 pb-5">

                                <form method="POST" class="needs-validation" novalidate>
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="email" for="">Email</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" required>

                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid Email Valide.
                                        </div>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required>
                                        <label class="form-label" for="password">Password</label>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid Password.
                                        </div>
                                    </div>
                                    

                                    <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-100" href="#">Forgot password?</a></p> -->
                                    <button type="submit" class="btn btn-primary w-100" name="LoginUser"> Login</button>
                                </form>
                                <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div> -->

                            </div>


                            <div>
                                <!-- <p class="mb-0">Don't have an account? <a href="#" class="text-white-50 fw-bold">Sign Up</a> -->
                                <!-- </p> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php require_once('includes/footer.php'); ?>
