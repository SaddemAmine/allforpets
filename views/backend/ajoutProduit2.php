<?php
    include "../../core/config.php";
    include "../../core/produitOps.php";

    $produit = new produit(NULL, $_POST['libProduit'], $_POST['idCategorie'], $_POST['prixProduit'], $_POST['descProduit'], $_POST['qntProduit'], $_POST['imgProduit']);

    $produitOps = new produitOps();

    $liste = $produitOps->ajouterProduit($produit);

    header("location: ajoutProduit1.php");
?>