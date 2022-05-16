<?php
    class Concerner{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $cmd;
        protected $prod;
        protected $qtx;
        protected $taille;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($cmd, $prod, $qtx, $taille){
            $this->cmd  = $cmd;
            $this->prod = $prod;
            $this->qtx = $qtx;
            $this->taille = $taille;
        }



        /* ---------------------------------------- GETTER & SETTER ---------------------------------------- */
        /**
         * Get the value of cmd
         */ 
        public function getCmd():int{
            return $this->cmd;
        }

        /**
         * Set the value of cmd
         */ 
        public function setCmd($cmd):void{
            $this->cmd = $cmd;
        }

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

        /**
         * Get the value of taille
         */ 
        public function getTaille():string{
            return $this->taille;
        }

        /**
         * Set the value of taille
         */ 
        public function setTaille($taille):void{
            $this->taille = $taille;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute une liste d'article à une commande
        public function addConcern($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO concerner(id_cmd, id_prod, qtx_prod, taille_prod)
                VALUES(:id_cmd, :id_prod, :qtx_prod, :taille_prod);');
                $req->execute(array(
                    "id_cmd" =>$this->getCmd(),
                    "id_prod" => $this->getProd(),
                    "qtx_prod" => $this->getQtx(),
                    "taille_prod" => $this->getTaille()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

