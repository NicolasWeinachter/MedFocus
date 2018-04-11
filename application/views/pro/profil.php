<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css" />
    <title>MedFocus</title>
</head>

<body>
	<div id="container1_user">
	 	<header>
	 		<div id="head">
            	<div class="logo"><a href="Accueil2.html"><img src="Logo-01.png" width=200px></a></div>
            	<div class="connexion">
                	<ul id="onglets">
                    	<li><a class="btn btn-outline-info" href="login_user.php" role="button">Mon compte</a></li>
                    	<li><a class="btn btn-outline-info" href="login_med.php" role="button">Professionnel de santé ?</a></li>
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
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="profil_med.php"> Mes coordonnées</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="avis_med.php">Mes retours patients</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="rdv_med.php">Mes rendez-vous</a></button>
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