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
                    <a class="nav-link text-info" href="subscribe_form_med_lieu.php">Lieu</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link bouton-bleu text-blanc" href="subscribe_form_med_contact.php">Contact</a>
                    </li>
            </ul>
        <br>
        <h2> Contact et secrétariat </h2>
        <div id="container4_subscribe_med">
        <div id="container5_subscribe_med">
        <form id="form">
        <div class="form-group">
            <label for="inputMail">Adresse email</label>
            <input type="mail" class="form-control" id="inputMail" placeholder="contact@contact.com">
            </div>
        Horaires de votre secrétariat : <br>
         <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputNumber">Ouverture</label>
            <input type="text" class="form-control" id="inputNumber" placeholder="9h00">
            </div>
            <div class="form-group col-md-6">
            <label for="inputNumber">Fermeture</label>
            <input type="text" class="form-control" id="inputNumber" placeholder="16h00">
            </div>
        </div>
        </form>
    </div>
    <div id="container6_subscribe_med">
        <form id="form">
        <div class="form-group">
            <label for="inputPhone">Numéro de téléphone</label>
            <input type="phone" class="form-control" id="inputPhone" placeholder="+33....">
            </div>
    </form>
        <button type="button" class="btn btn-info bouton-droite"><a class="lien-normal text-blanc" href="profil_med.php">Finalisez votre inscription</a></button>
         
</div>
</div>
</div>
</div>
</body>
</html>