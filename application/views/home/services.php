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
	<div id="container1_apropos">
	 	<header>
	 		<div id="head">
            	<div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-01.png'); ?>" width=200px></a></div>
            	<div class="connexion">
                	<ul id="onglets">
                    	<li><a class="btn btn-outline-light" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
                    	<li><a class="btn btn-outline-light" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
                	</ul>
            	</div>
        	</div>
        </header>
        <h1 class="h1"><p class="bold">Le compte Premium :</p> <p class = "light"> Une nouvelle manière de gérer vos patients </p> </h1>
        </br> 
	</div>
    
    <div class=row>
        <div class="col"></div>
        <div class="col-10">
            <div id="container2">
        <h1 class="h1">Qu'est-ce que le compte Premium ? </h1>

        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <img src="<?php echo base_url('/assets/images/website/calendar-icon.png'); ?>"  width=100px>
                    </td>
                    <td class="align-middle">
                        Grâce à la prise de rendez-vous en ligne, vous n'aurez plus besoin de gérer le secrétariat. Les patients pourront prendre directement rendez-vous via la plateforme suivant les disponibilités affichées dans votre calendrier. 
                        De plus, la prise de rendez-vous sera disponible 24h/24 et 7j/7 ! 
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?php echo base_url('/assets/images/website/smartphone-icon.png'); ?>"  width=100px>
                    </td>
                    <td class="align-middle">
                        Les patients ayant pris rendez-vous via notre plateforme, recevront un message de rappel (SMS ou Mail) 24h avant le rendez-vous. 
                        Cela est idéal pour n'oublier aucun rendez-vous ! 
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?php echo base_url('/assets/images/website/message-icon.png'); ?>" width=100px>
                    </td>
                    <td class="align-middle">
                        Les utilisateurs auront la possibilité de donner leur avis suite à leur consultation. Ils évalueront la consultation selon plusieurs critères : <br>
                            - Qualité de l'accueil <br>
                            - Propreté des lieux <br>
                            - Temps d'attente (hors urgence) <br>
                            - Mise en confiance <br>
                        Vous pourrez ainsi avoir un retour de vos patients et avoir de la visibilité auprès des autres utilisateurs.
                    </td>
                </tr>
            </tbody>
        </table>        
    </div>
        </div>
        <div class="col"></div>
    </div>
	
	<footer>
		<div id="containerFin">
		<img class="logo-fin" src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px>
		<table class="table">
			<thead>
				<tr>
					
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