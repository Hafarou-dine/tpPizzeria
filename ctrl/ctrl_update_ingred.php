<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_update_ingred.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    if (isset($_GET['id']) && $_GET['id'] != ""){
        $id = $_GET['id'];
        $new = new Ingredient(null, null);
        $new->setId($id);
        $new->getIngredById($bdd);
        echo'<script>
            fillIng("'.$new->nom_ing.'", "'.$new->prix_ing.'");
        </script>';
    }

    if(isset($_POST['update'])){




    }
?>

