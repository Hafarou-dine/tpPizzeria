<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_blog.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    $all = new Article(null, null, null, null, null, null, null);
    $tab = $all->getAllArticle($bdd);
    // on verifie si un utilisateur est connecté
    // on ouvre la div qui vacontenir les card article

    if(isset($_SESSION['connected'])){
        // on verifie si cet utilisateur est un Admin
        if(($_SESSION['droit'] == 1)){
            foreach($tab as $value){
                echo 
                '<div class="col">
                    <div class="card shadow mb-5 bg-body rounded" style="width:100%; height:500px">
                        <img src="'.$value->img_art_1.'"
                        class="card-img-top" alt="..." style="width:100%; height:250px">
                    <div class="card-body">
                        <h3 class="card-title">'.$value->titre_art.'</h3>
                        <p class="card-text">'.mb_substr($value->contenu_art, 0, 60, "UTF-8").'</p>
                        <a id="VArt" href="/tpPizzeria/article?id='.$value->id_art.'">Voir</a>

                        </div>
                            <div class="card-footer">
                            <small class="d-flex justify-content-end">
                            <a href="/tpPizzeria/updateArticle?id='.$value->id_art.'" class="me-2"><img src="https://img.icons8.com/dusk/20/000000/edit--v1.png"/></a>
                            <a href="/tpPizzeria/blog?id='.$value->id_art.'"><img src="https://img.icons8.com/dusk/20/000000/filled-trash.png"/></a>
                            </small>
                            </div>
                        </div>
                        </div>';
            }
            echo'
            </div>
            </div>
            ';
        }
        else{
            foreach($tab as $value){
                echo       
                '<div class="col">
                    <div class="card shadow mb-5 bg-body rounded" style="width:100%; height:500px">
                        <img src="'.$value->img_art_1.'"
                        class="card-img-top" alt="..." style="width:100%; height:250px">
                    <div class="card-body">
                        <h3 class="card-title">'.$value->titre_art.'</h3>
                        <p class="card-text">'.mb_substr($value->contenu_art, 0, 60, "UTF-8").'</p>
                        <input id="VArt" href="/tpPizzeria/article?id='.$value->id_art.'" type="submit" value="Voir Article" name="voir_article">
                        </div>
                    </div>
                </div>';
            }
            echo'
            </div>
            </div>
            ';
        }
    }
    else{
        foreach($tab as $value){
            echo       
            '<div class="col">
                <div class="card shadow mb-5 bg-body rounded" style="width:100%; height:500px">
                    <img src="'.$value->img_art_1.'"
                    class="card-img-top" alt="..." style="width:100%; height:250px">
                <div class="card-body">
                    <h3 class="card-title">'.$value->titre_art.'</h3>
                    <p class="card-text">'.mb_substr($value->contenu_art, 0, 60, "UTF-8").'</p>
                    <input id="VArt" href="/tpPizzeria/article?id='.$value->id_art.'" type="submit" value="Voir Article" name="voir_article">
                    </div>
                </div>
            </div>';
        }
        echo'
        </div>
        </div>
        ';
    }

?>

