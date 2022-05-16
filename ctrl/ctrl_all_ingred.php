<?php
    /* ------------------------------ IMPORT VIEW ------------------------------ */
    include './view/view_all_ingred.php';

    /* ------------------------------ LOGIQUE ------------------------------ */
    //message d'erreur
    // if(isset($_SESSION['connected'])== true){
    $msg = "";
    //instancier un nouvel objet
    $new = new Ingredient(null, null);
    //stocke dans un tableau la liste des articles de la BDD
    $tab = $new->getAllIngred($bdd);
    //boucle pour afficher la liste des articles (avec le nom et le prix)
    foreach($tab as $value){
//         // <span></span>
//         <div class="d-flex bd-highlight mb-3">
//   <div class="me-auto p-2 bd-highlight">Flex item</div>
//   <div class="p-2 bd-highlight">Flex item</div>
//   <div class="p-2 bd-highlight">Flex item</div>
// </div
        // echo '<div class="list-group w-50 mx-auto d-flex justify-content-center">';
        // echo '
        // <li class="list-group-item text-center d_flex justify-content-between ">
        //     <a href="/tpPizzeria/updateIngred?id='.$value->id_ing.'" style="text-decoration:none;">'.$value->nom_ing.' '.$value->prix_ing.'€
        //         <img src="https://img.icons8.com/dusk/20/000000/edit--v1.png"/>
        //     </a>
        //     <a href="/tpPizzeria/allIngred?id='.$value->id_ing.'" style="text-decoration:none;">
        //         <img src="https://img.icons8.com/dusk/20/000000/filled-trash.png"/>
        //     </a>
        // </li>';
        // echo '</div>';
          echo '<div class="d-flex bd-highlight mb-3">';
        echo '
        <li class="me-auto p-2 bd-highlight ">
            <a href="/tpPizzeria/updateIngred?id='.$value->id_ing.'" style="text-decoration:none;">'.$value->nom_ing.' '.$value->prix_ing.'€
                <img src="https://img.icons8.com/dusk/20/000000/edit--v1.png"/>
            </a>
            </li>
            <a href="/tpPizzeria/allIngred?id='.$value->id_ing.'" style="text-decoration:none;">
                <img src="https://img.icons8.com/dusk/20/000000/filled-trash.png"/>
            </a>
        </li>';
        echo '</div>';

    }

    //test si on a cliquer sur la poubelle
    if(isset($_GET['id'])){
        $new->setId($_GET['id']);
        $new->deleteIngred($bdd);
        redirection("/tpPizzeria/allIngred", "0");
    }

    // //test si un article à été supprimé
    // if(isset($_GET['del']) AND $_GET['del'] !=""){
    //     //message d'erreur
    //     $msg = 'Article '.$_GET['del'].' à été supprimé';
    //     //refresh de la page 1500 ms en JS
    //     echo "<script>
    //         setTimeout(()=>{
    //             document.location.href='/tpPizzeria/allIngred'; 
    //             }, 1500);
    //     </script>";
    // }


    //affichage fin de la liste zone message erreur et 
    //script affichage des messages d'erreurs
    // echo "</ul>
    // <p id='msg'></p>
    // <script>
    //     document.querySelector('#msg').innerHTML = '$msg';
    // </script>
    // </body>
    // </html>";
// }
// else{
//     header('Location: /tpPizzeria/connexion');
// }
?>