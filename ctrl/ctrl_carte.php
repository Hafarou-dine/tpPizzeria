<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_carte.php';

    /* ------------------------------ LOGIQUE ------------------------------ */

    $produit = new Produit();

    /////////////////// CARTE PIZZA //////////////////////////////////////////////
    $allProduit = $produit->showAllProduitByType($bdd,1);
   
    echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="pizza">PIZZAS</h2></div>';
    echo '<div class="d-flex flex-row">';
    foreach($allProduit as $value){
        echo '<div class="card shadow m-5 bg-body rounded" style="width: 18rem;">
                    <img src='.$value->img_prod.' class="card-img-top" alt="produit">
                        <div class="card-body">
                            <h5 class="card-title">'.$value->nom_prod.'</h5>
                            <p class="card-text">'.$value->desc_prod.'</p>
                            <p class="card-text">'.$value->prix_prod.' €</p>
                            <a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a>
                        </div>
                </div>';
    }
    echo '</div>';

    ///////////////// FIN CARTE PIZZA //////////////////////////////////////////////

    ///////////////// CARTE Entrees //////////////////////////////////////////////
    $allProduit = $produit->showAllProduitByType($bdd,2);
    
    echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="entree">ENTREES</h2></div>';
    echo '<div class="d-flex flex-row">';
    foreach($allProduit as $value){
        echo '<div class="card shadow m-5 bg-body rounded" style="width: 18rem;">
                    <img src='.$value->img_prod.' class="card-img-top" alt="produit">
                        <div class="card-body">
                            <h5 class="card-title">'.$value->nom_prod.'</h5>
                            <p class="card-text">'.$value->desc_prod.'</p>
                            <p class="card-text">'.$value->prix_prod.' €</p>
                            <a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a>
                        </div>
                </div>';
    }
    echo '</div>';
    /////////////////// FIN CARTE Entrees //////////////////////////////////////////////

    /////////////////// CARTE SAUCES //////////////////////////////////////////////
    $allProduit = $produit->showAllProduitByType($bdd,3);
    
    echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="sauce">SAUCES</h2></div>';
    echo '<div class="d-flex flex-row">';
    foreach($allProduit as $value){
        echo '<div class="card shadow m-5 bg-body rounded" style="width: 18rem;">
                    <img src='.$value->img_prod.' class="card-img-top" alt="produit">
                        <div class="card-body">
                            <h5 class="card-title">'.$value->nom_prod.'</h5>
                            <p class="card-text">'.$value->desc_prod.'</p>
                            <p class="card-text">'.$value->prix_prod.' €</p>
                            <a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a>
                        </div>
                </div>';
    }
    echo '</div>';
    /////////////////// FIN CARTE SAUCES //////////////////////////////////////////////

    /////////////////// CARTE DESSERT //////////////////////////////////////////////
    $allProduit = $produit->showAllProduitByType($bdd,4);
    
    echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="dessert">DESSERTS</h2></div>';
    echo '<div class="d-flex flex-row">';
    foreach($allProduit as $value){
        echo '<div class="card shadow m-5 bg-body rounded" style="width: 18rem;">
                    <img src='.$value->img_prod.' class="card-img-top" alt="produit">
                        <div class="card-body">
                            <h5 class="card-title">'.$value->nom_prod.'</h5>
                            <p class="card-text">'.$value->desc_prod.'</p>
                            <p class="card-text">'.$value->prix_prod.' €</p>
                            <a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a>
                        </div>
                </div>';
    }
    echo '</div>';
    /////////////////// FIN CARTE DESSERT //////////////////////////////////////////////

    /////////////////// CARTE BOISSONS //////////////////////////////////////////////
    $allProduit = $produit->showAllProduitByType($bdd,5);
    
    echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="boisson">BOISSONS</h2></div>';
    echo '<div class="d-flex flex-row">';
    foreach($allProduit as $value){
        echo '<div class="card shadow m-5 bg-body rounded" style="width: 18rem;">
                    <img src='.$value->img_prod.' class="card-img-top" alt="produit">
                        <div class="card-body">
                            <h5 class="card-title">'.$value->nom_prod.'</h5>
                            <p class="card-text">'.$value->desc_prod.'</p>
                            <p class="card-text">'.$value->prix_prod.' €</p>
                            <a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a>
                        </div>
                </div>';
    }
    echo '</div>';
    /////////////////// FIN CARTE BOISSONS //////////////////////////////////////////////

    /////////////////// CARTE MENU //////////////////////////////////////////////
    $allProduit = $produit->showAllProduitByType($bdd,6);
    
    echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="menu">MENUS</h2></div>';
    echo '<div class="d-flex flex-row">';
    foreach($allProduit as $value){
        echo '<div class="card shadow m-5 bg-body rounded" style="width: 18rem;">
                    <img src='.$value->img_prod.' class="card-img-top" alt="produit">
                        <div class="card-body">
                            <h5 class="card-title">'.$value->nom_prod.'</h5>
                            <p class="card-text">'.$value->desc_prod.'</p>
                            <p class="card-text">'.$value->prix_prod.' €</p>
                            <a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a>
                        </div>
                </div>';
    }
    echo '</div>';
    ///////////////// FIN CARTE MENU //////////////////////////////////////////////




?>

