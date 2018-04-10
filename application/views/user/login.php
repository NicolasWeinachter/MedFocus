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
        <h1>Connectez vous à votre espace personnel</h1>
        <form id="form" method="post" action="">

			<div class="form-group">
				<label for="email"> Adresse e-mail </label>
				<input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" aria-describedby="emailHelp" placeholder="Email" />
				<?php echo form_error('email'); ?>
			</div>

			<div class="form-group">
				<label for="pwd"> Mot de passe </label>
				<input type="password" name="pwd" value="<?php echo set_value('pwd'); ?>" class="form-control" placeholder="Password"/>
				<?php echo form_error('pwd'); ?>
			</div>

            <button type="submit" value="Envoyer" class="btn btn-info"> Accéder à mon compte </button>
            <p><a href="<?php echo site_url("user/signup"); ?>" class="text-info">Pas encore inscrit ?</a></p>
    	</form>
	</div>

</body>
</html>

