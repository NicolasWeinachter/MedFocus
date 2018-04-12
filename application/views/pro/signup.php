<!DOCTYPE html>
<html>
<head>
    <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/medfocus.css"); ?>" >
    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.3.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <title>MedFocus</title>

    <script type="text/javascript">
        //<!--
                function change_onglet(name)
                {
                        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
                        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
                        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
                        document.getElementById('contenu_onglet_'+name).style.display = 'block';
                        anc_onglet = name;
                }
        //-->
    </script>
</head>


<body>

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

        <h1>Création de votre compte professionnel</h1>
        <div class="systeme_onglets center_onglets">
            <!--<div class="onglets">-->
                <div class="row row_onglets">
                    <div class="col">
                        <span class="onglet_0 onglet" id="onglet_presentation" onclick="javascript:change_onglet('presentation');">Presentation</span>
                    </div>
                    <div class="col">
                        <span class="onglet_0 onglet" id="onglet_honoraires" onclick="javascript:change_onglet('honoraires');">Vos honoraires</span>
                    </div>
                    <div class="col">
                        <span class="onglet_0 onglet" id="onglet_lieu" onclick="javascript:change_onglet('lieu');">Votre lieu de travail</span>
                    </div>
                    <div class="col">
                        <span class="onglet_0 onglet" id="onglet_contact" onclick="javascript:change_onglet('contact');">Contact</span>
                    </div>
                </div>
            </div>
            <div class="contenu_onglets">
                <div class="contenu_onglet" id="contenu_onglet_presentation">
                    <div id="container4_subscribe_med">
                        <div id="container5_subscribe_med">
                        <form id="form" method="post" action="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">Nom</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="Nom">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputSurname">Prénom</label>
                                        <input type="text" class="form-control" id="inputSurname" placeholder="Prénom">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputProf">Profession</label>
                                        <input type="text" class="form-control" id="inputProf" placeholder="Profession">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputSpeciality">Spécialité</label>
                                        <input type="text" class="form-control" id="inputSpeciality" placeholder="Spécialité">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAga">Etes-vous membre d'une AGA ? Si oui, laquelle ?</label>
                                    <input type="text" class="form-control" id="inputAga" placeholder="Oui/Non, ...">
                                </div>
                                <form id="form" method="post" action="">
                                <p>
                                    <label for="inputDiplomaName">Indiquez les diplômes que vous avez obtenus</label><br/>
                                    <textarea type="text" class="form-control" id="inputDiplomaName"></textarea>
                                </p>
                                </form>
                            </form>
                        </div>
                        <div id="container6_subscribe_med">
                        <form id="form" method="post" action="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputSex">Je suis un /une</label>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-light">Homme</button>
                                            <button type="button" class="btn btn-light">Femme</button>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputBirth">Date de naissance</label>
                                        <input type="date" class="form-control" id="inputBirth" placeholder="Birth">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputRPPS">Numéro RPPS</label>
                                    <input type="text" class="form-control" id="inputRPPS" placeholder="N°....">
                                </div>

                                <div class="form-group">
                                    <label for="inputLanguages">Indiquez les langues parlées</label>
                                    <input type="text" class="form-control" id="inputLanguages" placeholder="Anglais, espagnol, ...">
                                </div>
                                <p>
                                    <label for="inputExperience">Expériences</label><br/>
                                    <textarea type="text" class="form-control" id="inputExperience" placeholder="Pompier volontaire, Croix Rouge Française, ..."></textarea>
                                </p>
                                <button type="button" class="btn btn-info bouton-droite"><a class="lien-normal text-blanc" onclick="javascript:change_onglet('honoraires');">Etape suivante</a></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="contenu_onglet" id="contenu_onglet_honoraires">
                <h1>Vos honoraires</h1>
                    <div id="container4_subscribe_med">
                        <div id="container5_subscribe_med">
                        <form id="form" method="post" action="">
                        <form id="form" method="post" action="">
                                <p>
                                    <label for="inputServiceName">Services proposés et tarifs</label><br/>
                                    <textarea type="text" class="form-control" id="inputServiceName" placeholder="Consultation : 30€"></textarea>
                                </p>
                                </form>
                            </form>
                        </div>

                        <div id="container6_subscribe_med">
                            
                                Moyens de paiement acceptés <br>
                                <form id="form" method="post" action="">
                                    <input type="checkbox" name="CB" > Carte bancaire <br>    
                                    <input type="checkbox" name="chèque" > Chèque <br>
                                    <input type="checkbox" name="especes" > Espèces <br>
                                
                                    <br>

                                    Moyens de remboursement <br>
                                    
                                        <input type="checkbox" name="carte-vitale" > Carte vitale <br>    
                                        <input type="checkbox" name="mutuelle" > Carte mutuelle <br>
                                    
                                    <button type="button" class="btn btn-info bouton-droite"><a class="lien-normal text-blanc" onclick="javascript:change_onglet('lieu');">Etape suivante</a></button>
                                </form>
                        </div>
                    </div>
                </div>

                <div class="contenu_onglet" id="contenu_onglet_lieu">
                    <h1> Votre lieu de travail </h1>
                    <div id="container4_subscribe_med">

                        <div id="container5_subscribe_med">
                        <form id="form" method="post" action="">
                                <div class="form-group">
                                    <label for="inputAddressNumber">Numéro de la rue</label>
                                    <input type="text" class="form-control" id="inputAddressNumber" placeholder="N°....">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddressName">Nom de la rue</label>
                                    <input type="text" class="form-control" id="inputAddressName" placeholder="Rue ...">
                                </div>
                                Informations pratiques : <br>
                                <form id="form" method="post" action="">
                                    <input type="checkbox" name="Parking" > Parking <br>    
                                    <input type="checkbox" name="handicapés" > Accès handicapés <br>
                                </form>
                            </form>
                        </div>
                        <div id="container6_subscribe_med">
                        <form id="form" method="post" action="">
                                <div class="form-group">
                                    <label for="inputCity">Ville</label>
                                    <input type="text" class="form-control" id="inputCity" placeholder="Paris, Lyon, ...">
                                </div>
                                <div class="form-group">
                                    <label for="inputPostcode">Code postal</label>
                                    <input type="text" class="form-control" id="inputPostcode">
                                </div>
                                <button type="button" class="btn btn-info bouton-droite"><a class="lien-normal text-blanc" onclick="javascript:change_onglet('contact');">Etape suivante</a></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="contenu_onglet" id="contenu_onglet_contact">
                    <h1> Contact </h1>
                    <div id="container4_subscribe_med">
                        <div id="container5_subscribe_med">
                        <form id="form" method="post" action="">
                                <div class="form-group">
                                    <label for="inputEmail">Adresse email</label>
                                    <input type="mail" class="form-control" id="inputEmail" placeholder="contact@contact.com">
                                </div>
                                Horaires de votre secrétariat : <br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputOpen">Ouverture</label>
                                        <input type="text" class="form-control" id="inputOpen" placeholder="9h00">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputClose">Fermeture</label>
                                        <input type="text" class="form-control" id="inputClose" placeholder="16h00">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="container6_subscribe_med">
                        <form id="form" method="post" action="">
                                <div class="form-group">
                                    <label for="inputPhone">Numéro de téléphone</label>
                                    <input type="phone" class="form-control" name="inputPhone" value="<?php echo set_value('inputPassword2'); ?>" placeholder="+33....">
			                        <?php echo form_error('inputPhone'); ?>
                                </div>
                            
                            <button type="submit" value="Envoyer" class="btn btn-info bouton-droite">
                                <a class="lien-normal text-blanc">Finalisez votre inscription</a></button>
                            </form>
                        </div>   
                    </div>
                </div>
            </div>
        <script type="text/javascript">
        //<!--
                var anc_onglet = 'presentation';
                change_onglet(anc_onglet);
        //-->
        </script>

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
