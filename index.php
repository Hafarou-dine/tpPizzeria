<?php 
    // ouverture de la session
    session_start();


    /* ------------------------------ IMPORT MODEL & UTILITAIRES ------------------------------ */
    include './model/model_utilisateur.php';
    include './utils/connectBDD.php';



    /* ------------------------------ ROUTER ------------------------------ */
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
 
 
    /*------------------------------------------- ROUTER -------------------------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        // autre route  ->  ./ctrl/erreur.php
        case $path !== "/tpPizzeria/":
            include './ctrl/ctrl_erreur.php';
            break;
    }

?>

