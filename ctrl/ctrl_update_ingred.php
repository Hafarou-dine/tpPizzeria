<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_update_ingred.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    if(isset($_SESSION['droit']) && ($_SESSION['droit'] == 1)){
        if (isset($_GET['id']) && $_GET['id'] != ""){
            $id = $_GET['id'];
            $new = new Ingredient(null, null);
            $new->setId($id);
            $val = $new->getIngredById($bdd);
            echo'<script>
                fillIng("'.$val->nom_ing.'", "'.$val->prix_ing.'");
            </script>';
            if(isset($_POST['update'])){
                $nom = ucfirst(mb_strtolower($_POST['nom_ing'], "UTF-8"));
                $prix = $_POST['prix_ing'];
                $new = new Ingredient($nom, $prix);
                $new->setId($id);
                $new->updateIngred($bdd);
                echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-75">L\'ingredient '.$nom.' à été mis à jour</p></div>';
                redirection('/tpPizzeria/updateIngred?id='.$id.'', "3000");
            }
        }
    }
    else{
        redirection("/tpPizzeria/connexion", "0");
    }
?>

