<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
  <link rel="stylesheet" href="<?php echo base_url("assets/css/medfocus.css"); ?>" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.3.1.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
  <link rel='stylesheet' href="<?php echo base_url("assets/calendar/fullcalendar.css"); ?>">
  <script src="<?php echo base_url("assets/calendar/lib/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/calendar/lib/moment.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/calendar/fullcalendar.js"); ?>"></script>
  <script>$(function() {
      $('#calendar').fullCalendar({
  defaultView: 'month'});
  });</script>
    <title>Profil</title>
    <script type="text/javascript">
                function change_onglet(name)
                {
                        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
                        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
                        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
                        document.getElementById('contenu_onglet_'+name).style.display = 'block';
                        anc_onglet = name;
                }
    </script>
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
    
        <h1>Mon espace personnel</h1>
        <div class="systeme_onglets center_onglets">
            <!--<div class="onglets">-->
                    <div class="row row_onglets">
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_presentation" onclick="javascript:change_onglet('presentation');">Presentation</span>
                        </div>
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_avis" onclick="javascript:change_onglet('avis');">Avis</span>
                        </div>
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_rdv" onclick="javascript:change_onglet('rdv');">Rendez-vous</span>
                        </div>
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_liste_med" onclick="javascript:change_onglet('liste_med');">Vos médecins</span>
                        </div>
                    </div>
            </div>
            <div class="contenu_onglets">
                <div class="contenu_onglet" id="contenu_onglet_presentation">
                  <div class="info">

                        <h1 class="light border-bottom">Mes informations</h1>
                        <div class="row">
                          <div class="col-2"></div>
                          <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Mon nom : <?= $user['name'] ?></li>
                                <li class="list-group-item">Mon prénom : <?= $user['surname'] ?></li>
                                <li class="list-group-item">Ma date de naissance : <?= $user['bday'] ?></li>
                                <li class="list-group-item">Je suis : <?= $user['gender'] ?></li>
                                <li class="list-group-item">Mon numéro de téléphone : 0<?= $user['num_tel'] ?></li>
                                <li class="list-group-item">Mon adresse email : <?= $user['email'] ?></li>
                            </ul>
                          
                          </div>
                          <div class="col-2"></div>
                        </div>
                  </div>
                  <br>
                        <div class="row">
                          <div class="col-4"></div>
                          <div class="col-4">
                            <span class="onglet-notif btn btn-secondary btn-150 btn-center" id="onglet_modif" onclick="javascript:change_onglet('modif');">Modifier mes informations</span>
                          </div>
                          <div class="col-4"></div>
                        </div>
                    </div>
            </div>
            <div class="contenu_onglet" id="contenu_onglet_modif">
              <h1 class="center light border-bottom">Modification de vos informations</h1>
              </div>

                </div>
                
            <div class="contenu_onglet" id="contenu_onglet_avis">
                    <h1 class="light border-bottom">Mes avis</h1>
                    
                    <?php foreach ($comments as $myComment) : ?>
                    
                                <td>
                                    Nom : <?= $myComment['email_pro'] ?><br>
                                    Spécialité : <?= $myComment['email_pro'] ?><br>
                                    Adresse : <?= $myComment['email_pro'] ?><br>
                                </td>
                                <td>
                                    Note : <?= $myComment['email_pro'] ?><br>
                                    <br>
                                    Autres infos : <br>
                                </td>  
                                <td>
                                    <a href="#" class="btn btn-info btn-sm btn-200 btn-center">Prendre un rendez-vous</a>
                                    <br>
                                    <a href="#">En savoir plus</a>
                                </td>
                    
                    <?php endforeach; ?>
                    
                </div>
                <div class="contenu_onglet" id="contenu_onglet_rdv">
                    <h1 class="light border-bottom">Mes rendez-vous</h1>
                    <div id="container4_user">
                        <div class="calendar">
                          <div id='calendar'></div>
                        </div>
                        <div class="description_rdv">
                            
                              <div class="historique_rdv">
                                <button type="button" class="onglet_0 btn btn-info btn-150 btn-center" id="onglet_historique" ><a class="lien-normal text-blanc" onclick="javascript:change_onglet('historique');">Historique des rendez-vous</a></button>

                              </div>
                              <div class="info_rdv">
                                <div id="carouselExampleControls" class="height-inherit carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">

                                    <?php foreach ($rdv as $myRdv) : ?>
                                  
                                    <div class="carousel-item active">
                                      <p class="center">Vendredi 17 novembre 2017 - 15h</p>
                                      <table class="table">
                                      <tr>
                                        <td>Nom : <?= $myRdv['email_pro'] ?><br>
                                            Téléphone : <br>
                                        </td>
                                      <td>Prénom : <br>
                                        <a href="#" class="text-info">Voir la fiche complète</a>
                                      </td> 
                                      </tr>
                                    </table>
                                    <table class="table">
                                      <tr>
                                        <td>Informations rendez-vous : <br>
                                      </td> 
                                      </tr>
                                    </table>
                                    <table class="table">
                                      <tr>
                                        <td>
                                            <a class="btn btn-info btn-100 btn-center" href="modif_rdv.php">Modifier</a>
                                        </td> 
                                        <td>
                                            <a class="btn btn-info btn-100 btn-center" href="supp_rdv.php">Annuler</a>
                                        </td>
                                      </tr>
                                    </table>
                                </div>

                                    <?php endforeach; ?>
                                

                                     <?php foreach ($rdv as $myRdv) : ?>

                                    <div class="carousel-item">
                                      <p class="center">Vendredi 3 février 2018 - 11h</p>
                                      <table class="table">
                                      <tr>
                                        <td>Nom : <?= $myRdv['email_pro'] ?><br>
                                            Téléphone : <br>
                                        </td>
                                      <td>Prénom : <br>
                                        <a href="#" class="text-info">Voir la fiche complète</a>
                                      </td> 
                                      </tr>
                                    </table>
                                    <table class="table">
                                      <tr>
                                        <td>Informations rendez-vous : <br>
                                      </td> 
                                      </tr>
                                    </table>
                                    <table class="table">
                                      <tr>
                                        <td>
                                            <a class="btn btn-info btn-100 btn-center" href="modif_rdv.php">Modifier</a>
                                        </td> 
                                        <td>
                                            <a class="btn btn-info btn-100 btn-center" href="supp_rdv.php">Annuler</a>
                                        </td>
                                      </tr>
                                    </table>
                                    </div>
                                  </div>

                                    <?php endforeach; ?>
                                  

                                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon fleche-caroussel-gauche" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon fleche-caroussel-droite" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                </div>

                <div class="contenu_onglet" id="contenu_onglet_historique">

                <br>
                  <div id="container4_historique_rdv">
                    <div class="info-medecin-rdv">
                      <table class="table">
                        <tr>
                          <td>
                              Nom : <br>
                              Adresse : <br>
                              Note : <br>
                          </td>
                          <td>
                              Spécialité : <br>
                              Téléphone : <br>
                              <a href="#" class="text-info">Voir la fiche complète</a>
                          </td> 
                        </tr>
                      </table>
                    </div>
                    <div class="info-rdv">
                      <p class="center">Vendredi 17 novembre 2017 - 15h</p>
                      <div class="info-rdv2">
                        <p class="center">Informations relatives au rendez-vous :</p>
                      </div>
                    </div>
                    <div class="partage-exp">
                      <button type="button" class="btn btn-info" id="btn-partage-exp" ><a class="lien-normal text-blanc" href="#">Partager <br> mon expérience</a></button>
                    </div>
                  </div>
                </div>

                <div class="contenu_onglet" id="contenu_onglet_liste_med">
                    <h1 class="light ">Mes médecins</h1>
                    <table class="table">
                    <tr>
                        <td>
                            Nom : <br>
                            Spécialité : <br>
                            Adresse : <br>
                            <a href="#">Voir la fiche complète</a>
                        </td>
                        <td>
                            Note : <br>
                            <br>
                        </td>  
                        <td>
                            <a href="#" class="btn btn-info btn-sm btn-center btn-200">Prendre un rendez-vous</a>
                            <br>
                            <a href="#" class="btn btn-info btn-sm btn-center btn-200">Partager mon expérience</a>
                        </td>
                    </tr>         
                    </table>
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

