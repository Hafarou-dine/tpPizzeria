<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_add_ingred.php';
   
    include './utils/connectBdd.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    $msg = "Ajoutez un ingrédient";
    $ing = new Ingredient(null, null);
 //test si le bouton ajouté est cliqué
 if(isset($_POST['add'])){
     //test si les champs sont rempli
     if(isset($_POST['nom_ing']) AND isset($_POST['prix_ing']) AND 
     $_POST['nom_ing'] != "" AND $_POST['prix_ing'] !=""){
         //instancier un nouvel objet Ingredient (appel au constructeur)
         $ingredient = new Ingredient($_POST['nom_ing'], $_POST['prix_ing']);
         //appel à la méthode addIgredients de la classe igredients
         $ingredient->addIngred($bdd);
         //utiliser le getter pour afficher le nom
      $msg = ''.$_POST['nom_ing'].' à été ajouté';
     }
     else{
        $msg = 'Veuillez remplir les champs du formulaire';
     }
}  
//  /Affichage en JS des Messages 
echo "<script>zoneMsg.innerHTML = '$msg'</script>"; 
?>

