<?php
    class Article{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $titre;
        protected $contenu;
        protected $img1;
        protected $img2;
        protected $img3;
        protected $date;
        protected $date_mod;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($titre, $contenu, $img1, $img2, $img3, $date, $date_mod){
            $this->titre = $titre;
            $this->contenu = $contenu;
            $this->img1 = $img1;
            $this->img2 = $img2;
            $this->img3 = $img3;
            $this->date = $date;
            $this->date_mod = $date_mod;
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
         * Get the value of titre
         */ 
        public function getTitre():string{
            return $this->titre;
        }

        /**
         * Set the value of titre
         */ 
        public function setTitre($titre):void{
            $this->titre = $titre;
        }

        /**
         * Get the value of contenu
         */ 
        public function getContenu():string{
            return $this->contenu;
        }

        /**
         * Set the value of contenu
         */ 
        public function setContenu($contenu):void{
            $this->contenu = $contenu;
        }

        /**
         * Get the value of img1
         */ 
        public function getImg1():string{
            return $this->img1;
        }

        /**
         * Set the value of img1
         */ 
        public function setImg1($img1):void{
            $this->img1 = $img1;
        }

        /**
         * Get the value of img2
         */ 
        public function getImg2():string{
                return $this->img2;
        }

        /**
         * Set the value of img2
         */ 
        public function setImg2($img2):void{
            $this->img2 = $img2;
        }

        /**
         * Get the value of img3
         */ 
        public function getImg3():string{
            return $this->img3;
        }

        /**
         * Set the value of img3
         */ 
        public function setImg3($img3):void{
            $this->img3 = $img3;

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
         * Get the value of date_mod
         */ 
        public function getDateMod():string{
            return $this->date_mod;
        }

        /**
         * Set the value of date_mod
         */ 
        public function setDateMod($date_mod):void{
            $this->date_mod = $date_mod;

        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute un article en BDD
        public function addArticle($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO article(titre_art, contenu_art, img_1_art, img_2_art, img_3_art, date_art)
                VALUES(:titre_art, :contenu_art, :img_1_art, :img_2_art, :img_3_art, :date_art);');
                $req->execute(array(
                    "titre_art" => $this->getTitre(),
                    "contenu-art" => $this->getContenu(),
                    "img_1_art" => $this->getImg1(),
                    "img_2_art" => $this->getImg2(),
                    "img_3_art" => $this->getImg3(),
                    "date_art" => $this->getDateMod()
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
                SET titre_art = :titre_art, contenu_art = :contenu_art, img_1_art = :img_1_art, 
                img_2_art = :img_2_art, img_3_art = :img_3_art, date_mod_art = :date_mod_art
                WHERE id_art = :id_art;');
                $req->execute(array(
                    "id_art" => $this->getId(),
                    "titre_art" => $this->getTitre(),
                    "contenu-art" => $this->getContenu(),
                    "img_1_art" => $this->getImg1(),
                    "img_2_art" => $this->getImg2(),
                    "img_3_art" => $this->getImg3(),
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
                WHERE id_art = :id_art;');
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

