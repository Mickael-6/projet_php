<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
require_once("backoffice/lib/connexion.php");
require_once('backoffice/lib/select_user_by_id.php');


?>

S






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>G4M3SHOP</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41a8ece914.js" crossorigin="anonymous"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>



<body class="body">
    <!-- Navigation-->
    <nav class="bgcopy navbar navbar-expand-lg ">
        <div class="container px-4 px-lg-5">
            <a class=" titreprincipal navbar-brand" href="#!">G4M3SHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </ul>

                <?php if (empty($_SESSION)) {  ?>
                    <form class="d-flex" style="    margin-right: 10px;">
                        <a class=" titre btn btn-outline-dark" href="backoffice/login.php">
                            <i class="  bi-box-arrow-in-right me-1"></i>
                            connexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                        <form class="d-flex">
                            <a class=" inscription titre btn btn-outline-dark" href="backoffice/register.php">
                                <i class="  bi-file-earmark-diff me-1"></i>
                                inscription
                                <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                            </a>
                        </form>
                    </form>

                <?php } else { ?>
                    <div>
                        <span class=" bienvenue titre ">
                            <?php echo "Bienvenue" . " " . $resultat_user_by_id['firstname'] . " " . $resultat_user_by_id['lastname'] ?>
                        </span>
                        <i class=" iconeprofil titre fa-regular fa-user fa-xl"></i> <i class=" burger titre fa-solid fa-bars fa-2xl "></i>
                        <div class="bgburger ">
                            <a class="titre btn btn-outline-dark" href="backoffice/lib/deconnexion.php">Logout</a>

                        </div>
                    </div>

                <?php } ?>
            </div>

        </div>

    </nav>

    <!-- Header-->
    <header class="header">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="h1" class="display-4 fw-bolder">G4M3SHOP</h1>
                <p class=" titre lead fw-normal  mb-0"> PC Games, Software, Keys.</p>
            </div>
        </div>
    </header>

    <?php
    $sqlproduit = "SELECT * FROM produit ";
    $produit_table = mysqli_query($connexion, $sqlproduit);
    $produit_resultat = mysqli_fetch_all($produit_table, MYSQLI_ASSOC);

    // echo "<pre>";
    // print_r($produit_resultat);
    // echo "</pre>";



    ?>






    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php foreach ($produit_resultat as $key) {  ?>
                    <div class=" col mb-5">
                        <div class=" titre bgcard card h-100">
                            <!-- Sale badge-->
                            <?php if ($key['reduction'] != "") { ?>

                                <div class=" titre badge bg-dark  position-absolute" style="top: 0.5rem; right: 0.5rem ;"><?php echo $key['reduction']; ?>%</div>


                            <?php } ?>



                            <!-- Product image-->
                            <img class="card-img-top" src="assets/img/<?php echo $key['image']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class=" titre fw-bolder"><?php echo $key['titre']; ?></h5>
                                    <!-- Product reviews-->
                                    <div class=" d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <?php if ($key['reduction']) {

                                        echo '<span class="  price  text-decoration-line-through">' . $key['Price'] . '$ </span><br>';

                                        echo  round($key['Price'] * (1 - $key['reduction'] / 100), 2) . "$ ";

                                        // Si j'ai un prix à réduire : alors, j'affiche le prix de base baré avec le span
                                        // puis je fais un echo d'un calcul du prix de base via le % de réduction

                                    } else {

                                        echo  $key['Price'] . "$";

                                        // je n'ai pas de réduction, j'affiche le prix normal

                                    } ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class=" titre btn btn-outline-dark mt-auto" href="single_article/index.php?id_produit=<?php echo $key['id_produit']; ?>">Buy </a></div>
                            </div>
                        </div>
                    </div>




                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class=" bgcopy py-5 ">
        <div class=" bgcopy container">
            <p class=" bgcopy titre m-0 text-center ">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="backoffice/js/burger.js"></script>
    <script src="js/scripts.js"></script>

</body>

</html>