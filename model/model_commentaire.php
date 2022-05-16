<?php
    class Commentaire{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $pseudo;
        protected $com;
        protected $date;
        protected $util;
        protected $art;
        


        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($pseudo, $com, $date, $util, $art){
            $this->pseudo = $pseudo;
            $this->com = $com;
            $this->date = $date;
            $this->util = $util;
            $this->art = $art;
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
         * Get the value of pseudo
         */ 
        public function getPseudo():string{
            return $this->pseudo;
        }

        /**
         * Set the value of pseudo
         */ 
        public function setPseudo($pseudo):void{
            $this->pseudo = $pseudo;
        }

        /**
         * Get the value of com
         */ 
        public function getCom():string{
            return $this->com;
        }

        /**
         * Set the value of com
         */ 
        public function setCom($com):void{
            $this->com = $com;
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
         * Get the value of util
         */ 
        public function getUtil(){
            return $this->util;
        }

        /**
         * Set the value of util
         */ 
        public function setUtil($util):void{
            $this->util = $util;
        }

        /**
         * Get the value of art
         */ 
        public function getArt():int{
            return $this->art;
        }

        /**
         * Set the value of art
         */ 
        public function setArt($art):void{
            $this->art = $art;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute un commentaire
        public function addCom($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO commentaire(pseudo_com, text_com, date_com, id_util, id_art)
                VALUES(:pseudo_com, :text_com, :date_com, :id_util, :id_art);');
                $req->execute(array(
                    "pseudo_com" => $this->getPseudo(),
                    "text_com" => $this->getCom(),
                    "date_com" => $this->getDate(),
                    "id_util" => $this->getUtil(),
                    "id_art" => $this->getArt()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui renvoie la liste des commentaires qui ont été publiés sur un article
        public function getAllComByArticle($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM commentaire
                WHERE id_art = :id_art;');
                $req->execute(array(
                    "id_art" => $this->getArt()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

