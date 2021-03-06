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
	 	<header class="container1_search">
            <div id="head">
                <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-light" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
                        <li><a class="btn btn-outline-light" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
                    </ul>
                </div>
            </div> 
        </header>
        <h1 class="h1"><p class="bold">Notre mission :</p> <p class = "light">Mettre en relation les patients qui veulent donner leur avis avec ceux qui en ont besoin.</p> </h1>
        </br> 
	</div>

	<div id="container2">
		<h1 class="h1">Qu'est-ce que Medfocus ?</h1>
		<table class="table">
 			<tbody>
  				<tr>
                    <td>
                        <img src="<?php echo base_url('/assets/images/website/valide.png'); ?>"  width=100px>
                    </td>
                    <td class="align-middle">
                        Une nouvelle manière de prendre vos rdv médicaux sur internet. Faites confiance aux nombreux avis détaillés par critères des précédants patients.
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?php echo base_url('/assets/images/website/communaute.png'); ?>"  width=100px>
                    </td>
                    <td class="align-middle">
                        Une réelle communauté de patients et de médecins.
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="<?php echo base_url('/assets/images/website/calendar.png'); ?>" width=100px>
                    </td>
                    <td class="align-middle">
                        Une prise de rdv simplifiée grâce à l'agenda connecté.
                    </td>
                </tr>
  			</tbody>
		</table>		
	</div>
	<footer>
		<div class="containerFin">
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