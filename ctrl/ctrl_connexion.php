<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_connexion.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    /* -------------------- Inscription -------------------- */
    if(isset($_POST['add'])){
        $nom = ucfirst(mb_strtolower($_POST['nom_util'], "UTF-8"));
        $prenom = ucfirst(mb_strtolower($_POST['prenom_util'], "UTF-8"));
        $adr = $_POST['adresse_util'];
        $tel = $_POST['tel_util'];
        $mail = $_POST['mail_util'];
        // pour cripter le mot de passe
        $mdp = password_hash($_POST['mdp_util'], PASSWORD_BCRYPT, array("cost" => 10));
        $new = new Utilisateur($nom, $prenom, $adr, $mail, $mdp, $tel);
        $compte = $new->getUserByMail($bdd);
        // on verifie si aucun compte n'a été trouver
        if($compte == null){
            // on ajoute le nouvel utilisateur
            $new->addUser($bdd);
            echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-success text-center fs-5 w-50 shadow rounded">Création de compte réussi</p></div>';
            redirection("/tpPizzeria/connexion", "3000");
        }
        else{
            echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-warning text-center fs-5 w-50 shadow rounded">Création du compte impossible</p></div>';
        }
    }

    /* -------------------- Connexion -------------------- */
    if(isset($_POST['connect'])){
        $mail = $_POST['mail_util'];
        $mdp = $_POST['mdp_util'];
        $new = new Utilisateur(null, null, null, $mail, $mdp, null);
        $compte = $new->getUserByMail($bdd);
        // on verifie si il y a un compte ayant ce mail en BDD 
        if($compte != null){
            // on peut passer à la verification du mot de passe
            if(password_verify($mdp, $compte->mdp_util)){
                // les mots de passe correspondent
                // on initialise les varibles de session
                $_SESSION['id'] = $compte->id_util;
                $_SESSION['nom'] = $compte->nom_util;
                $_SESSION['prenom'] = $compte->prenom_util;
                $_SESSION['adr'] = $compte->adresse_util;
                $_SESSION['tel'] = $compte->tel_util;
                $_SESSION['mail'] = $compte->mail_util;
                $_SESSION['mdp'] = $compte->mdp_util;
                $_SESSION['droit'] = $compte->id_droit;
                $_SESSION['connected'] = true;
                // on redirige vers la page d'accueil
                redirection("/tpPizzeria/", "0");
            }
            else{
                echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-warning text-center fs-5">Informations incorrectes</p></div>';
            }
        }
        else{
            echo '<div class="d-flex justify-content-center"><p class="mt-3 mb-5 py-3 bg-warning text-center fs-5">Informations incorrectes</p></div>';
        }
    }
?>

