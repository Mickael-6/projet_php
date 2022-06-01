<?php

$databasename = "couleunshop";
$server = "couleunshop.mysql.db";
$passworddb = "Mickael69100";
$logindb = "couleunshop";



$connexion = mysqli_connect($server, $logindb, $passworddb, $databasename);
mysqli_query($connexion, "SET CHARACTER SET 'utf8'");
mysqli_query($connexion, "SET SESSION collation_connection ='utf8_unicode_ci'");
// 1er etape : connexion à la bdd en se servant de 4 variables indispensables !

if (mysqli_connect_error()) {
    // echo "Erreur de connexion à la BDD";
} else {
    // echo "vous etes connecté a la base de données";
}
// si l'echo s'affiche alors nous n'avons pas reussi à nous connecter.
