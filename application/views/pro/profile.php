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
        <h1>Mon espace personnel</h1>
        <div class="systeme_onglets center_onglets">
            <!--<div class="onglets">-->
                    <div class="row row_onglets">
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_info" onclick="javascript:change_onglet('info');">Mes informations</span>
                        </div>
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_avis" onclick="javascript:change_onglet('avis');">Mes avis</span>
                        </div>
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_rdv" onclick="javascript:change_onglet('rdv');">Mes rendez-vous</span>
                        </div>
                    </div>
            </div>
            <div class="contenu_onglets">
                <div class="contenu_onglet" id="contenu_onglet_info">
                    
                        <div class="info">
                            <h1>Mes informations</h1>
                            <table class="table">
                                <tr>
                                    <td>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Nom :</li>
                                            <li class="list-group-item">Spécialité :</li>
                                            <li class="list-group-item">N° RPPS :</li>
                                            <li class="list-group-item">Adresse :</li>
                                            <li class="list-group-item">Ville :</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Prénom :</li>
                                            <li class="list-group-item">Je suis :</li>
                                            <li class="list-group-item">Tél professionel :</li>
                                            <li class="list-group-item">Email :</li> 
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <a href="#" class="btn btn-info btn-sm text-blanc lien-normal btn-center btn-200">Modifier mes informations</a>
                        </div>
                    </div>
                </div>
                <div class="contenu_onglet" id="contenu_onglet_avis">
                    
                </div>
                <div class="contenu_onglet" id="contenu_onglet_rdv">
                    <h1>Vos rendez-vous</h1>
                    <div id="container4_user">
                        <div class="calendar">
                          <div id='calendar'></div>
                        </div>
                        <div class="description_rdv">
                            
                              <div class="historique_rdv">
                                <button type="button" class="btn btn-info" id="bouton_historique" ><a class="lien-normal text-blanc" href="<?php echo site_url("user/historique_rdv"); ?>">Historique des rendez-vous</a></button>
                              </div>
                              <div class="info_rdv">
                                <div id="carouselExampleControls" class="height-inherit carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <p class="center">Vendredi 17 novembre 2017 - 15h</p>
                                      <table class="table">
                                      <tr>
                                        <td>Nom : <br>
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
                                    <div class="carousel-item">
                                      <p class="center">Vendredi 3 février 2018 - 11h</p>
                                      <table class="table">
                                      <tr>
                                        <td>Nom : <br>
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

            </div>
        </div>
    <script type="text/javascript">
        //<!--
                var anc_onglet = 'info';
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

