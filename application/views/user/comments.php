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
            	<div class="logo"><a href="Accueil2.html"><img src="Logo_couleur.png" width=200px></a></div>
            	<div class="connexion">
                	<ul id="onglets">
                    	<li><a class="btn btn-outline-info" href="login_user.php" role="button">Mon compte</a></li>
                    	<li><a class="btn btn-outline-info" href="inscription_medecin.php" role="button">Professionnel de santé ?</a></li>
                	</ul>
            	</div>
        	</div>
        </header>
    </div>


    <div id="container2_user">
        <h1>Mon espace personnel "......"</h1>

        <div class="navbar_user">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary"><a href="profil_user.php"><FONT COLOR =#FFFFFF> Mes coordonnées</FONT></a></button>
            <button type="button" class="btn btn-secondary"><a href="avis_user.php"><FONT COLOR =#FFFFFF> Mes avis</FONT></a></button>
            <button type="button" class="btn btn-secondary"><a href="rdv_user.php"><FONT COLOR =#FFFFFF> Mes rendez-vous</FONT></a></button>
            <button type="button" class="btn btn-secondary"><a href="liste_medecin.php"><FONT COLOR =#FFFFFF>Mes praticiens</FONT></a></button>
        </div>
        </div>

        <br>

        <div id="container3_user">
            <br>
            <div id="container4_user">
            <div class="note_medecin">
            <table class="table">
            <tr>
            <td>Nom : <br>
                Spécialité : <br>
                Adresse : <br>
            </td>
            <td>Note : <br>
                <br>
                Autres infos :<br>
            </td>  
            <td>
                <a href="#" class="btn btn-info btn-sm">Prendre un rendez-vous</a>
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
            <td><a href="#" class="btn btn-info btn-sm">Modifier</a></td>
            <td><a href="#" class="btn btn-info btn-sm">Supprimer</a></td>  
            </tr>   
        </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
