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
	</div>

        <h1 class="light">Création de votre compte personnel</h1>
        <div class="row">
            <div class="col-1"></div>
                <div class="col-10">
                    <div class="fond_onglet">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <form id="form" method="post" action="">
                                    <div class="row">
                                            <div class="col-12">   
                                                <div class="row">
                                                        <div class="col-6">
                                                                <label for="inputName">Nom</label>
                                                                <input type="text" name="inputName" value="<?php echo set_value('inputName'); ?>" class="form-control" id="inputName" placeholder="Nom">
                                                    			<?php echo form_error('inputName'); ?>

                                                                <label for="inputBirth">Date de naissance</label>
                                                                <input type="date" name="inputBirth" value="<?php echo set_value('inputBirth'); ?>" class="form-control" id="inputBirth" placeholder="Date de naissance">
                                                                <?php echo form_error('inputBirth'); ?>

                                                                <label for="inputPhone">Numéro de téléphone</label>
                                                                <input type="tel" name="inputPhone" value="<?php echo set_value('inputPhone'); ?>" class="form-control" id="inputPhone" placeholder="Phone">
                                                                <?php echo form_error('inputPhone'); ?>

                                                                <label for="inputPassword">Mot de passe</label>
                                                                <input type="password" name="inputPassword" value="<?php echo set_value('inputPassword'); ?>" class="form-control" id="inputPassword" placeholder="Mot de passe">
                                                                <?php echo form_error('inputPassword'); ?>
                                                        </div>
                                                        <div class="col-6">
                                                                <label for="inputSurname">Prénom</label>
                                                                <input type="text" name="inputSurname" value="<?php echo set_value('inputSurname'); ?>" class="form-control" id="inputSurname" placeholder="Prénom">
                                                    			<?php echo form_error('inputSurname'); ?>

                                                                <label for="inputSex">Je suis </label><br>
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                  <button type="button" class="btn btn-secondary">Un homme</button>
                                                                  <button type="button" class="btn btn-secondary">Une femme</button>
                                                                </div>  

                                                                <br>
                                                    
                                                                <label for="inputEmail">Adresse email</label>
                                                                <input type="email" name="inputEmail" value="<?php echo set_value('inputEmail'); ?>" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
                                                    			<?php echo form_error('inputEmail'); ?>
                                                                
                                                                <label for="inputPassword2">Confirmation du mot de passe</label>
                                                                <input type="password" name="inputPassword2" value="<?php echo set_value('inputPassword2'); ?>" class="form-control" id="inputPassword2" placeholder="Confirmer le mot de passe">
                                                    			<?php echo form_error('inputPassword2'); ?>

                                                                Importez une photo de profil
                                                                <br>
                                                                <input type="file" name="profilPicture" />
                                                                
                                                        </div>

                                                </div>
                                                <br>
                                                <button type="submit" value="Envoyer" class="btn btn-info btn-center">Créer mon compte</button>

                                            </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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