<?php var_dump($user_info); ?>
<?php var_dump($user_info); ?>

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
        
        <div class="info">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Mon nom : </li>
            <li class="list-group-item">Mon prénom :</li>
            <li class="list-group-item">Ma date de naissance :</li>
            <li class="list-group-item">Je suis :</li>
            <li class="list-group-item">Mon numéro de téléphone : </li>
            <li class="list-group-item">Mon adresse email :</li>
        </ul>
        <br>
        <p><a href="#" class="btn btn-info btn-sm">Modifier mes informations</a></p>
        
        </div>
    </div>
</div>

</body>
</html>
