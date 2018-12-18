<?php
 require_once ('connexion.php');
 
 var_dump($_POST);
 
 function inscription(){
     $appliDB = new Connexion();
     $musiquesId=$_POST['musique'];
     $hobbysId=$_POST['hobby'];
     $relationTypes=$_POST['relation'];
     
    $appliDB->setPersonne($_POST['nom'],$_POST['prenom'],$_POST['urlphoto'],$_POST['date'],$_POST['civilite']);
    $personne_id=$appliDB->getLastId();

    foreach($hobbysId as $hobbyId){

        $appliDB->setPersonneHobby($personne_id,$hobbyId);
    }

    foreach($musiquesId as $musiqueId){
        $appliDB->setPersonneMusique($personne_id,$musiqueId);
    }

    foreach ($relationTypes as $relationId => $relationType){
        if($relationType != ""){
            $appliDB->setPersonneRelation($personne_id,$relationId,$relationType);
        }
    }

    header("location:profile.php?id=".$personne_id);
 }
 
inscription();


?>