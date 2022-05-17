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



                    echo '<div class="col-6 col-md-4">
                        <ul>
                            <li class="li-grid list-group-item shadow mb-3 bg-body rounded" id="liste">
                                <span id="nom"></span>
                                <span>This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer. Contrary to popular
                                    belief</span>
                            </li>
                        </ul>

                        <div class="card d-flex align-items-end m-5">
                            <div class="card-body w-100">
                                <form action="" method="post">
                                    <input type="text" class="form-control" name="nom_commentaire" placeholder="Nom"
                                        style="width:25%; height:25%"></p>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Commenatire"></textarea>
                                    <input id="Vrt" type="submit" value="Ajouter Commentaire" name="voir_article" class="m-1">
                                </form>

                            </div>
                        </div>
                    </div>';
    }
?>

