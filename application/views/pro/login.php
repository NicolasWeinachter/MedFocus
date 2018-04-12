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
	<div id="container1_user">

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
    </div>

    <div id="container2_user">
        <h1>Connectez vous à votre espace professionnel</h1>
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

            <article class="col-md-8">
			<?php if ($error) : ?>
				<div class="panel panel-danger">
					<div class="panel-heading">E-mail ou mot de passe incorrect</div>
				</div>
			<?php endif; ?>
            </article>
            
                <button type="submit" class="btn btn-info"><a class="lien-normal text-blanc"> Accéder à mon compte </a></button>
                <p><a href="<?php echo site_url("pro/subscribe_form_presentation"); ?>">Pas encore inscrit ?</a></p>
        </form>
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