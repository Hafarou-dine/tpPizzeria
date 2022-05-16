<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_update_article.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    // on verifie si c'est un administrateur qui est connecté
    if(isset($_SESSION['droit']) && ($_SESSION['droit'] == 1)){
        // on verifie si il y  a un id d'article en get sur l'url
        if(isset($_GET['id']) && ($_GET['id'] != "")){
            $id = $_GET['id'];
            $new = new Article(null, null, null, null, null, null, null);
            $new->setId($id);
            $art = $new->getArticleById($bdd);
            echo '
            <script>
                fillArticle("'.$art->titre_art.'", "'.$art->contenu_art.'");
            </script>';

            if(isset($_POST['update'])){
                if(isset($_FILES['img_art_1']) && isset($_FILES['img_art_2']) && isset($_FILES['img_art_3'])){
                    // pour stocker le titre en majuscule
                    $titre = mb_convert_case($_POST['titre_art'], MB_CASE_UPPER, "UTF-8");
                    $cont = $_POST['contenu_art'];
                    $date = date("Y-m-d H:i:s");
                    $img1 = null;
                    $img2 = null;
                    $img3 = null;
                    // on import et stock l'url des images dans des variables si elle ont été choisi 
                    if($_FILES['img_art_1']['name'] != ""){
                        $tmpName = $_FILES['img_art_1']['tmp_name'];
                        $name = $_FILES['img_art_1']['name'];
                        $img1 = "./asset/image/$name";
                        move_uploaded_file($tmpName, $img1);
                    }
                    if($_FILES['img_art_2']['name'] != ""){
                        $tmpName = $_FILES['img_art_2']['tmp_name'];
                        $name = $_FILES['img_art_2']['name'];
                        $img2 = "./asset/image/$name";
                        move_uploaded_file($tmpName, $img2);
                    }
                    if($_FILES['img_art_3']['name'] != ""){
                        $tmpName = $_FILES['img_art_3']['tmp_name'];
                        $name = $_FILES['img_art_3']['name'];
                        $img3 = "./asset/image/$name";
                        move_uploaded_file($tmpName, $img3);
                    }
                    // on instancie un nouvel objet 
                    $art = new Article($titre, $cont, $img1, $img2, $img3, null, $date);
                    $art->setId($id);
                    $art->updateArticle($bdd);
                    echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-75">L\'article '.$titre.' à été mis à jour</p></div>';
                }
                redirection('/tpPizzeria/updateArticle'.$id.'', "3000");
            }
        }
        else{
            redirection("/tpPizzeria/blog", "0");
        }
    }
    else{
        redirection("/tpPizzeria/connexion", "0");
    }
?>

