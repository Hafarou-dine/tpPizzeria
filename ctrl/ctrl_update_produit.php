<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_update_produit.php'; 

    /* ------------------------------ LOGIQUE ------------------------------ */
    if(isset($_SESSION['droit']) && ($_SESSION['droit'] == 1)){
        // on rajoute deq option au select 
        $type = new Type(null);
        $listeType = $type->showAllType($bdd);
        foreach($listeType as $val){
            echo '
            <script>
                addOption("'.$val->nom_type.'","'.$val->id_type.'");
            </script>';
        }

        // on verifie si un id est fourni en get et qu'il n'est pas vide
        if(isset($_GET['id']) && ($_GET['id'] != "")){
            $id = $_GET['id'];
            // on prerempli les champs du formulaire
            $prod = new Produit(null, null, null, null, null);
            $prod->setId($id);
            $one = $prod->getProduitById($bdd);
            echo '<script>
                fillProd("'.$one->nom_prod.'", "'.$one->desc_prod.'", "'.$one->prix_prod.'");
            </script>';
            // on verifie si on a cliquer sur le boutton
            if(isset($_POST['update'])){
                if(($_POST['nom_prod'] != "") && ($_POST['desc_prod'] != "") && ($_POST['prix_prod'] != "") &&
                ($_POST['type'] != "default")){
                    $nom = ucfirst((mb_strtolower($_POST['nom_prod'], "UTF-8")));
                    $desc = $_POST['desc_prod'];
                    $prix = $_POST['prix_prod'];
                    $type = $_POST['type'];
                    $img = null;
                    if(isset($_FILES['img_prod'])){
                        // on importe le fichier dans ./asset/image et on stock son chemin dans une variable
                        if($_FILES['img_prod']['name'] != ""){
                            $tmpName = $_FILES['img_prod']['tmp_name'];
                            $name = $_FILES['img_prod']['name'];
                            $img = "./asset/image/$name";
                            move_uploaded_file($tmpName, $img);
                        }
                    }
                    $new = new Produit($nom, $desc, $img, $prix, $type);
                    $new->setId($id);
                    $new->updatePorduit($bdd);
                    echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-75">Le produit '.$nom.' à été mis à jour</p></div>';
                    redirection('/tpPizzeria/updateProduit?id='.$id.'', "3000");
                }
            }
        }
        else {
            redirection("/tpPizzeria/carte", "0");
        }
    }
    else{
        redirection("/tpPizzeria/connexion", "0");
    }
?>

