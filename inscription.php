<?php
    require ('connexion.php');
    $appliDB = new Connexion();
    $personnes = $appliDB->getPersonnes();
    $hobbys=$appliDB->getHobbies();
    $musiques=$appliDB->getMusiques();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <a class="navbar-brand" href="annuaire.php">
            <img src="https://www.freeiconspng.com/uploads/am-a-19-year-old-multimedia-artist-student-from-manila--21.png"
                alt="" height="30" width="30">
            ReannuairE
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="annuaire.php">Annuaire</a>
            </ul>
        </div>
    </nav>

    <form action="minifacebook.php" method="POST" >
        <div class="container-small border shadow-lg p-3 mb-5 bg-white rounded float-left">
            <h1 class="row justify-content-center">INSCRIPTION</h1>
            <div class="row justify-content-center mb-3">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Nom" name="nom">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Prénom" name="prenom">
                </div>

                <div class="col-8 mt-3">
                    <input type="text" class="form-control" placeholder="Url Photo" name="urlphoto">
                </div>
            </div>
        <div class="row justify-content-center mb-3">
            <div class="col-4 text-right">
                <label for="date">Date de naissance : </label>
            </div>
            <div class="col-4">
                <input class="form-control" type="date" id="date" name="date">
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-7">
                    <label for="homme">Marié</label>
                    <input class="mr-3" name="civilite" type="radio" id="homme" value="marie">
                    <label for="femme">Celibataire</label>
                    <input class="mr-3" name="civilite" type="radio" id="femme" value="celibataire">
                    <label for="nonrens">Non renseigné</label>
                    <input class="" name="civilite" type="radio" id="nonrens" value="non renseigne">
                </div>
        </div>
        <div class="row justify-content-center mb-3">
                <div class="col-3 text-right">
                    <label>Hobies : </label>
                </div>
                <div class="float-left">
                    <?php
                    foreach($hobbys as $hobby){

                        echo '<label class=""><input class="mr-3 ml-3" type="checkbox" name="hobby[]" value="'.$hobby->Id.'">'.$hobby->Type.'</label>';
                    }
                    ?>
                </div>
            </div>
        <div class="row justify-content-center mb-3">
                <div class="col-3 text-right">
                    <label>Music : </label>
                </div>
                <div class="">

                    <?php
                        foreach($musiques as $musique){

                            echo '<label class=""><input class="mr-3 ml-3" type="checkbox" name="musique[]" value="'.$musique->Id.'">'.$musique->Type.'</label>';
                        }
                    ?>
               
                </div>
            </div>
        <div class="row justify-content-center mb-3">
            <div class="col-1">
                    <input class="btn btn-success" type="submit" name="Inscription"  value="S'inscrire">
                </div>
            </div>
        </div>
        <div class="container-medium border shadow-lg p-3 mb-5 bg-white rounded float-right">
                        <li class="list-group-item profil-title">
                            <a class="" href="profile.php">
                                LISTE DES RELATIONS
                            </a>
                
                                    <input class="form-control mr-sm-2" id="search" onkeyup="search()" type="search" placeholder="Search" aria-label="Search">
                
                        </li>

                    <ul class="list-group test" id="ulListAmis">
                        <?php

                        foreach($personnes as $personne){
                            echo '<li class="list-group-item">
                            <a class="link-profil" href="profile.php?id='. $personne->Id .'">
                            <img src="'.$personne->URL_Photo.'" width="50" height="50" alt="">
                            '.$personne->Nom.' '.$personne->Prenom.'
                            </a>
                            <select name="relation['.$personne->Id.']" class="float-right ml-5">
                            <option value="">Aucune relation</option>
                            <option value="ami">Ami</option>
                            <option value="famille">Famille</option>
                            <option value="collegue">Collegue</option>
                            </select>
                            </li>';
                        }
                        ?>
                    </ul>
            </div>
    </form>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

        <script>
    function search() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        ul = document.getElementById("ulListAmis");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
}
</script>
</body>

</html>