<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_blog.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    $all = new Article(null, null, null, null, null, null, null);
    $tab = $all->getAllArticle($bdd);
    // on verifie si un utilisateur est connecté
    // on ouvre la div qui vacontenir les card article
    echo '<div calss="container d-flex flex-wrap">
    <div class="row gy-2 d-flex justify-content-evenly">';
    if(isset($_SESSION['connected'])){
        // on verifie si cet utilisateur est un Admin
        if(($_SESSION['droit'] == 1)){
            foreach($liste as $val){
                echo '
                <div class="col-sm-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">'.$val->titre_art.'</h5>
                            <p class="card-text">'.mb_substr($val->contenu_art, 0, 60, "UTF-8").'</p>
                            <div class="d-flex justify-content-between">
                                <div><a href="/tpPizzeria/article?id='.$val->id_art.'" class="btn btn-primary">Voir</a></div>
                                <div>
                                    <a href="/tpPizzeria/updateArticle?id='.$val->id_art.'" class="btn btn-primary me-2"><img src="https://img.icons8.com/dusk/20/000000/edit--v1.png"/></a>
                                    <a href="/tpPizzeria/blog?id='.$val->id_art.'" class="btn btn-primary"><img src="https://img.icons8.com/dusk/20/000000/filled-trash.png"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }        
        }
        else{
            foreach($liste as $val){
                echo '
                <div class="col-sm-3 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">'.$val->titre_art.'</h5>
                            <p class="card-text">'.mb_substr($val->contenu_art, 0, 60, "UTF-8").'</p>
                            <div><a href="/tpPizzeria/article?id='.$val->id_art.'" class="btn btn-primary">Voir</a></div>
                        </div>
                    </div>
                </div>';
            }
        }
    }
    else{
        foreach($liste as $val){
            echo '
            <div class="col-sm-3 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'.$val->titre_art.'</h5>
                        <p class="card-text">'.mb_substr($val->contenu_art, 0, 60, "UTF-8").'</p>
                        <div><a href="/tpPizzeria/article?id='.$val->id_art.'" class="btn btn-primary">Voir</a></div>
                    </div>
                </div>
            </div>';
        }
    }
    echo '</div></div>';
?>

