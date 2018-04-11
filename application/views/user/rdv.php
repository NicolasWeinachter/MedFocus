<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="bootstrap-4.1.0/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap-4.1.0/dist/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="stylesheet.css" />
    <link rel='stylesheet' href='calendar/fullcalendar.css' />
    <script src='calendar/lib/jquery.min.js'></script>
    <script src='calendar/lib/moment.min.js'></script>
    <script src='calendar/fullcalendar.js'></script>
    <script>$(function() {
      $('#calendar').fullCalendar({
  defaultView: 'month'
});

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
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="profil_user.php"> Mes coordonnées</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="avis_user.php">Mes avis</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="rdv_user.php">Mes rendez-vous</a></button>
            <button type="button" class="btn btn-secondary"><a class="lien-normal text-blanc" href="liste_medecin.php">Mes praticiens</a></button>
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
                <button type="button" class="btn btn-info" id="bouton_historique" ><a class="lien-normal text-blanc" href="historique_rdv.php">Historique des rendez-vous</a></button>
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

</body>

<footer>
        <div id="containerFin">
        <img class="logo-fin" src="Logo-03.png" width=200px>
        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">MedFocus</th>
                    <th scope="col">Trouvez votre spécialiste</th>
                    <th scope="col"> </th>
                    <th scope="col">Praticien ?</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        S'inscrire<br>
                        A propos de nous<br>
                        Question fréquetntes<br>
                        Besoin d'aide ?<br>
                        Recrutement<br>
                        Contact
                    </td>
                    <td>
                        Médecin généraliste<br>
                        Chirurgien-dentistee<br>
                        Pédiatre<br>
                        Gynécologue<br>
                        Ophtalmologue<br>
                        Dermatologue<br>
                        Ostéopathe<br>
                        Masseur-kinésithérapeute<br>
                        Pédicure-podologue<br>
                        Sage-femme<br>
                    </td>
                    <td>
                        ORL<br>
                        Allergologue<br>
                        Chirurgien urologue<br>
                        Rhumatologue<br>
                        Stomatologue<br>
                        Endocrinologue<br>
                        Chirurgien orthopédiste<br>
                        Diététicien<br>
                        Psychologue<br>
                        Neurologue<br>
                    </td>
                    <td>
                        Nos services<br>
                        Nos tarifs<br>
                        Etablissements de santé<br>
                        Télésecrétariat
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </footer>
</html>