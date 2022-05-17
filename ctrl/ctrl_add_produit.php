<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_add_produit.php'; 

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

        // on verifie si le bouton Ajouter a été cliquer
        if(isset($_POST['add'])){
            if(($_POST['nom_prod'] != "") && ($_POST['desc_prod'] != "") && 
            ($_POST['prix_prod'] != "") && ($_POST['type'] != "default")){
                $nom = ucfirst((mb_strtolower($_POST['nom_prod'], "UTF-8")));
                $prix = $_POST['prix_prod'];
                $desc = $_POST['desc_prod'];
                $type = $_POST['type'];
                $img = null;
                // si un fichier a été choisi
                if(isset($_FILES['img_prod'])){
                    // on importe le fichier dans ./asset/image et on stock son chemin dans une variable
                    if($_FILES['img_prod']['name'] != ""){
                        $tmpName = $_FILES['img_prod']['tmp_name'];
                        $name = $_FILES['img_prod']['name'];
                        $img = "./asset/image/$name";
                        move_uploaded_file($tmpName, $img);
                    }
                }
                // on instancie un nouvel objet
                $new = new Produit($nom, $desc, $img, $prix, $type);
                $new->addProduit($bdd);
                echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-75">Le produit '.$nom.' à été ajouté en BDD</p></div>';
                redirection("/tpPizzeria/addProduit", "3000");
            }
        }
    }
    else{
        redirection("/tpPizzeria/connexion", "0");
    }
?>

