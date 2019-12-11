<?php

    include "../../core/config.php";
    include "../../core/categorieOps.php";

    foreach(categorieOps::getOrderedCategories() as $cat)
        foreach(categorieOps::getCategorie($cat['idCategorie']) as $c)
            echo $c['nomCategorie']." -- ";
?>