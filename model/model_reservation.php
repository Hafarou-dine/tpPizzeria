<?php
    class Reservation{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $nom;
        protected $mail;
        protected $tel;
        protected $date;
        protected $nbr_couv;
        protected $util;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($id ,$nom, $mail, $tel, $date, $nbr, $util){
            $this->id = $id;
            $this->nom = $nom;
            $this->mail = $mail;
            $this->tel = $tel;
            $this->date = $date;
            $this->nbr_couv = $nbr;
            $this->util = $util;
        }



        /* ---------------------------------------- GETTER & SETTER ---------------------------------------- */
        public function getId():int{
            return $this->id;
        }

        public function setId($id):void{
            $this->id = $id;
        }
        // id util
        public function getIdUtil():int{
            return $this->util;
        }

        public function setIdUtil($util):void{
            $this->util = $util;
        }

        public function getNom():string{
            return $this->nom;
        }

        public function setNom($nom):void{
            $this->nom = $nom;
        }

        public function getMail():string{
            return $this->mail;
        }

        public function setMail($mail):void{
            $this->mail = $mail;
        }

        public function getTel():string{
            return $this->tel;
        } 

        public function setTel($tel):void{
            $this->tel = $tel;
        }

        public function getDate(){
            return $this->date;
        }

        public function setDate($date):void{
            $this->date = $date;
        }

        public function getNbrCouv():int{
            return $this->nbr_couv;
        }
        
        public function setNbrCouv($nbr):void{
            $this->nbr = $nbr;
        }



        /* ---------------------------------------- METHODES ---------------------------------------- */
        // Fonction qui ajoute une r??servation
        public function addRes($bdd):void{
            try{
                $req = $bdd->prepare('INSERT INTO reservation(nom_res, mail_res, tel_res, date_res, nbr_couv_res,id_util)
                VALUES(:nom_res, :mail_res, :tel_res, :date_res, :nbr_couv_res,:id_util)');
                $req->execute(array(
                    'nom_res' => $this->getNom(),
                    'mail_res' => $this->getMail(),
                    'tel_res' => $this->getTel(),
                    'date_res' => $this->getDate(),
                    'nbr_couv_res' => $this->getNbrCouv(),
                    'id_util' => $this->getIdUtil(),
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }


        // Fonction qui compte le nombre de reservation pour une date 
        public function countNbrResByDate($bdd){
            try{
                $req = $bdd->prepare('SELECT count(nbr_couv_res) AS nbr
                FROM reservation
                WHERE date_res LIKE :date_res;');
                $req->execute(array(
                    "date_res" => $this->getDate()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>

