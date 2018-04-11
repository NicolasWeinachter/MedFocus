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
	<div id="container1">

        <header>
            <div id="head">
                <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo_couleur.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-info" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
                        <li><a class="btn btn-outline-info" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
                    </ul>
                </div>
            </div>
        </header>


    <div id="container2_user">
        <h1>Mon espace personnel</h1>

        <div class="navbar_user">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/profile"); ?>"><FONT COLOR =#FFFFFF> Mes coordonnées</FONT></a></button>
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/avis"); ?>"><FONT COLOR =#FFFFFF> Mes avis</FONT></a></button>
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/rdv"); ?>"><FONT COLOR =#FFFFFF> Mes rendez-vous</FONT></a></button>
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/liste_medecin"); ?>"><FONT COLOR =#FFFFFF>Mes praticiens</FONT></a></button>
            </div>
        </div>

        <br>

        <div id="container3_user">
            <br>
            <div id="container4_user">
                <div class="note_medecin">
                <table class="table">
                    <tr>
                        <td>
                            Nom : <br>
                            Spécialité : <br>
                            Adresse : <br>
                        </td>
                        <td>
                            Note : <br>
                            <br>
                            Autres infos :<br>
                        </td>  
                        <td>
                            <a href="#" class="btn btn-info btn-sm btn-200 btn-center">Prendre un rendez-vous</a>
                            <br>
                            <a href="#">En savoir plus</a>
                        </td>
                    </tr>         
                </table>
            </div>
            <br>
            <div class="avis_medecin">
                <p>AVIIS BLA BLA BLA CETAIT NUL</p>
                <table class="table">
                    <tr>
                        <td><a href="#" class="btn btn-info btn-sm btn-100 btn-center">Modifier</a></td>
                        <td><a href="#" class="btn btn-info btn-sm btn-100 btn-center">Supprimer</a></td>  
                    </tr>   
                </table>
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
