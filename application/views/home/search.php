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
        <header class="container1 container1_search">
            <div id="head">
                <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-light" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
                        <li><a class="btn btn-outline-light" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
                    </ul>
                </div>
            </div> 
            <nav class="navbar col-md-12" id="navbar_search">
  			<form class="form-inline">
				<input class="form-control mr-sm-2" id ="spécialité" type="search" placeholder="Spécialité, praticien, établissement..." aria-label="Search">
				<input class="form-control mr-sm-2" id="location" type="search" placeholder="Où ?" aria-label="Search">
				<button class="btn btn-outline-info my-2 my-sm-0" type="submit" value="search">Rechercher</button>
             </form>
            </nav> 
            <table class="col-md-12 background-white">
                 <tr>
                     <td>
                        <p class="col-md-12">Filtrer par</p>
                     </td>
                    <td>
                        <select class="custom-select col-md-10" id="dispo">
                            <option value="0">Disponibilité:</option>
                            <option value="1">Aujourd'hui</option>
                            <option value="2">Dans les 3 prochains jours</option>
                            <option value="3">Dans les deux prochaines semaines</option>
                            <option value="4">Dans le mois</option>                        
                        </select>
                    </td>
                    <td>
                        <select class="custom-select col-md-10" id="honoraires">
                            <option value="0">Honoraires:</option>
                            <option value="1">Pas de dépassement d'honoraires</option>
                            <option value="2">Avec dépassement d'honoraires</option>                      
                        </select>
                    </td>
                    <td>
                        <select class="custom-select col-md-10" id="proximité">
                            <option value="0">Proximité:</option>
                            <option value="1">Dans un rayon d'un kilomètre</option>
                            <option value="2">Dans le quartier/arrondissement</option>
                            <option value="2">Dans la ville</option> 
                            <option value="2">Dans le département</option>                     
                        </select>
                    </td>
                    <td>
                        <select class="custom-select col-md-10" id="lumière">
                            <option value="0">Critère de lumière:</option>
                            <option value="1">Qualité de l'accueil</option>
                            <option value="2">Temps d'attente (hors urgences)</option>                   
                        </select>
                    </td>

                 </tr>
             </table>
        </header>
        <main class="site-content col-md-12">
            
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