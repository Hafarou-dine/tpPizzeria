<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_all_ingred.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    if(isset($_SESSION['droit']) && ($_SESSION['droit'] == 1)){
        // on instancie un nouvel objet
        $new = new Ingredient(null, null);
        // on stocke dans un tableau la liste des ingredients en BDD
        $tab = $new->getAllIngred($bdd);
        // on boucle pour afficher la liste des ingredients (avec le nom et le prix)
        echo '<ul class="list-group w-75 mx-auto">';
        foreach($tab as $value){
            echo '
            <li class="list-group-item d-flex justify-content-around"><span class="me-5">'.$value->nom_ing.'</span><span class="me-5">'.$value->prix_ing.'€</span>
                <a href="/tpPizzeria/updateIngred?id='.$value->id_ing.'" class="me-5">
                    <img src="https://img.icons8.com/dusk/20/000000/edit--v1.png"/>
                </a>
                <a href="/tpPizzeria/allIngred?id='.$value->id_ing.'" class="me-5">
                    <img src="https://img.icons8.com/dusk/20/000000/filled-trash.png"/>
                </a>
            </li>';
        }
        echo '</ul>';

        //test si on a cliquer sur la poubelle
        if(isset($_GET['id'])){
            $new->setId($_GET['id']);
            $new->deleteIngred($bdd);
            redirection("/tpPizzeria/allIngred", "0");
        }
    }
    else{
        redirection("/tpPizzeria/connexion", "0");
    }
?>