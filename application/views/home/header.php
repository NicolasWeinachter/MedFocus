<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/medfocus.css" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.3.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <title>MedFocus</title>
</head>

<div id="container1_user">
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
</div>