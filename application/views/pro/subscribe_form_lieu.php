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
            	<div class="logo"><a href="Accueil2.html"><img src="logo-01.png" width=200px></a></div>
            	<div class="connexion">
                	<ul id="onglets">
                    	<li><a class="btn btn-outline-info" href="login_user.php" role="button">Mon compte</a></li>
                    	<li><a class="btn btn-outline-info" href="login_med.php" role="button">Professionnel de santé ?</a></li>
                	</ul>
            	</div>
        	</div>
        </header>
    </div>

    <div id="container2_user">
        <h1>Création de votre compte professionnel</h1>

        <div id="container3_subscribe_med">
            <ul class="nav border-round nav-fill">
                    <li class="nav-item">
                    <a class="nav-link text-info" href="subscribe_form_med_presentation.php">Présentation</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-info" href="subscribe_form_med_honoraires.php">Honoraires</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link bouton-bleu text-blanc" href="subscribe_form_med_lieu.php">Lieu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-info" href="subscribe_form_med_contact.php">Contact</a>
                    </li>
            </ul>
        <br>
        <h2> Votre lieu de travail </h2>
        <div id="container4_subscribe_med">

        <div id="container5_subscribe_med">
        <form id="form">
        <div class="form-group">
            <label for="inputRPPS">Numéro de la rue</label>
            <input type="text" class="form-control" id="inputRPPS" placeholder="N°....">
            </div>
        <div class="form-group">
            <label for="inputRPPS">Nom de la rue</label>
            <input type="text" class="form-control" id="inputRPPS" placeholder="Rue ...">
            </div>
        Informations pratiques : <br>
        <form action="/action_page.php" method="get">
  <input type="checkbox" name="Parking" > Parking <br>    
  <input type="checkbox" name="handicapés" > Accès handicapés <br>

    </form>
</div>
        <div id="container6_subscribe_med">
          <form id="form">
        <div class="form-group">
            <label for="inputRPPS">Ville</label>
            <input type="text" class="form-control" id="inputRPPS" placeholder="Paris, Lyon, ...">
            </div>
        <div class="form-group">
            <label for="inputRPPS">Code postal</label>
            <input type="text" class="form-control" id="inputRPPS">
            </div>
        <button type="button" class="btn btn-info bouton-droite"><a class="lien-normal text-blanc" href="subscribe_form_med_contact.php">Etape suivante</a></button>
        </form>

    </div>
</div>
</div>
</div>
</body>
</html>
