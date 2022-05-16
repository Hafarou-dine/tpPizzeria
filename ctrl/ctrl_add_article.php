<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_add_article.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    // if(isset($_SESSION['connected'])){
    //     if(isset($_SESSION['role']) && ($_SESSION['role'] == 1)){

        if (isset($_POST['add'])){
            if(isset($_POST['titre_art']) AND $_POST['titre_art'] !=""  AND
            isset($_POST['contenu_art']) AND $_POST['contenu_art'] !="" AND
            isset($_FILES['img_art_1']) AND
            isset($_FILES['img_art_2']) AND
            isset($_FILES['img_art_3'])){

                echo  'ok <br>';

                $date =  date("Y-m-d H:i:s");
                $img1 = "";
                $img2 = "";
                $img3 = "";

                if($_FILES['img_art_1']['name'] != ''){
                $tmpName = $_FILES['img_art_1']['tmp_name'];
                $name = $_FILES['img_art_1']['name'];
                $img1 = "./asset/image/$name";
                move_uploaded_file($tmpName, $img1);
                }
                if($_FILES['img_art_2']['name'] != ''){
                    $tmpName = $_FILES['img_art_2']['tmp_name'];
                    $name = $_FILES['img_art_2']['name'];
                    $img2 = "./asset/image/$name";
                    move_uploaded_file($tmpName, $img2);
                    }
                    if($_FILES['img_art_3']['name'] != ''){
                        $tmpName = $_FILES['img_art_3']['tmp_name'];
                        $name = $_FILES['img_art_3']['name'];
                        $img3 = "./asset/image/$name";
                        move_uploaded_file($tmpName, $img3);
                        }
                $art = new Article($_POST['titre_art'], $_POST['contenu_art'], $img1, $img2, $img3,$date,null);


                $art->addArticle($bdd);
                echo        
                '<div class="container">
                <div class="alert alert-succes" role="alert">
                l\'article '.$art->getTitre().' à été ajouté
                </div>
                </div>';
            }
            else{
                echo '
                <div class="container">
                <div class="alert alert-warning" role="alert" style:"text-align:center">
                Veuillez remplir les champs du formulaire
                </div>
                </div>';
            }
        }
//     }
// }
?>

