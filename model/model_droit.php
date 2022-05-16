<?php     
    class Droit{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $nom;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */    
        public function __construct($nom){
            $this->nom = $nom;
        }



        /* ---------------------------------------- GETTER & SETTER ---------------------------------------- */
        public function getId():int{
            return $this->id;
        }

        public function setId($id):void{
            $this->id = $id;
        }

        public function getNom():string{
            return $this->nom;
        }
        
        public function setNom($nom):void{
            $this->nom = $nom;
        }


        
        /* ---------------------------------------- METHODES ---------------------------------------- */
        // public function createDroit($bdd):void{
        //     $nom = $this->getNom();
        //     try{
        //         $req = $bdd->prepare('INSERT INTO droit(nom_droit)
        //         VALUES(:nom_droit);');
        //         $req->execute(array(
        //             'nom_droit' => $nom
        //         ));
        //     }
        //     catch(Exception $e){
        //         // affichage d'une exception en cas d’erreur
        //         die('Erreur : '.$e->getMessage());
        //     }
        // }
    }
?>

