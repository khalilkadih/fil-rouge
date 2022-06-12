<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <title>Gestion du stock </title>
</head>
<body><main>
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
                            <a href="./profile.php" class="mx-3 "> <img src="./img/user (1).png" class="mx-3 w-75"></a>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="container-fluid px-4">
                <div class="row my-2 d-flex justify-content-center">
                    <div class="col-lg-3 col-md-5 mb-4 ">
                        <div class="p-3 d-flex justify-content-around align-items-center card_student ">
                            <div>
                                <i class="fas fa-graduation-cap fs-5  p-1"></i>

                                <p class="fs-5 mb-5 Secondary-text">Fournisseur</p>
                            </div>
                            <h1 class="fs-5 mt-5">243</h1>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-5  mb-4 ">
                        <div class="p-3  d-flex justify-content-around align-items-center card_cours ">
                            <div>
                                <img src="./img/approval.png">
                                <p class="fs-5 mb-5 Secondary-text">Cas du stock </p>
                            </div>
                            <h1 class="fs-5 mt-5 text-white">13</h1>
                        </div>
                    </div>
                    <div class=" col-lg-3  col-md-5  mb-4">
                        <div class="p-3   d-flex justify-content-around align-items-center card_payment ">
                            <div>
                                <img src="./img/bookingCart.png">

                                <p class="fs-5 mb-5 Secondary-text">vente d'aujourd'hui</p>
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
                        <div class="d-flex">
                            <canvas id="myChart" style="width:100%;max-width:500px"></canvas>
                            <canvas id="chart2" style="width:100%;max-width:500px"></canvas>
                        </div>
                        <div class="d-flex">
                            <canvas id="Chart3" style="width:100%;max-width:500px"></canvas>
                            <canvas id="chart4" style="width:100%;max-width:500px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

            <script>
                var el = document.getElementById("dashboard");
                var toggleButton = document.getElementById("menu-toggle");
                toggleButton.onclick = function() {
                    el.classList.toggle("toggled");
                };
                //start coding chart
                var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = ["red", "green", "blue", "orange", "brown"];

                new Chart("myChart", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "World Wine Production 2018"
                        }
                    }
                });
                //end coding chart
                //start coding chart2
                var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = ["red", "green", "blue", "orange", "brown"];

                new Chart("chart2", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "World Wine Production 2018"
                        }
                    }
                });
                //End coding chart2
                //start coding chart3
                var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = ["red", "green", "blue", "orange", "brown"];

                new Chart("chart3", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "World Wine Production 2018"
                        }
                    }
                });
                //End coding chart2
                //start coding chart4
                var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
                var yValues = [55, 49, 44, 24, 15];
                var barColors = ["red", "green", "blue", "orange", "brown"];

                new Chart("chart4", {
                    type: "bar",
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        legend: {
                            display: false
                        },
                        title: {
                            display: true,
                            text: "World Wine Production 2018"
                        }
                    }
                });
                //End coding chart2
            </script>
    </main>
</body>
</html>