<?php
require_once("lib/connexion.php");
require_once("lib/inscription.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/inscription.css">

</head>

<body class="bg">

    <div class="container">

        <div class=" cardinsc card o-hidden border-0 shadow-lg my-9">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image "></div>
                    <div class=" bgcolor col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 textvert 0 mb-4">Create an Account!</h1>
                            </div>
                            <form method="POST" class="user">
                                <div class="  form-group row ">
                                    <div class=" col-sm-6 mb-3 mb-sm-0  ">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name" name="prenom">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name" name="nom">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" name="email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="mdp">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="confirm-mdp">
                                    </div>
                                </div>
                                <input type="submit" value="Register Account" href="login.php" class="btn btn-primary btn-user btn-block" name="envoie_creation">
                                </a>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="  small textvert" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small textvert" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>