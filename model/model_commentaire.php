<?php
    class Commentaire{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $pseudo_com;
        protected $texte_com;
        protected $date_com;
        protected $id_util;
        protected $id_art;
        


        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($pseudo, $com, $date, $util, $art){
            $this->pseudo_com = $pseudo;
            $this->texte_com = $com;
            $this->date_com = $date;
            $this->id_util = $util;
            $this->id_art = $art;
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
            return $this->pseudo_com;
        }

        /**
         * Set the value of pseudo
         */ 
        public function setPseudo($pseudo):void{
            $this->pseudo_com = $pseudo;
        }

        /**
         * Get the value of com
         */ 
        public function getCom():string{
            return $this->texte_com;
        }

        /**
         * Set the value of com
         */ 
        public function setCom($com):void{
            $this->texte_com = $com;
        }

        /**
         * Get the value of date
         */ 
        public function getDate():string{
            return $this->date_com;
        }

        /**
         * Set the value of date
         */ 
        public function setDate($date):void{
            $this->date_com = $date;
        }

        /**
         * Get the value of util
         */ 
        public function getUtil(){
            return $this->id_util;
        }

        /**
         * Set the value of util
         */ 
        public function setUtil($util):void{
            $this->id_util = $util;
        }

        /**
         * Get the value of art
         */ 
        public function getArt():int{
            return $this->id_art;
        }

        /**
         * Set the value of art
         */ 
        public function setArt($art):void{
            $this->id_art = $art;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute un commentaire
        public function addCom($bdd,$id_util,$id_art){
            try{
                $req = $bdd->prepare('INSERT INTO commentaire(pseudo_com, texte_com, date_com, id_util, id_art)
                VALUES(:pseudo_com, :texte_com, :date_com, :id_util, :id_art);');
                $req->execute(array(
                    "pseudo_com" => $this->getPseudo(),
                    "texte_com" => $this->getCom(),
                    "date_com" => $this->getDate(),
                    "id_util" =>$id_util,
                    "id_art" => $id_art
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
                WHERE id_art = :id_art');
                $req->execute(array(
                    "id_art" => $this->getArt()
                ));
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

