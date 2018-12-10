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

    <form>
        <div class="container-small border shadow-lg p-3 mb-5 bg-white rounded float-left">
            <h1 class="row justify-content-center">INSCRIPTION</h1>
            <div class="row justify-content-center mb-3">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Nom">
                </div>
                <div class="col-4">
                <input type="text" class="form-control" placeholder="Prénom      ">
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-4 text-right">
                <label for="date">Date de naissance : </label>
            </div>
            <div class="col-4">
                <input class="form-control" type="date" id="date">
            </div>
        </div>
        <div class="row justify-content-center mb-3">
            <div class="col-7">
                    <label for="homme">Homme</label>
                    <input class="mr-3" name="sexe" type="radio" id="homme">
                    <label for="femme">Femme</label>
                    <input class="mr-3" name="sexe" type="radio" id="femme">
                    <label for="nonrens">Non renseigné</label>
                    <input class="" name="sexe" type="radio" id="nonrens">
                </div>
        </div>
        <div class="row justify-content-center mb-3">
                <div class="col-3 text-right">
                    <label>Hobies : </label>
                </div>
                <div class="col-3">
                    <label class=""><input class="mr-1" type="checkbox">Football</label>
                    <label class=""><input class="mr-1" type="checkbox">Bootball</label>
                    <label class=""><input class="mr-1" type="checkbox">Tootball</label>
                    <label class=""><input class="mr-1" type="checkbox">Mootball</label>
                    <label class=""><input class="mr-1" type="checkbox">Pootball</label>
                    <label class=""><input class="mr-1" type="checkbox">Rootball</label>
                </div>
            </div>
        <div class="row justify-content-center mb-3">
                <div class="col-3 text-right">
                    <label>Music : </label>
                </div>
                <div class="col-3">
                    <label class=""><input class="mr-1" type="checkbox">Classic</label>
                    <label class=""><input class="mr-1" type="checkbox">Jazz</label>
                    <label class=""><input class="mr-1" type="checkbox">Rock</label>
                    <label class=""><input class="mr-1" type="checkbox">Electronic</label>
                    <label class=""><input class="mr-1" type="checkbox">Folk</label>
                    <label class=""><input class="mr-1" type="checkbox">Reggae</label>
                </div>
            </div>
        <div class="row justify-content-center mb-3">
            <div class="col-1">
                    <input class="btn btn-success" type="submit" name="Inscription"  value="S'inscrire">
                </div>
            </div>
        </div>
        <div class="container-medium border shadow-lg p-3 mb-5 bg-white rounded float-right">
                <ul class="list-group">
                        <li class="list-group-item profil-title">
                            <a class="" href="profile.html">
                                LISTE DES RELATIONS
                            </a>
                            <form class="form-inline my-3 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-3 my-sm-3 float-right" type="submit">Search</button>
                            </form>
                        </li>
                        <li class="list-group-item">
                            <a class="link-profil" href="profile.html">
                                <img src="https://avatarfiles.alphacoders.com/547/54795.jpg" width="50" height="50" alt="">
                                Valerie Lemercier
                            </a>
                            <select name="relation" class="float-right ml-5">
                                    <option value="">Aucune relation</option>
                                    <option value="ami">Ami</option>
                                    <option value="famille">Famille</option>
                                    <option value="collegue">Collegue</option>
                            </select>
                        </li>
                        <li class="list-group-item">
                            <a href="profile.html">
                                <img src="http://s3.amazonaws.com/cdn.roosterteeth.com/uploads/images/9cb43cf1-68de-4c64-af3a-151ffce45b27/original/1353379-1439487753997-Bender-Avatar.png" width="50" height="50" alt="">
                                Aalerie Lemercier
                            </a>
                            <select name="relation" class="float-right">
                                <option value="">Aucune relation</option>
                                <option value="ami">Ami</option>
                                <option value="famille">Famille</option>
                                <option value="collegue">Collegue</option>
                            </select>
                        </li>
                        <li class="list-group-item">
                            <a href="profile.html">
                                <img src="https://pbs.twimg.com/profile_images/817411634113040385/x3omzI6x_400x400.jpg" width="50" height="50" alt="">
                                Balerie Lemercier
                            </a>
                            <select name="relation" class="float-right">
                                    <option value="">Aucune relation</option>
                                    <option value="ami">Ami</option>
                                    <option value="famille">Famille</option>
                                    <option value="collegue">Collegue</option>
                            </select>
                        </li>
                        <li class="list-group-item">
                            <a href="profile.html">
                                <img src="https://pbs.twimg.com/profile_images/1151117177/parallel_pic.png" width="50" height="50" alt="">
                                Calerie Lemercier
                            </a>
                            <select name="relation" class="float-right"> 
                                    <option value="">Aucune relation</option>
                                    <option value="ami">Ami</option>
                                    <option value="famille">Famille</option>
                                    <option value="collegue">Collegue</option>
                            </select>
                        </li>
                    </ul>
            </div>
    </form>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>