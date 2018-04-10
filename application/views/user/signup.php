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
    <div id="container2_user">
        <h1>Création de votre compte personnel</h1>
        <form id="form" method="post" action="">

        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputName">Nom</label>
            <input type="text" name="inputName" value="<?php echo set_value('inputName'); ?>" class="form-control" id="inputName" placeholder="Nom">
			<?php echo form_error('inputName'); ?>
            </div>
            <div class="form-group col-md-6">
            <label for="inputSurname">Prénom</label>
            <input type="text" name="inputSurname" value="<?php echo set_value('inputSurname'); ?>" class="form-control" id="inputSurname" placeholder="Prénom">
			<?php echo form_error('inputSurname'); ?>
            </div>
            <div class="form-group col-md-6">
            <label for="inputBirth">Date de naissance</label>
            <input type="date" name="inputBirth" value="<?php echo set_value('inputBirth'); ?>" class="form-control" id="inputBirth" placeholder="Date de naissance">
			<?php echo form_error('inputBirth'); ?>
            </div>
            <div class="form-group col-md-6">
            <label for="inputSex">Je suis </label>
            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-light">un Homme</button>
            <button type="button" class="btn btn-light">une Femme</button>
            </div>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPhone">Numéro de téléphone</label>
            <input type="tel" name="inputPhone" value="<?php echo set_value('inputPhone'); ?>" class="form-control" id="inputPhone" placeholder="Phone">
			<?php echo form_error('inputPhone'); ?>
            </div>
            <div class="form-group col-md-6">
            <label for="inputEmail">Adresse email</label>
            <input type="email" name="inputEmail" value="<?php echo set_value('inputEmail'); ?>" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
			<?php echo form_error('inputEmail'); ?>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword">Mot de passe</label>
            <input type="password" name="inputPassword" value="<?php echo set_value('inputPassword'); ?>" class="form-control" id="inputPassword" placeholder="Mot de passe">
			<?php echo form_error('inputPassword'); ?>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword2">Confirmation du mot de passe</label>
            <input type="password" name="inputPassword2" value="<?php echo set_value('inputPassword2'); ?>" class="form-control" id="inputPassword2" placeholder="Confirmer le mot de passe">
			<?php echo form_error('inputPassword2'); ?>
            </div>
        </div>
            <button type="submit" value="Envoyer" class="btn btn-info">Créer mon compte</button>
        </form>
    </div>
</body>     
        