<?php

// SI $_GET['id_cat'] == NUMERIC

if (!empty($_GET['id_produit'])) {

	$sqlProduit = "SELECT * FROM `produit`";
	$produit_table = mysqli_query($connexion, $sqlProduit);
	$produit_resultat = mysqli_fetch_all($produit_table, MYSQLI_ASSOC);
}

// echo "<pre>";
// print_r($produit_resultat);
// echo "</pre>";
