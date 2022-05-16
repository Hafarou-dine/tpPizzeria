<?php
    class Commande{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $date;
        protected $livraison;
        protected $util;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */ 
        public function __construct($date, $livraison, $util){
            $this->date = $date;
            $this->livraison = $livraison;
            $this->util = $util;
        }



        /* ---------------------------------------- GETTER & SETTER ---------------------------------------- */
        /**
         * Get the value of id
         */ 
        public function getId():int{
            return $this->id;
        }

        /**
         * Set the value of id
         */ 
        public function setId($id):void{
            $this->id = $id;
        }

        /**
         * Get the value of date
         */ 
        public function getDate():string{
            return $this->date;
        }

        /**
         * Set the value of date
         */ 
        public function setDate($date):void{
            $this->date = $date;
        }

        /**
         * Get the value of livraison
         */ 
        public function getLivraison():bool{
            return $this->livraison;
        }

        /**
         * Set the value of livraison
         */ 
        public function setLivraison($livraison):void{
            $this->livraison = $livraison;
        }

        /**
         * Get the value of util
         */ 
        public function getUtil():int{
            return $this->util;
        }

        /**
         * Set the value of util
         */ 
        public function setUtil($util):void{
            $this->util = $util;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute une commande
        public function addCmd($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO commande(date_cmd, livraison, id_util)
                VALUES(:date_cmd, :livraison, :id_util);');
                $req->execute(array(
                    "date_cmd" => $this->getDate(),
                    "livraison" => $this->getLivraison(),
                    "id_util" => $this->getUtil()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

