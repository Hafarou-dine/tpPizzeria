<?php 
    class Utilisateur{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $nom;
        protected $prenom;
        protected $adresse;
        protected $mail;
        protected $mdp;
        protected $tel;
        protected $activ;
        protected $droit;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($nom, $prenom, $adresse, $mail, $mdp, $tel){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->adresse = $adresse;
            $this->mail = $mail;
            $this->mdp = $mdp;
            $this->tel = $tel;
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
         * Get the value of nom
         */ 
        public function getNom():string{
            return $this->nom;
        }

        /**
         * Set the value of nom
         */ 
        public function setNom($nom):void{
            $this->nom = $nom;
        }

        /**
         * Get the value of prenom
         */ 
        public function getPrenom():string{
            return $this->prenom;
        }

        /**
         * Set the value of prenom
         */ 
        public function setPrenom($prenom):void{
            $this->prenom = $prenom;
        }

        /**
         * Get the value of adresse
         */ 
        public function getAdresse():string{
            return $this->adresse;
        }

        /**
         * Set the value of adresse
         */ 
        public function setAdresse($adresse):void{
            $this->adresse = $adresse;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail():string{
            return $this->mail;
        }

        /**
         * Set the value of mail
         */ 
        public function setMail($mail):void{
            $this->mail = $mail;
        }

        /**
         * Get the value of mdp
         */ 
        public function getMdp():string{
            return $this->mdp;
        }

        /**
         * Set the value of mdp
         */ 
        public function setMdp($mdp):void{
            $this->mdp = $mdp;
        }

        /**
         * Get the value of tel
         */ 
        public function getTel():string{
            return $this->tel;
        }

        /**
         * Set the value of tel
         */ 
        public function setTel($tel):void{
            $this->tel = $tel;
        }

        /**
         * Get the value of activ
         */ 
        public function getActiv():bool{
            return $this->activ;
        }

        /**
         * Set the value of activ
         */ 
        public function setActiv($activ):void{
            $this->activ = $activ;
        }

        /**
         * Get the value of droit
         */ 
        public function getDroit():int{
            return $this->droit;
        }

        /**
         * Set the value of droit
         */ 
        public function setDroit($droit):void{
            $this->droit = $droit;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute un nouvel utilisateur
        public function addUser($bdd){
            try{
                $req = $bdd->prepare('INSERT INTO utilisateur(nom_util, prenom_util, adresse_util, mail_util, mdp_util, tel_util) 
                VALUES(:nom_util, :prenom_util, :adresse_util, :mail_util, :mdp_util, :tel_util);');
                $req->execute(array(
                    "nom_util" => $this->getNom(),
                    "prenom_util" => $this->getPrenom(),
                    "adresse_util" => $this->getAdresse(),
                    "mail_util" => $this->getMail(),
                    "mdp_util" => $this->getMdp(),
                    "tel_util" => $this->getTel()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui met à jour un compte utilisateur
        public function updateUser($bdd){
            try{
                $req = $bdd->prepare('UPDATE utilisateur
                SET nom_util = :nom_util, prenom_util = :prenom_util, adresse_util = :adresse_util, mail_util = :mail_util, mdp_util = :mdp_util, tel_util = :tel_util
                WHERE id_util = :id_util;');
                $req->execute(array(
                    "id_util" => $this->getId(),
                    "nom_util" => $this->getNom(),
                    "prenom_util" => $this->getPrenom(),
                    "adresse_util" => $this->getAdresse(),
                    "mail_util" => $this->getMail(),
                    "mdp_util" => $this->getMdp(),
                    "tel_util" => $this->getTel()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui supprime un compte utilisateur (on passe l'attribut activ_util à 0 pour rendre le compte non actif)
        public function deleteUser($bdd){
            try{
                $req = $bdd->prepare('UPDATE utilisateur
                SET activ_util = 0
                WHERE id_util = :id_util;');
                $req->execute(array(
                    "id_util" => $this->getId(),
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui renvoie un utilisateur actif par son mail
        public function getUserByMail($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM utilisateur
                WHERE mail_util = :mail_util
                AND activ_util = :activ_util;');
                $req->execute(array(
                    "mail_util" => $this->getMail(),
                    "activ_util" => 1
                ));
                return $req->fetch(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

