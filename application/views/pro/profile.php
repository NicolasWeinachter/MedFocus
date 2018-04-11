<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/medfocus.css"); ?>" >
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.3.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <title>MedFocus</title>
</head>

<body>
	<div id="container1_user">

        <header>
            <div id="head">
                <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-01.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-info" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
                        <li><a class="btn btn-outline-info" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
                    </ul>
                </div>
            </div>
        </header>

    </div>


    <h1>Espace professionnel Dr ...</h1>
    <div id="container2_profile_med">
        <div id="container3_profile_med">

            <img src="notif.png" width=35px height =35px>
            <a href="notif_med.php" class="btn btn-outline-secondary">Notifications</a>

        </div>
        <div class="navbar_user">

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="<?php echo base_url("pro/profile"); ?>"> Mes coordonnées</a></button>
                <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="<?php echo base_url("pro/avis"); ?>">Mes retours patients</a></button>
                <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="<?php echo base_url("pro/rdv"); ?>">Mes rendez-vous</a></button>
            </div>
        </div>
        <br> 

        <div id="container3_user">
        
            <div class="info">
                <table class="table">
                    <tr>
                        <td>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Nom :</li>
                                <li class="list-group-item">Spécialité :</li>
                                <li class="list-group-item">N° RPPS :</li>
                                <li class="list-group-item">Adresse :</li>
                                <li class="list-group-item">Ville :</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Prénom :</li>
                                <li class="list-group-item">Je suis :</li>
                                <li class="list-group-item">Tél professionel :</li>
                                <li class="list-group-item">Email :</li> 
                            </ul>
                        </td>
                    </tr>
                </table>
                <br>
                <a href="#" class="btn btn-info btn-sm text-blanc lien-normal btn-center btn-200">Modifier mes informations</a>
            </div>
        </div>
    </div>

    <footer>
        <div id="containerFin">
            <img class="logo-fin" src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px>
            <table class="table">
                <thead>
                    <tr>
                        <!--coucou -->
                        <th scope="col">MedFocus</th>
                        <th scope="col">CGU</th>
                        <th scope="col">Professionnel de santé ?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a class =" lien-normal text-blanc" href = "<?php echo site_url("home/about"); ?>">A propos de nous<br></a>
                            <a class =" lien-normal text-blanc" href ="<?php echo site_url("home/faq"); ?>">Questions fréquentes<br></a>
                            <a class =" lien-normal text-blanc" href="<?php echo site_url("home/recrutement"); ?>">Recrutement<br></a>
                            <a class =" lien-normal text-blanc" href="<?php echo site_url("home/contact"); ?>">Contact</a>
                        </td>
                        <td>
                            <a class =" lien-normal text-blanc" href = "<?php echo site_url("home/cgu"); ?>">Conditions générales d'utilisation<br></a>
                        </td> 
                        <td>
                            <a class =" lien-normal text-blanc text-blanc" href ="<?php echo site_url("home/services"); ?>">Nos services<br></a>
                            <a class =" lien-normal text-blanc" href ="<?php echo site_url("home/tarifs"); ?>">Nos tarifs<br></a>
                            <a class =" lien-normal text-blanc" href ="<?php echo site_url("home/eds"); ?>">Etablissements de santé<br></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </footer>
</body>
</html>
