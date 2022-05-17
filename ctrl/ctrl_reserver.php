<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_reserver.php';

    /* ------------------------------ LOGIQUE ------------------------------ */

    $reservation = new Reservation(null,null,null,null,null,null,null);
    




    if (isset($_POST['nom_res']) && !empty($_POST['nom_res'])
    && isset($_POST['mail_res']) && !empty($_POST['mail_res'])
    && isset($_POST['tel_res']) && !empty($_POST['tel_res'])
    && isset($_POST['nbr_adulte_res']) && !empty($_POST['nbr_adulte_res'])
    && isset($_POST['nbr_enfant_res']) && !empty($_POST['nbr_enfant_res'])
    && isset($_POST['date_res']) && !empty($_POST['date_res'])
    && isset($_SESSION['id'])) {

        
        $enfant= $_POST['nbr_enfant_res'];
        $adulte = $_POST['nbr_adulte_res'];


        $nom = $_POST['nom_res'];
        $mail = $_POST['mail_res'];
        $tel = $_POST['tel_res'];
        $date = $_POST['date_res'];
        $nbr = $enfant + $adulte;
        $util = $_SESSION['id'];
        var_dump($nbr);

        if ($nbr>30) {
            echo '<h1>merci de reserver par téléphone<h1>';
        }else {
            $reservation->setIdUtil($util);
            $reservation->setNom($nom);
            $reservation->setMail($mail);
            $reservation->setTel($tel);
            $reservation->setDate($date);
            $reservation->setNbrCouv($nbr);

            //----------------------- PB SUR LA RESERVATION ENREGISTRE PAS LE NBR DE PARTICIPANT ////////////// 
            // $nbrPlace = $reservation->countNbrResByDate($bdd);
            // var_dump($nbrPlace);


            $reservation->addRes($bdd);



            echo '<h1>Merci '.$reservation->getNom().' votre reservation est enregistré <h1>';
    
        }
        





    }
    



?>

