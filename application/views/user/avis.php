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


    <div id="container2_user">
        <h1>Mon espace personnel</h1>

       <div class="navbar_user">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="profil_user.php"> Mes coordonnées</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="avis_user.php">Mes avis</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="rdv_user.php">Mes rendez-vous</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="liste_medecin.php">Mes praticiens</a></button>
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
</div>

<footer>
        <div id="containerFin">
        <img class="logo-fin" src="Logo-03.png" width=200px>
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">MedFocus</th>
                    <th scope="col">Trouvez votre spécialiste</th>
                    <th scope="col"> </th>
                    <th scope="col">Praticien ?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        S'inscrire<br>
                        A propos de nous<br>
                        Question fréquetntes<br>
                        Besoin d'aide ?<br>
                        Recrutement<br>
                        Contact
                    </td>
                    <td>
                        Médecin généraliste<br>
                        Chirurgien-dentistee<br>
                        Pédiatre<br>
                        Gynécologue<br>
                        Ophtalmologue<br>
                        Dermatologue<br>
                        Ostéopathe<br>
                        Masseur-kinésithérapeute<br>
                        Pédicure-podologue<br>
                        Sage-femme<br>
                    </td>
                    <td>
                        ORL<br>
                        Allergologue<br>
                        Chirurgien urologue<br>
                        Rhumatologue<br>
                        Stomatologue<br>
                        Endocrinologue<br>
                        Chirurgien orthopédiste<br>
                        Diététicien<br>
                        Psychologue<br>
                        Neurologue<br>
                    </td>
                    <td>
                        Nos services<br>
                        Nos tarifs<br>
                        Etablissements de santé<br>
                        Télésecrétariat
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </footer>
</body>
</html>
