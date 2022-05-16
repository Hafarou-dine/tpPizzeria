<?php
    class Type{
        /* ---------------------------------------- ATTRIBUTS ---------------------------------------- */
        protected $id;
        protected $nom;



        /* ---------------------------------------- CONSTRUCTEUR ---------------------------------------- */
        public function __construct($nom){
            $this->nom = $nom;
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


        
        /* ---------------------------------------- METHODES ---------------------------------------- */
        // // Fonction qui permet de creer un type
        // public function createType($bdd):void{
        //     $nom = $this->getNom();
        //     try{
        //         $req = $bdd->prepare('INSERT INTO type(nom_type) 
        //         VALUES(:nom_type);');
        //         $req->execute(array(
        //             'nom_type' => $nom
        //             ));
        //     }
        //     catch(Exception $e){
        //         die('Erreur : '.$e->getMessage());
        //     }
        // }

        // /*---UPDATE TYPE---*/
        // public function updateType($bdd){
        //     $nom = $this->getNomType();
        //     $id = $this->getIdType();
        //     try{
        //         $req = $bdd->prepare('UPDATE type SET nom_type = :nom_type,
        //         WHERE id_type = :id_type');
        //         $req->execute(array(
        //             'id_type' =>$id,
        //             'nom_type' => $nom,
        //             ));
        //     }
        //     catch(Exception $e)
        //     {
        //         die('Erreur : '.$e->getMessage());
        //     }
        // }

        // /*---DELETE TYPE---*/
        // public function deleteType($bdd){
        //     $id = $this->getIdType();        
        //     try{
        //         $req = $bdd->prepare('DELETE FROM type WHERE id_type = :id_type');
        //         $req->execute(array(
        //             'id_type' => $id
        //             ));
        //     }
        //     catch(Exception $e)
        //     {
        //         die('Erreur : '.$e->getMessage());
        //     }
        // }

        
        // /*---SHOW ALL TYPE---*/
        public function showAllType($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM type');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }

        // /*---SHOW TYPE BY ID---*/
        // public function showTypeById($bdd,$id):array{
        //     try {
        //         $req = $bdd->prepare('SELECT * FROM type WHERE id_type =:id_type');
        //         $req->execute(array(
        //             'id_type'=> $id
        //         ));
        //         $data = $req->fetchAll(PDO::FETCH_OBJ);
        //         return $data;
        
        //     } catch (Exception $e) {
        //         die('Erreur :' .$e->getMessage());
        //     }
        // }
    }
?>

