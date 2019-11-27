<?php
    include "../../core/config.php";
    include "../../core/produitOps.php";

    $produit = new produit($_GET['idProduit'], $_POST['libProduit'], $_POST['idCategorie'], $_POST['prixProduit'], $_POST['descProduit'], $_POST['qntProduit'], $_POST['imgProduit']);

    $produitOps = new produitOps();

    $produitOps->modifierProduit($produit);

    header("location: listeProduits.php");
?>