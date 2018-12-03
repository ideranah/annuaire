<?php

class Connexion {

        private $connexion;

        public function __construct(){
           
            $PARAM_hote='localhost';
            $PARAM_port='3306';
            $PARAM_nom_bd='annuaire';
            $PARAM_utilisateur='redi';
            $PARAM_mot_passe='digital2018';
            
            try{
                
                $this->connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd,$PARAM_utilisateur,$PARAM_mot_passe);
                
            }catch(Exception $e){

                echo 'Erreur : '.$e->getMessage().'<br />';
                echo 'N° : '.$e->getCode();
                
            }
        }
    
        public function setHobby(string $hobby){
        
            $requete_prepare =$this->connexion->prepare("INSERT INTO Hobby (Type) values (:hobby)");
            
            $requete_prepare->execute(array( 'hobby' => "$hobby"));
                
        }

            
        public function getHobbies(){
        
            $requete_prepare =$this->connexion->prepare("SELECT Type FROM Hobby");
        
            $requete_prepare->execute();
            
            $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);
            
            return $resultat;   
        }

        public function setMusique(string $style){
                
            try{
                $requete_prepare = $this->connexion->prepare("INSERT INTO Musique (Type) values (:style)");
                
                $requete_prepare->execute(array('style' => "$style"));
                            
            }catch(Exeption $e){
                echo 'Erreur : '.$e->getMessage().'<br />';
                echo 'N° : '.$e->getCode();
                return false;
            }

            return true;
        }
                    
        public function getMusiques(){
            
            $requete_prepare = $this->connexion->prepare("SELECT Type FROM Musique");
                
            $requete_prepare->execute();
                
            $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);
   
            return $resultat; 
        }
        
        public function insertPersonne($Nom, $Prenom, $URL_Photo, $Date_Naissance, $Status){
                        
            $requete_prepare = $this->connexion->prepare(
                "INSERT INTO Personne (Nom,Prenom,URL_Photo,Date_Naissance,Statut_couple) values (:nom,:prenom,:url_photo,:date_naissance,:status_couple)");
                
            $requete_prepare->execute(
                array('nom' => "$Nom",'prenom' => "$Prenom",'url_photo' => "$URL_Photo",'date_naissance' => "$Date_Naissance",'status_couple' => "$Status"));
        }
        
        
            
            
        public function selectPersonneById(int $id){
                
            $requete_prepare=$this->connexion->prepare(
                "SELECT * FROM Personne WHERE Id = :id");
                    
            $requete_prepare->execute(array("id"=>$id));
                    
            $resultat=$requete_prepare->fetch(PDO::FETCH_OBJ);
                    
            return $resultat;
        }
                
        public function selectPersonneByNom(string $pattern){
                    
            $requete_prepare=$this->connexion->prepare("SELECT * FROM Personne WHERE Nom LIKE :nom OR Prenom LIKE :prenom");
    
            $requete_prepare->execute(array("nom"=>"%$pattern%","prenom"=>"%$pattern%"));

            $resultat=$requete_prepare->fetchAll(PDO::FETCH_OBJ);
        
        return $resultat;
    }
}
    ?>