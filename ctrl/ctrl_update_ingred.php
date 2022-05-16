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
  
        $msg="";
    if(isset($_POST['update'])){
        //test si les champs sont remplies
        if(isset($_POST['nom_ing']) AND isset($_POST['prix_ing'])
        AND $_POST['nom_ing'] !="" AND $_POST['prix_ing'] !=""){
            //instance d'un nouvel objet Article avec le constructeur
            $new = new Ingredient($_POST['nom_ing'], $_POST['prix_ing']);
            //affectation de l'id de l'article (setter-> setIdArticle)
            $new->setId($_GET['id']);
            //modification de l'article
            $new->updateIngred($bdd);
            //récupération du nouveau nom et prix 
            $newNom = $_POST['nom_ing'];
            $newPrix = $_POST['prix_ing'];
            //message de modification
            $msg =  "L\'ingredient à été modifié";
            echo "<script>
            nom.value = '$newNom';
            prix.value = '$newPrix';
            setTimeout(()=>{
                document.location.href='/tpPizzeria/allIngred'; 
                }, 1500);
            </script>";
            



        }
    }
}
    else{
        header('Location: /newEvalMvc/showArticle?noId');
    }
     //Affichage en JS des Messages 
     echo "<script>zoneMsg.innerHTML = '$msg';</script>";
?>

