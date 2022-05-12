<?php 
    // fermeture de la session
    session_destroy();
    // on verifie si le cookie de session existe 
    if(isset($_COOKIE['PHPSESSID'])){
        // suppression du cookie
        unset($_COOKIE['PHPSESSID']);
    }
    // on redirige vers la page de connexion
    header('Location:/tpblog/login');
?>

