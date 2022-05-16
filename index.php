<?php 
    // ouverture de la session
    session_start();


    /* ------------------------------ IMPORT MODELS & UTILITAIRES ------------------------------ */
    include './model/model_article.php';
    include './model/model_commande.php';
    include './model/model_commentaire.php';
    include './model/model_composer.php';
    include './model/model_concerner.php';
    include './model/model_droit.php';
    include './model/model_ingredient.php';
    include './model/model_produit.php';
    include './model/model_reservation.php';
    include './model/model_type.php';
    include './model/model_utilisateur.php';
    include './utils/connectBDD.php';
    include './utils/fonctions.php';

    /* ------------------------------ IMPORT HEADERS ------------------------------ */
    if(isset($_SESSION['connected'])){
        if(isset($_SESSION['role']) && ($_SESSION['role'] == 1)){
            include './view/header_admin.php';
        }
        else{
            include './view/header_connected.php';
        }
    }
    else{
        include './view/header_visiteur.php';
    }

    

    /* ------------------------------ ROUTER ------------------------------ */
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
 

    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        // route /tpPizzeria/carte ->  ./ctrl/ctrl_carte.php
        case $path === "/tpPizzeria/carte":
            include './ctrl/ctrl_carte.php';
            break;
        // route /tpPizzeria/connexion ->  ./ctrl/ctrl_connexion.php
        case $path === "/tpPizzeria/connexion":
            include './ctrl/ctrl_connexion.php';
            break;
        // route /tpPizzeria/deco ->  ./ctrl/ctrl_deco.php
        case $path === "/tpPizzeria/deco":
            include './ctrl/ctrl_deco.php';
            break;
        // route /tpPizzeria/updateUser ->  ./ctrl/ctrl_update_user.php
        case $path === "/tpPizzeria/updateUser":
            include './ctrl/ctrl_update_user.php';
            break;
        // route /tpPizzeria/blog ->  ./ctrl/ctrl_blog.php
        case $path === "/tpPizzeria/blog":
            include './ctrl/ctrl_blog.php';
            break;
        // route /tpPizzeria/article ->  ./ctrl/ctrl_article.php
        case $path === "/tpPizzeria/article":
            include './ctrl/ctrl_article.php';
            break;
        // route /tpPizzeria/addArticle ->  ./ctrl/ctrl_add_article.php
        case $path === "/tpPizzeria/addArticle":
            include './ctrl/ctrl_add_article.php';
            break;
        // route /tpPizzeria/updateArticle ->  ./ctrl/ctrl_update_article.php
        case $path === "/tpPizzeria/updateArticle":
            include './ctrl/ctrl_update_article.php';
            break;
        // route /tpPizzeria/addProduit ->  ./ctrl/ctrl_add_produit.php
        case $path === "/tpPizzeria/addProduit":
            include './ctrl/ctrl_add_produit.php';
            break;
        // route /tpPizzeria/updateProduit ->  ./ctrl/ctrl_update_produit.php
        case $path === "/tpPizzeria/updateProduit":
            include './ctrl/ctrl_update_produit.php';
            break;
        // route /tpPizzeria/addIngred ->  ./ctrl/ctrl_add_ingred.php
        case $path === "/tpPizzeria/addIngred":
            include './ctrl/ctrl_add_ingred.php';
            break;
        // route /tpPizzeria/updateIngred ->  ./ctrl/ctrl_update_ingred.php
        case $path === "/tpPizzeria/updateIngred":
            include './ctrl/ctrl_update_ingred.php';
            break;
        // route /tpPizzeria/allIngred ->  ./ctrl/ctrl_all_ingred.php
        case $path === "/tpPizzeria/allIngred":
            include './ctrl/ctrl_all_ingred.php';
            break;
        // route /tpPizzeria/reserver ->  ./ctrl/ctrl_reserver.php
        case $path === "/tpPizzeria/reserver":
            include './ctrl/ctrl_reserver.php';
            break;
        // route /tpPizzeria/panier ->  ./ctrl/ctrl_panier.php
        case $path === "/tpPizzeria/panier":
            include './ctrl/ctrl_panier.php';
            break;
        // route /tpPizzeria/contact ->  ./view/ctrl_contact.php
        case $path === "/tpPizzeria/contact":
            include './view/view_contact.php';
            break;
        // route /tpPizzeria/ ->  ./view/view_accueil.php
        case $path === "/tpPizzeria/":
            include './view/view_accueil.php';
            break;
        // autre route  ->  ./ctrl/erreur.php
        case $path !== "/tpPizzeria/":
            include './ctrl/ctrl_erreur.php';
            break;
    }

    /* ------------------------------ IMPORT FOOTER ------------------------------ */
    include './view/footer.php';

?>

