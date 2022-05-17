<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_article.php'; 

    /* ------------------------------ LOGIQUE ------------------------------ */

        if(isset($_GET['id']) AND !empty($_GET['id'])) {
            $articles = new Article(null,null,null,null,null,null,null);
            $tab = $articles->getArticleById($bdd, $_GET['id']);

            echo'    
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card shadow mb-5 bg-body rounded">
                            <div class="row">
                                <div class="col">
                                    <h2 class="text-center m-3">'.$tab->titre_art.'</h2>
                                    <img src="'.$tab->img_art_1.'" class="img-fluid rounded-start m-1">
                                    <img src="'.$tab->img_art_2.'" class="img-fluid rounded-start m-1">
                                    <img src="'.$tab->img_art_3.'" class="img-fluid rounded-start m-1">
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <p>'.$tab->contenu_art.'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';

                
                    $com = new Commentaire(null, null,null,null,null);
                    $com->setArt($_GET['id']);
                    $tab_com = $com->getAllComByArticle($bdd);
                    echo '<div class="col-6 col-md-4">';
                    foreach ($tab_com as $value) {
                        echo'
                        <ul>
                            <li class="li-grid list-group-item shadow mb-3 bg-body rounded overflow-auto" id="liste">
                                <span id="nom">'.$value->pseudo_com.'</span>
                                <span>'.$value->texte_com.'</span>
                                <span>'.$value->date_com.'</span>
                            </li>
                        </ul>';
                    }

                        echo '<div class="card d-flex align-items-end m-5">
                            <div class="card-body w-100">
                                <form action="" method="post">
                                    <input type="text" class="form-control" name="pseudo_com" placeholder="Nom"
                                        style="width:25%; height:25%"></p>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="texte_com" rows="3"
                                        placeholder="Commenatire"></textarea>
                                    <input id="Vrt" type="submit" value="Ajouter Commentaire" name="voir_article" class="m-1">
                                </form>
                            </div>
                        </div>
                    </div>';


                    if(isset($_POST['pseudo_com']) && !empty($_POST['pseudo_com']) &&
                    isset($_POST['texte_com']) && !empty($_POST['texte_com'])){
                    $com = new Commentaire(null, null,null,null,null);
                    $com->setPseudo($_POST['pseudo_com']);
                    $com->setCom($_POST['texte_com']);
                    $date = date("Y-m-d H:i:s");
                    $com->setDate($date);

                    $com->addCom($bdd,$_SESSION['id'],$_GET['id']);


                    }
                }
?>

