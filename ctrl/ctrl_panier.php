<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_panier.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    $produit = new Produit(null,null,null,null,null,null);
    $produitById = $produit->getProduitById($bdd,$_GET['id']);

   

echo'
<form action="" method="post">
    <div class="card m-5" style="width: 18rem;">
        <img src=asset\image\\'.$produitById->img_prod.' class="card-img-top" alt="produit">
        <div class="card-body">
        <h5 class="card-title">'.$produitById->nom_prod.'</h5>
        <p class="card-text">'.$produitById->desc_prod.'</p>
        <p class="card-text">'.$produitById->prix_prod.' €</p>
  <input type="submit" class="btn btn-primary" value="Achetez">
  <label for="pizza-select">Choissiez votre taille:</label>
  <select name="pizza" id="pizza-select">
      <option value="">--taille--</option>
      <option value="20">petite</option>
      <option value="25">moyenne</option>
      <option value="30">grande</option>
  </select>
</form>
</div>
</div>';

if (isset($_POST['pizza']) && !empty($_POST['pizza'])) {
    var_dump($_POST['pizza']);
}


        

?>

