<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_carte.php';

    /* ------------------------------ LOGIQUE ------------------------------ */

    $produit = new Produit(null, null, null, null,null);

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
        <p class="card-text">'.$value->prix_prod.' €</p>';
        echo '<div class="d-flex justify-content-between">
        <div><a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a></div>';
        if(isset($_SESSION['droit']) && $_SESSION['droit']== 1){
            echo '<div>
                <a href="carte?supp='.$value->id_prod.'"><img src="./asset/image/poubelle.png" alt="" class="me-4"></a>
                <a href="updateProduit?id='.$value->id_prod.'"><img src="./asset/image/crayon.png" alt=""></a>
            </div>';
        }
        echo '</div></div>';
        echo '</div>';
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
        <p class="card-text">'.$value->prix_prod.' €</p>';
        echo '<div class="d-flex justify-content-between">
        <div><a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a></div>';
        if(isset($_SESSION['droit']) && $_SESSION['droit']== 1){
            echo '<div>
                <a href="carte?supp='.$value->id_prod.'"><img src="./asset/image/poubelle.png" alt="" class="me-4"></a>
                <a href="updateProduit?id='.$value->id_prod.'"><img src="./asset/image/crayon.png" alt=""></a>
            </div>';
        }
        echo '</div></div>';
        echo '</div>';
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
        <p class="card-text">'.$value->prix_prod.' €</p>';
        echo '<div class="d-flex justify-content-between">
        <div><a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a></div>';
        if(isset($_SESSION['droit']) && $_SESSION['droit']== 1){
            echo '<div>
                <a href="carte?supp='.$value->id_prod.'"><img src="./asset/image/poubelle.png" alt="" class="me-4"></a>
                <a href="updateProduit?id='.$value->id_prod.'"><img src="./asset/image/crayon.png" alt=""></a>
            </div>';
        }
        echo '</div></div>';
        echo '</div>';
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
        <p class="card-text">'.$value->prix_prod.' €</p>';
        echo '<div class="d-flex justify-content-between">
        <div><a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a></div>';
        if(isset($_SESSION['droit']) && $_SESSION['droit']== 1){
            echo '<div>
                <a href="carte?supp='.$value->id_prod.'"><img src="./asset/image/poubelle.png" alt="" class="me-4"></a>
                <a href="updateProduit?id='.$value->id_prod.'"><img src="./asset/image/crayon.png" alt=""></a>
            </div>';
        }
        echo '</div></div>';
        echo '</div>';
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
        <p class="card-text">'.$value->prix_prod.' €</p>';
        echo '<div class="d-flex justify-content-between">
        <div><a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a></div>';
        if(isset($_SESSION['droit']) && $_SESSION['droit']== 1){
            echo '<div>
                <a href="carte?supp='.$value->id_prod.'"><img src="./asset/image/poubelle.png" alt="" class="me-4"></a>
                <a href="updateProduit?id='.$value->id_prod.'"><img src="./asset/image/crayon.png" alt=""></a>
            </div>';
        }
        echo '</div></div>';
        echo '</div>';
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
        <p class="card-text">'.$value->prix_prod.' €</p>';
        echo '<div class="d-flex justify-content-between">
        <div><a href="/tpPizzeria/panier?id='.$value->id_prod.'" class="btn btn-primary">commander</a></div>';
        if(isset($_SESSION['droit']) && $_SESSION['droit']== 1){
            echo '<div>
                <a href="carte?supp='.$value->id_prod.'"><img src="./asset/image/poubelle.png" alt="" class="me-4"></a>
                <a href="updateProduit?id='.$value->id_prod.'"><img src="./asset/image/crayon.png" alt=""></a>
            </div>';
        }
        echo '</div></div>';
        echo '</div>';
    }
    echo '</div>';
    ///////////////// FIN CARTE MENU //////////////////////////////////////////////

    /////////////////// PIZZA CUSTOM //////////////////////////////////////////////
    $ingredient = new Ingredient(null,null,null);
    $allIngredient = $ingredient->getAllIngred($bdd);
    $tabloIngredient=[];
    echo '<div class="card shadow m-5 p-2 bg-body rounded"><h2 id="pizzaCuston">PIZZA CUSTOM</h2></div>';

        echo '<div class="card shadow m-5 p-2 bg-body rounded d-grid gap-2 col-6 mx-auto">
        <form action="" method="post">

    <label for="pizza-select">Choissiez votre taille:</label>
    <select name="pizza" id="pizza-select">
        <option value="">--taille--</option>
        <option value="20">petite</option>
        <option value="25">moyenne</option>
        <option value="30">grande</option>
    </select>

    <label for="pizza-select">Choissiez votre base:</label>
    <select name="base" id="pizza-select">
        <option value="">--base--</option>
        <option value="creme">créme</option>
        <option value="tomate">tomate</option>
    </select>

    <label for="pizza-select">Choissiez vos ingredients:</label>
    <select name="ingredients" id="pizza-select">
    <option value="">--ingredients--</option>';
    foreach($allIngredient as $value){
            echo '
            <option value='.$value->nom_ing.'>'.$value->nom_ing.'</option>';
            
    }
    echo '</select>';
    
    
        echo'<div>
        <p>Liste des ingredients choisis:</p>
    </div>';

    // parcour du tableau ingredients

    foreach($tabloIngredient as $value){
        echo '<li>'.$value.'</li>';
    }
    
  

    echo '<input type="submit" value="ajouter un ingredient" class="btn btn-primary" name="ajout">

    <input type="submit" value="commander" class="btn btn-primary" name="commande">
    </form>
    </div>';

    if (isset($_POST['ajout']) && count($tabloIngredient)<5) {
        array_push($tabloIngredient,$_POST['ingredients']);
        var_dump($_POST['base']);
        var_dump($_POST['pizza']);
    }


    ///////////////// FIN PIZZA CUSTOM //////////////////////////////////////////////

////////////////////////////////////// suppression article
    if (isset($_GET['supp'])) {
        $produit->setId($_GET['supp']);
        $produit->deletePorduit($bdd);
    }
?>

