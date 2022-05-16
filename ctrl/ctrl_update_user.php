<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_update_user.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    // on verifie si un utilisateur est connecté
    if(isset($_SESSION['connected'])){
        // on recupere les variable de session
        $id = $_SESSION['id'];
        $nom = $_SESSION['nom'];
        $prenom = $_SESSION['prenom'];
        $adr = $_SESSION['adr'];
        $tel = $_SESSION['tel'];
        $mail = $_SESSION['mail'];
        $mdp = $_SESSION['mdp'];
        // on preremplis les champs du formulaire avec les variable de session creer lors de la connexion
        echo '
        <script>
            fillUser("'.$nom.'", "'.$prenom.'", "'.$adr.'", "'.$tel.'", "'.$mail.'");
        </script>';
        // Modification du compte
        if(isset($_POST['update'])){
            $nom = ucfirst((mb_strtolower($_POST['nom_util'], "UTF-8")));
            $prenom = ucfirst((mb_strtolower($_POST['prenom_util'], "UTF-8")));
            $adr = $_POST['adresse_util'];
            $tel = $_POST['tel_util'];
            // on verifie si un nouveau mdp à été saisie 
            if($_POST['mdp_util'] != ""){
                // on hash la saisie et on la stock dans $mdp
                $mdp = password_hash($_POST['mdp_util'], PASSWORD_BCRYPT, array("cost" => 10));
            }
            $new = new Utilisateur($nom, $prenom, $adr, $mail, $mdp, $tel);
            $new->setId($id);
            // on verifie si le nouveau mail est différent de l'ancien mail
            if($mail != $_POST['mail_util']){
                $compte = $new->getUserByMail($bdd);
                // on verifie si aucun compte correspondant n'a été trouvé en BDD
                if($compte == null){
                    // on set le nouveau mail
                    $new->setMail($_POST['mail_util']);
                    // on peut mettre à jour le compte avec le chagement de mail
                    $new->updateUser($bdd);
                    echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-75">Votre compte à été mis à jour</p></div>';
                }
                else{
                    // sinon on affiche le message d'erreur
                    echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-wargning text-center fs-5 w-75">Informations incorrectes</p></div>';
                }
            }
            else{
                // on fait la mise à jour sans changement de mail
                $new->updateUser($bdd);
                echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-75">Votre compte à été mis à jour</p></div>';
            }
            // on met à jour les variables de session
            $_SESSION['nom'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['adr'] = $adr;
            $_SESSION['tel'] = $tel;
            $_SESSION['mail'] = $mail;
            $_SESSION['mdp'] = $mdp;
            // on refresh la page
            redirection("/tpPizzeria/updateUser", "3000"); 
        }

        // Résiliation du compte
        if(isset($_POST['delete'])){
            // on met le status actif du compte à 0
            $new = new Utilisateur(null, null, null, null, null, null);
            $new->setId($_SESSION['id']);
            $new->deleteUser($bdd);
            // fermeture de la session
            session_destroy();
            // on verifie si le cookie de session existe 
            if(isset($_COOKIE['PHPSESSID'])){
                // suppression du cookie
                unset($_COOKIE['PHPSESSID']);
            }
            // on redirige vers la page d'accueil
            redirection("/tpPizzeria/", "0");
        }
    }
    else{
        // sinon on redirige vers la page d'accueil'
        redirection("/tpPizzeria/connexion", "0");
    }
?>

