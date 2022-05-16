<?php
    class Ingredient{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $nom;
        protected $prix;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __constructor($id, $nom, $prix){
            $this->nom = $nom;
            $this->prix = $prix;
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

        public function getPrix():int{
            return $this->prix;
        }

        public function setPrix($prix):void{
            $this->prix = $prix;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // fonction pour voir tout les ingredients
        public function getAllIngred($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM ingredients;');
                $req->execute();
                return $req->fetchAll(PDO::FETCH_OBJ);
            } 
            catch(Exception $e){
                die('Erreur :' .$e->getMessage());
            }
        }

        // Fonction qui renvoie un ingredient 
        public function getIngredById($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM ingredients 
                WHERE id_ing = :id_ing;');
                $req->execute(array(
                    'id_ing' => $this->getId()
                ));
                return $req->fetch(PDO::FETCH_OBJ);
            } 
            catch(Exception $e){
                die('Erreur : ' .$e->getMessage());
            }
        }

        // Fonction pour ajouter un ingredient
        public function addIngred($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO ingredients(nom_ing, prix_ing) 
                VALUES(:nom_ing, :prix_ing);');
                $req->execute(array(
                    'nom_ing' => $this->getNom(),
                    'prix_ing' => $this->getPrix()
                ));
            }
            catch(Exception $e) {
                die('Erreur : ' .$e->getMessage());
            }
        }

        // Fonction pour modifier un ingredient
        public function updateIngred($bdd){
            try{
                $req = $bdd->prepare('UPDATE ingredient SET nom_ing = :nom_ing, prix_ing = :prix_ing 
                WHERE id_ing = :id_ing');
                $req->execute(array(
                    'id_ing' => $this->getId(),
                    'nom_ing' => $this->getNom(),
                    'prix_ing' => $this->getPrix()
                ));
            } 
            catch(Exception $e) {
                die('Erreur : ' .$e->getMessage());
            }
        }

        // Fonction pour supprimer
        public function deleteIngred($bdd){
            try {
                $req = $bdd->prepare('DELETE FROM ingredient 
                WHERE id_ing = :id_ing;');
                $req->execute(array(
                    'id_ing' => $this->getId()
                ));
            }
            catch(Exception $e){
                die('Erreur : ' .$e->getMessage());
            }
        }
    }
?>

