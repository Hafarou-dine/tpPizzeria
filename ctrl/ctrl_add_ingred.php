<?php
   /* ------------------------------ IMPORT VIEW ------------------------------ */
   include './view/view_add_ingred.php';

   /* ------------------------------ LOGIQUE ------------------------------ */
   if(isset($_SESSION['droit']) && ($_SESSION['droit'] == 1)){
      //test si on a cliquer sur le bouton ajouter
      if(isset($_POST['add'])){
         //test si les champs sont rempli
         if($_POST['nom_ing'] != "" && $_POST['prix_ing'] !=""){
            $nom = ucfirst(mb_strtolower($_POST['nom_ing'], "UTF-8"));
            $prix = $_POST['prix_ing'];
            //instancier un nouvel objet Ingredient (appel au constructeur)
            $new = new Ingredient($nom, $prix);
            //appel à la méthode addIgred() de la classe igredient
            $new->addIngred($bdd);
            echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-75">L\'ingredient '.$nom.' à été ajouté en BDD</p></div>';
         }
      }
   }
   else{
      redirection("/tpPizzeria/connexion", "0");
   }
?>

