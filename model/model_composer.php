<?php
    class Composer{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $prod;
        protected $ing;
        protected $qtx;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($prod, $ing, $qtx){
            $this->prod = $prod;
            $this->ing = $ing;
            $this->qtx = $qtx;
        }



        /* ---------------------------------------- GETTER & SETTER ---------------------------------------- */
        /**
         * Get the value of prod
         */ 
        public function getProd():int{
            return $this->prod;
        }

        /**
         * Set the value of prod
         */ 
        public function setProd($prod):void{
            $this->prod = $prod;
        }

        /**
         * Get the value of ing
         */ 
        public function getIng():int{
            return $this->ing;
        }

        /**
         * Set the value of ing
         */ 
        public function setIng($ing):void{
            $this->ing = $ing;
        }

        /**
         * Get the value of qtx
         */ 
        public function getQtx():int{
            return $this->qtx;
        }

        /**
         * Set the value of qtx
         */ 
        public function setQtx($qtx):void{
            $this->qtx = $qtx;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajout une composition
        public function addCompo($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO composer(id_prod, id_ing, qtx) 
                VALUES(:id_prod, :id_ing, :qtx);');
                $req->execute(array(
                    "id_prod" => $this->getProd(),
                    "id_ing" => $this->getIng(),
                    "qtx" => $this->getQtx()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

