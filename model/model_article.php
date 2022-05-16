<?php
    class Article{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id_art;
        protected $titre_art;
        protected $contenu_art;
        protected $img_art_1;
        protected $img_art_2;
        protected $img_art_3;
        protected $date_art;
        protected $date_mod_art;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($titre, $contenu, $img1, $img2, $img3, $date, $date_mod){
            $this->titre_art = $titre;
            $this->contenu_art = $contenu;
            $this->img_art_1 = $img1;
            $this->img_art_2 = $img2;
            $this->img_art_3 = $img3;
            $this->date_art = $date;
            $this->date_mod_art = $date_mod;
        }

        /* ---------------------------------------- GETTER & SETTER ---------------------------------------- */
        /**
         * Get the value of id
         */ 
        public function getId():int{
            return $this->id_art;
        }

        /**
         * Set the value of id
         */ 
        public function setId($id):void{
            $this->id_art = $id;
        }

        /**
         * Get the value of titre
         */ 
        public function getTitre():string{
            return $this->titre_art;
        }

        /**
         * Set the value of titre
         */ 
        public function setTitre($titre):void{
            $this->titre_art = $titre;
        }

        /**
         * Get the value of contenu
         */ 
        public function getContenu():string{
            return $this->contenu_art;
        }

        /**
         * Set the value of contenu
         */ 
        public function setContenu($contenu):void{
            $this->contenu_art = $contenu;
        }

        /**
         * Get the value of img1
         */ 
        public function getImg1(){
            return $this->img_art_1;
        }

        /**
         * Set the value of img1
         */ 
        public function setImg1($img1):void{
            $this->img_art_1 = $img1;
        }

        /**
         * Get the value of img2
         */ 
        public function getImg2(){
                return $this->img_art_2;
        }

        /**
         * Set the value of img2
         */ 
        public function setImg2($img2):void{
            $this->img_art_2 = $img2;
        }

        /**
         * Get the value of img3
         */ 
        public function getImg3(){
            return $this->img_art_3;
        }

        /**
         * Set the value of img3
         */ 
        public function setImg3($img3):void{
            $this->img_art_3 = $img3;

        }

        /**
         * Get the value of date
         */ 
        public function getDate():string{
            return $this->date_art;
        }

        /**
         * Set the value of date
         */ 
        public function setDate($date):void{
            $this->date_art = $date;
        }

        /**
         * Get the value of date_mod
         */ 
        public function getDateMod():string{
            return $this->date_mod_art;
        }

        /**
         * Set the value of date_mod
         */ 
        public function setDateMod($date_mod):void{
            $this->date_mod_art = $date_mod;

        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute un article en BDD
        public function addArticle($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO article(titre_art, contenu_art, img_art_1, img_art_2, img_art_3, date_art)
                VALUES(:titre_art, :contenu_art, :img_art_1, :img_art_2, :img_art_3, :date_art)');
                $req->execute(array(
                    "titre_art" => $this->getTitre(),
                    "contenu_art" => $this->getContenu(),
                    "img_art_1" => $this->getImg1(),
                    "img_art_2" => $this->getImg2(),
                    "img_art_3" => $this->getImg3(),
                    "date_art" => $this->getDate()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui met à jour un article
        public function updateArticle($bdd){
            try{
                $req = $bdd->prepare('UPDATE article 
                SET titre_art = :titre_art, contenu_art = :contenu_art, img_art_1 = :img_art_1, 
                img_2_art = :img_art_2, img_art_3 = :img_art_3, date_mod_art = :date_mod_art
                WHERE id_art = :id_art;');
                $req->execute(array(
                    "id_art" => $this->getId(),
                    "titre_art" => $this->getTitre(),
                    "contenu-art" => $this->getContenu(),
                    "img_art_1" => $this->getImg1(),
                    "img_art_2" => $this->getImg2(),
                    "img_art_3" => $this->getImg3(),
                    "date_mod_art" => $this->getDate()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui supprime un article
        public function deleteArticle($bdd){
            try{
                $req = $bdd->prepare('DELETE FROM article 
                WHERE id_art = :id_art');
                $req->execute(array(
                    "id_art" => $this->getId(),
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui renvoie un article par son id
        public function getArticleById($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM article 
                WHERE id_art = :id_art;');
                $req->execute(array(
                    "id_art" => $this->getId(),
                ));
                return $req->fetch(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui renvoie tous les articles
        public function getAllArticle($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM article;');
                $req->execute();
                return $req->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

