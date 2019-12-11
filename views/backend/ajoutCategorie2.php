<?php
    include "../../core/config.php";
    include "../../core/categorieOps.php";

    $categorie = new categorie(NULL,$_POST['nomCategorie']);

    $categorieOps = new categorieOps();

    $liste = $categorieOps->ajouterCategorie($categorie);

    header("location: ajoutCategorie1.php");
?>