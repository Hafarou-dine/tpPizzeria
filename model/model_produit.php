<?php
    class Produit{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $nom;
        protected $desc;
        protected $img;
        protected $prix;
        protected $type;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __constructor($id, $nom, $desc, $img, $prix, $type){
            $this->nom = $nom;
            $this->desc = $desc;
            $this->img = $img;
            $this->prix = $prix;
            $this->type = $type;
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

        public function getDesc():string{
            return $this->desc;
        }

        public function setDesc($desc):void{
            $this->desc = $desc;
        }

        public function getImg():string{
            return $this->img;
        }

        public function setImg($img):void{
            $this->img = $img;
        }

        public function getPrix():float{
            return $this->prix;
        }

        public function setPrix($prix):void{
            $this->prix = $prix;
        }

        public function getType():int{
            return $this->type;
        }

        public function setType($type):void{
            $this->type = $type;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction d'ajout d'un produit
        public function addProduit($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO produit(nom_prod, desc_prod, img_prod, prix_prod, id_type)
                VALUES (:nom_prod, :desc_prod, :img_prod, :prix_prod, :id_type);');
                $req->execute(array(
                    'nom_prod'=> $this->getNom(),
                    'desc_prod' => $this->getDesc(),
                    'img_prod' => $this->getImg(),
                    'prix_prod' => $this->getPrix(),
                    'id_type' => $this->getType()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction de mise à jour d'un produit
        public function updatePorduit($bdd){
            try{
                $req = $bdd->prepare('UPDATE produit SET nom_prod = :nom_prod, desc_prod = :desc_prod, 
                img_prod = :img_prod, prix_prod = :prix_prod, id_type = :id_type 
                WHERE id_prod = :id_prod;');
                $req->execute(array(
                    'id_prod'=> $this->getId(),
                    'nom_prod'=> $this->getNom(),
                    'desc_prod' => $this->getDesc(),
                    'img_prod' => $this->getImg(),
                    'prix_prod' => $this->getPrix(),
                    'id_type' => $this->getType()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction de suppression d'un produit
        public function deletePorduit($bdd){
            try{
                $req = $bdd->prepare('DELETE FROM produit 
                WHERE id_prod = :id_prod');
                $req->execute(array(
                    'id_prod'=> $this->getId()
                ));
            } 
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui renvoie un produit par son id
        public function getProduitById($bdd,$id){
            try{
                $req = $bdd->prepare('SELECT * FROM produit 
                WHERE id_prod = :id_prod');
                $req->execute(array(
                    'id_prod'=> $id
                ));
                return $req->fetch(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
        // fonction pour récupérer tout les produits 
        public function showAllProduitByType($bdd,$idType){
            try {
                $req = $bdd->prepare('SELECT * FROM produit WHERE id_type=:id_type');
                $req->execute(array(
                    'id_type' => $idType
                ));
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            } catch (Exception $e) {
                die('Erreur :' .$e->getMessage());
            }
        }

        // fonction pour voir tout les produits par categorie
        public function showAllProduit($bdd, $type){
            try {
                $req = $bdd->prepare('SELECT * FROM produit
                INNER JOIN pizzeria.type
                WHERE produit.id_type = pizzeria.type.id_type
                AND nom_type = :nom_type;');
                $req->execute(array(
                    "nom_type" => $type
                ));
                return $req->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur :' .$e->getMessage());
            }
        }
    }
?>

