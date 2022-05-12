<?php
    // Fonction de redirection vers une page avec un delai en ms
    function redirection($dest, $duree){
        echo '
        <script>
            setTimeout(()=>{
                document.location.href="'.$dest.'"; 
            }, '.$duree.');
        </script>';
    }
?>

