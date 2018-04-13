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
    <div class="page">
        <header class="container1">
            <div id="head">
                <div class="logo"><a href="Accueil.php"><img src="<?php echo base_url('/assets/images/website/Logo-01.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-info" href="login_user.php" role="button">Mon compte</a></li>
                        <li><a class="btn btn-outline-info" href="inscription_medecin.php" role="button">Professionnel de santé ?</a></li>
                    </ul>
                </div>
            </div>  
        </header>
        <main class="site-content">
            <h1 class="h1"><p class="light">Rejoignez le  <b>mouvement</b></p> </h1>
            </br>
                <div class="row">
                    <div class="col"></div>
                    <div class="col-10">
                        <div id="container_main1" >
                            <h3 class="light">Qui sommes-nous ?</h3>
                            <p class="light">
                                Nous sommes un groupe de 5 étudiants de <b>l'ECE Paris</b> qui développons cette nouvelle manière de prendre ses rendez-vous médicaux. 
                                En effet, nous nous sommes déjà tous retrouvés à rechercher un médecin dans une nouvelle ville sans savoir vers qui se tourner.
                                Il nous tenait à coeur de créer une <b>plateforme communautaire</b> où chacun peut partager son expérience médicale.
                                Afin de faciliter les démarches, il nous a parru naturel de proposer le service de prise de rendez-vous en ligne via l'agenda connecté.
                            </p>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <br>
                <br>
                <br>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-10">
                        <div id="container_main2" >
                            <h3 class="light">Nos offres d'emploi</h3>
                            <p class="light">
                                En plein développement, nous recherchons un spécialiste de la législation dans l'e-santé qui pourrait nous aider dans toutes ces démarches.
                            </p>
                            <p>Vous êtes intéressé ? N'hésitez pas à nous <a class="lien-normal" href="mailto:contact@medfocus.fr">contacter</a>.</p>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
                <br>
                <br>
                <br>
        </main>

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
    </div>

</body>
</html>