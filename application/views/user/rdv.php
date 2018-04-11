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
  <link rel='stylesheet' href="<?php echo base_url("asset/calendar/fullcalendar.css"); ?>">
  <script src="<?php echo base_url("assets/calendar/lib/jquery.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/calendar/lib/moment.min.js"); ?>"></script>
  <script src="<?php echo base_url("assets/calendar/fullcalendar.js"); ?>"></script>
  <script>$(function() {
      $('#calendar').fullCalendar({
  defaultView: 'month'});
  });</script>
  <title>MedFocus</title>
</head>

<body>
  <div id="container1">

    <header>
      <div id="head">
        <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo_couleur.png'); ?>" width=200px></a></div>
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
    <h1>Mon espace personnel</h1>

    <div class="navbar_user">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/profile"); ?>"><FONT COLOR =#FFFFFF> Mes coordonnées</FONT></a></button>
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/avis"); ?>"><FONT COLOR =#FFFFFF> Mes avis</FONT></a></button>
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/rdv"); ?>"><FONT COLOR =#FFFFFF> Mes rendez-vous</FONT></a></button>
                <button type="button" class="btn btn-secondary"><a href="<?php echo site_url("user/liste_medecin"); ?>"><FONT COLOR =#FFFFFF>Mes praticiens</FONT></a></button>
            </div>
    </div>

    <br>

    <div id="container3_rdv">
      <div id="container4_user">
        <div class="calendar">
          <div id='calendar'></div>
        </div>
          <div class="description_rdv">
            <div id="container5_user">
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
                            Adresse : <br>
                            Note : <br>
                        </td>
                      <td>Spécialité : <br>
                        Téléphone : <br>
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
                    </div>
                    <div class="carousel-item">
                      <p class="center">Vendredi 3 février 2018 - 11h</p>
                      <table class="table">
                      <tr>
                        <td>Nom : <br>
                            Adresse : <br>
                            Note : <br>
                        </td>
                      <td>Spécialité : <br>
                        Téléphone : <br>
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