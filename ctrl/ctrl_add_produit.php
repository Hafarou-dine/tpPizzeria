<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_add_produit.php'; 
    /* ------------------------------ LOGIQUE ------------------------------ */

    $type = new Type(null);
    $listeType = $type->showAllType($bdd);
    
    foreach($listeType as $value){
        echo '<script>addOption("'.$value->nom_type.'","'.$value->id_type.'")</script>';
    }


    // $msg = "";

    // $produit = new Produit();

    if (isset($_POST['nom_prod']) && !empty($_POST['nom_prod'])
    &&isset($_POST['desc_prod']) && !empty($_POST['desc_prod'])
    &&isset($_POST['prix_prod']) && !empty($_POST['prix_prod'])
    &&isset($_POST['img_prod']) && !empty($_POST['img_prod'])) {
        $produit->setPrix($_POST['prix_prod']);
        $produit->setNom($_POST['nom_prod']);
        $produit->setDesc($_POST['desc_prod']);
        $produit->setImg($_POST['img_prod']);
        $produit->setType($_POST['type']);
        $produit->addProduit($bdd);
    }


?>

