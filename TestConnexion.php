<?php
require ('connexion.php');
/* $conn=connexionBD();



if($conn != NULL){
    echo "Connexion BD reussie <br/>";
}else{
    echo "Connection BD échouée <br/>";
}


/* insertHobby("Booby");

$hobbies = selectAllHobbies();

foreach ($hobbies as $hobbie)
echo '<Input type="checkbox">'.$hobbie->Type.'</Input>'; 

$insertMusique = insertMusique("National Antheme");

if($insertMusique === true){
    echo "Insertion OK<br/>";
}elseif($insertMusique === false){
    echo "Insertion pas OK<br/>";
}else{
    echo "Not catched<br/>";
}

insertPersonne("Valjean","Juliette","https://www.google.com/","1983/10/12","Sagitaire");
insertPersonne("Picobello","Julien","https://www.google.com/","1983/10/12","Babaorhum");

$musiques = selectAllMusique();

foreach ($musiques as $musique)
echo '<Input type="checkbox">'.$musique->Type.'</Input><br/>';

$personne = selectPersonneById("12");

echo $personne->Nom."<br/>";


$jeanJackques = selectPersonneByNom("Ju");

foreach ($jeanJackques as $personne){
    echo $personne->Nom."<br/>";
} */


$appliDB = new Connexion;

$appliDB->insertHobby("Bobby");
$hobbies = $appliDB->selectAllHobbies();

foreach ($hobbies as $hobbie)
echo '<Input type="checkbox">'.$hobbie->Type.'</Input>';

$appliDB->insertPersonne("Maskass", "Henriqué", "https:/www.google.com/maskass/","2014/07/07","Gemeaux");

?>