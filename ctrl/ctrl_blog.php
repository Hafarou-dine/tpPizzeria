<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_blog.php';

    /* ------------------------------ LOGIQUE ------------------------------ */

    $articles = new Article(null,null,null,null,null,null,null);

    $tab = $articles->getAllArticle($bdd);
    
    if(isset($_SESSION['connected'])){
        if(isset($_SESSION['role']) && ($_SESSION['role'] == 1)){
            foreach($tab as $value){
                echo '
                <div class="col">
                <div class="card shadow mb-5 bg-body rounded" style="width:25%; height:500px">
                    <img src="'.$value->img_art_1.'" 
                    class="card-img-top" alt="..." style="width:100%; height:250px">
                    <div class="card-body">
                    <h5 class="card-title">'.$value->titre_art.'</h5>
                    <p class="card-text"></p>
                        <input id="VArt" href="/tpPizzeria/article?id='.$value->id_art.'" type="submit" value="Voir Article" name="voir_article">
                    </div>
                    <div class="card-footer">
                    <small class="d-flex justify-content-end">
                        <a href="/tpPizzeria/updateArticle?id='.$value->id_art.'"><img src="./asset/image/crayon.png"></a>
                        <a href=""><img src="./asset/image/poubelle.png"></a>
                    </small>
                    </div>
                </div>
                </div>';
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
        foreach($tab as $value){
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
}

?>

