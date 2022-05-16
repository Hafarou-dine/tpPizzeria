<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_blog.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    $all = new Article(null, null, null, null, null, null, null);
    $liste = $all->getAllArticle($bdd);
    // on verifie si un utilisateur est connecté
    // on ouvre la div qui vacontenir les card article
    echo '<div calss="container d-flex flex-wrap mb-5">';
    if(isset($_SESSION['connected'])){
        // on verifie si cet utilisateur est un Admin
        if(($_SESSION['droit'] == 1)){
            foreach($liste as $val){
                echo '
                <div class="card w-25">
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
                </div>';
                // echo '
                // <div class="col">
                // <div class="card shadow mb-5 bg-body rounded" style="width:25%; height:500px">
                //     <img src="'.$value->img_art_1.'" 
                //     class="card-img-top" alt="..." style="width:100%; height:250px">
                //     <div class="card-body">
                //     <h5 class="card-title">'.$value->titre_art.'</h5>
                //     <p class="card-text"></p>
                //         <input id="VArt" href="/tpPizzeria/article?id='.$value->id_art.'" type="submit" value="Voir Article" name="voir_article">
                //     </div>
                //     <div class="card-footer">
                //     <small class="d-flex justify-content-end">
                //         <a href="/tpPizzeria/updateArticle?id='.$value->id_art.'"><img src="./asset/image/crayon.png"></a>
                //         <a href=""><img src="./asset/image/poubelle.png"></a>
                //     </small>
                //     </div>
                // </div>
                // </div>';
            }
        }
        else{
            foreach($liste as $value){
                echo       
                '<div class="col">
                    <div class="card shadow mb-5 bg-body rounded" style="width:100%; height:500px">
                        <img src="'.$value->img_art_1.'"
                        class="card-img-top" alt="" style="width:100%; height:250px">
                    <div class="card-body">
                        <h5 class="card-title">'.$value->titre_art.'</h5>
                        <p class="card-text"></p>
                        <input id="VArt" href="/tpPizzeria/article?id='.$value->id_art.'" type="submit" value="Voir Article" name="voir_article">
                        </div>
                    </div>
                </div>';
            }
        }
    }
    else{
        foreach($liste as $value){
            echo       
            '<div class="col-4">
                <div class="card shadow mb-5 bg-body rounded" style="width:100%; height:500px">
                    <img src="'.$value->img_art_1.'"
                    class="card-img-top" alt="..." style="width:100%; height:250px">
                <div class="card-body">
                    <h5 class="card-title">'.$value->titre_art.'</h5>
                    <p class="card-text"></p>
                    <input id="VArt" href="/tpPizzeria/article?id='.$value->id_art.'" type="submit" value="Voir Article" name="voir_article">
                    </div>
                </div>
            </div>';
    }
    echo '</div>';
}

?>

