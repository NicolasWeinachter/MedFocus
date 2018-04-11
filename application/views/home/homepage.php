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
				<div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-01.png'); ?>" width=200px></a></div>
				<div class="connexion">
					<ul id="onglets">
						<li><a class="btn btn-outline-info" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
						<li><a class="btn btn-outline-info" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
					</ul>
				</div>
			</div>
		</header>
		
        <h1>Que recherchez vous ?</h1>
        </br> 
        <nav class="navbar">
  			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Spécialité, praticien, établissement..." aria-label="Search">
				<input class="form-control mr-sm-2" type="search" placeholder="Où ?" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit" value="search">Rechercher</button>
 			</form>
		</nav>
	</div>

	<div class="container2">
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
  					<img src="<?php echo base_url('/assets/images/website/calendar-icon.png'); ?>" width=120px>
  				</td>
  				<td>
  					Une prise de rendez-vous en quelques clics 24h/24 7j/7</br>
  					</br> 
  					<img src="<?php echo base_url('/assets/images/website/icone-ordinateur.png'); ?>" width=100px>
  				</td>
  				<td>
  					Un SMS de rappel 24h avant le rendez-vous </br>
  					</br> 
  					<img src="<?php echo base_url('/assets/images/website/smartphone-icon.png'); ?>" width=100px>
  				</td>
  				<td>Un suivi post-rendez vous afin d'obtenir un retour de votre consultation</br>
  					</br> 
  					<img src="<?php echo base_url('/assets/images/website/message-icon.png'); ?>" width=100px>
  				</td>
  			</tbody>
		</table>
		<br>
		<br>
		<a class="btn btn-secondary btn-lg" href="<?php echo site_url("pro/signup"); ?>" role="button">En savoir plus</a>
		
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