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
                <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-01.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-info" href="<?php echo site_url("user/login"); ?>" role="button">Mon compte</a></li>
                        <li><a class="btn btn-outline-info" href="<?php echo site_url("pro/login"); ?>" role="button">Professionnel de santé ?</a></li>
                    </ul>
                </div>
            </div>  
        </header>
        <main class="site-content">
            <h1 class="h1"><p class="light">Questions <b>fréquentes</b></p> </h1>
            </br> 
                <div id="container_main1" >
                    <h3 class="light">Qu'est-ce que Medfocus ?</h3>
                    <h4 class="bold-light">Patients ?</h4>
                    <p class="light">Profitez des nombreux témoignages d'autres patients pour choisir votre médecin en toute sécurité.</p>
                    <p class="light">Vous pouvez également prendre facilement rendez-vous grâce au calendrier en ligne</p>
                    <h4 class="bold-light">Professionnel de santé ?</h4>
                    <p class="light">Medfocus vous offre la possibilité d'avoir accès aux avis de vos patients sur leur rendez-vous.</p>
                    <p class="light">Un service premium vous donne l'accès à un secrétariat en ligne et à l'analyse des avis.
                        Vous avez également la possibilité de signaler un avis si vous le pensez inadéquate.
                    </p>
                </div>
                <br>
                <br>
                <br>
                <div id="container_main2">
                    <h3 class="light">Comment choisir mon médecin ?</h3>
                        <p class="light">
                            Dans la barre de recherche sur la page d'accueil, renseignez la spécialité et la localisation du médecin que vous recherchez.
                            Après avoir lancé votre recherche, les médecins qui s'afficheront en premier seront ceux mis en lumière par la communauté.
                            Vous êtes maintenant libre de choisir le médecin qui vous convient le mieux, grâce aux critères détaillés.
                        </p>
                </div>
                <br>
                <br>
                <br>
                <div id="container_main3">
                    <h3 class="light">Comment prendre mon rendez-vous ?</h3>
                    <p class="light">
                        Une fois le médecin sélectionné, choisissez la date et l'heure qui vous convient dans l'agenda.
                        Vous recevrez une notification par email, puis des rappels avant vos rendez-vous. 
                    </p>
                    <p class="light">
                        Vous pouvez à tous moment consulter votre historique de rendez-vous et ceux à venir en vous rendant 
                        sur l'onglet "Mes rendez-vous". Vous pourrez annuler un rendez-vous et partager votre expérience. 
                    </p>
                </div>
                <br>
                <br>
                <br>
                <div id="container_main4">
                    <h3 class="light">Comment annuler ou décaler un rendez-vous ?</h3>
                    <p class="light">
                        Pour gérer vos rendez-vous, il vous suffit de vous rendre sur l'onglet "Mes rendez-vous". Pour modifier un rendez-vous, 
                        vous devez supprimer l'ancien et en prendre un nouveau.
                    </p>
                </div>
                <br>
                <br>
                <br>
                <div id="container_main5">
                    <h3 class="light">Comment partager mon expérience après mon rendez-vous ?</h3>
                    <p class="light">
                        Après votre rendez-vous, vous recevrez un questionnaire détaillé par email. Il vous suffira simplement de le remplir.
                        Si vous n'avez pas reçu le mail ou que vous l'avez supprimer, vous pouvez toujours partager votre expérience en allant dans l'historique 
                        de vos rendez-vous dans "Mes rendez-vous".
                    </p>
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