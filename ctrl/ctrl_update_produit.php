<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_update_produit.php'; 

    /* ------------------------------ LOGIQUE ------------------------------ */
    $type = new Type(null);
    $listeType = $type->showAllType($bdd);
    foreach($listeType as $value){
        echo '
        <script>
            addOption("'.$value->nom_type.'", "'.$value->id_type.'");
        </script>';
    }



$produit = new Produit (null,null,null,null,null,null);   
$produitModif = $produit->getProduitById($bdd,$_GET['id']);
var_dump($produitModif);
echo ''.$produitModif->prix_prod.'';


if(isset($_GET['id'])) {

    echo'<div class="container-fluid w-75">
        <div class="m-5">
            <h1 class="m-5 text-center">Modifier un produit</h1>
            <form action="" method="post">
                <div class="container shadow p-5 mb-5 bg-body rounded">
                    <p>Nom du produit :<input type="text" name="nom_prod" class="form-control" value='.$produitModif->nom_prod.'></p>
                    <p>Description du produit : <textarea name="desc_prod" class="form-control" rows="6">'.$produitModif->desc_prod.'</textarea></p>
                    <p>Prix du produit :<input type="text" name="prix_prod" class="form-control" value='.$produitModif->prix_prod.'></p>
                    <p>Sélectionner une categorie :
                        <select name="type" id="cat">
                        <option value="default">----- TYPE -----</option>';

                        foreach($listeType as $value){
                            echo '<option value='.$value->id_type.'>'.$value->nom_type.'</option>';
                        }
                        echo'</select>
                    </p>
                    <p class="d-flex justify-content-around mt-5">
                        <input id="" type="submit" value="Enregistrer" name="update" class="btn btn-primary w-25">
                    </p>
                </div>
            </form>
        </div>
    </div>';
}else {
    echo 'erreur';
}

if (isset($_POST['nom_prod']) && !empty($_POST['nom_prod'])
&& isset($_POST['desc_prod']) && !empty($_POST['desc_prod'])
&& isset($_POST['prix_prod']) && !empty($_POST['prix_prod'])
&& isset($_POST['type']) && !empty($_POST['type'])) {
    $produit->setId($_GET['id']);
    $produit->setNom($_POST['nom_prod']);
    $produit->setDesc($_POST['desc_prod']);
    $produit->setPrix($_POST['prix_prod']);
    $produit->setType($_POST['type']);
    $produit->updatePorduit($bdd);
}
?>

