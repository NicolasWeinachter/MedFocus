<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url("assets/css/medfocus.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.3.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <title>MedFocus</title>
</head>


<body>
	<div id="container1">

		<header>
			<div id="head">
				<div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/Logo_couleur.png'); ?>" width=200px></a></div>
				<div class="connexion">
					<ul id="onglets">
						<li><a class="btn btn-outline-info" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
						<li><a class="btn btn-outline-info" href="<?php echo site_url("pro/signup"); ?>" role="button">Professionnel de santé ?</a></li>
					</ul>
				</div>
			</div>
		</header>
		
        <h1>Que recherchez vous ?</h1>
        </br> 
        <nav class="navbar navbar-light bg-light">
  			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Spécialité, praticien, établissement..." aria-label="Search">
				<input class="form-control mr-sm-2" type="search" placeholder="Où ?" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit">Rechercher</button>
 			</form>
		</nav>
	</div>

	<div id="container2">
		</br> 
		</br> 
		</br> 
		<h1>Vous êtes praticien ?</h1>
		<p>  </p>
		<h2>Essayez la version Premium avec la prise de rendez-vous en ligne !</h2>

		<table class="table">
 			<tbody>
  				<td>
  					Une vue de votre calendrier en un clin d'oeil pour vos patients et vous même </br>
  					</br> 
  					<img src="<?php echo base_url('/assets/images/calendar-icon.png'); ?>" width=120px>
  				</td>
  				<td>
  					Une prise de rendez-vous en quelques clics 24h/24 7j/7</br>
  					</br> 
  					<img src="<?php echo base_url('/assets/images/icone-ordinateur.png'); ?>" width=100px>
  				</td>
  				<td>
  					Un SMS de rappel 24h avant le rendez-vous </br>
  					</br> 
  					<img src="<?php echo base_url('/assets/images/smartphone-icon.png'); ?>" width=100px>
  				</td>
  				<td>Un suivi post-rendez vous afin d'obtenir un retour de votre consultation</br>
  					</br> 
  					<img src="<?php echo base_url('/assets/images/message-icon.png'); ?>" width=100px>
  				</td>
  			</tbody>
		</table>
		<a class="btn btn-secondary btn-lg" href="<?php echo site_url("pro/signup"); ?>" role="button">En savoir plus</a>
		
	</div>

</body>