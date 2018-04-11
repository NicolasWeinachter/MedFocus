<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="bootstrap-4.1.0/dist/css/bootstrap.min.css">
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
    <title>Profil</title>
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
    <style type="text/css">
        
    </style>
</head>
<body>
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
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Mon nom : </li>
                        <li class="list-group-item">Mon prénom :</li>
                        <li class="list-group-item">Ma date de naissance :</li>
                        <li class="list-group-item">Je suis :</li>
                        <li class="list-group-item">Mon numéro de téléphone : </li>
                        <li class="list-group-item">Mon adresse email :</li>
                    </ul>
                    <br>
                    <p><a href="#" class="btn btn-info btn-200 btn-center">Modifier mes informations</a></p>
                </div>
                <div class="contenu_onglet" id="contenu_onglet_avis">
                    <h1>Vos avis</h1>
                    <table class="table">
                    <tr>
                        <td>
                            Nom : <br>
                            Spécialité : <br>
                            Adresse : <br>
                        </td>
                        <td>
                            Note : <br>
                            <br>
                            Autres infos :<br>
                        </td>  
                        <td>
                            <a href="#" class="btn btn-info btn-sm btn-200 btn-center">Prendre un rendez-vous</a>
                            <br>
                            <a href="#">En savoir plus</a>
                        </td>
                    </tr>         
                </table>
                </div>
                <div class="contenu_onglet" id="contenu_onglet_rdv">
                    <h1>Vos rendez-vous</h1>
                    <div id="container4_user">
                        <div class="calendar">
                          <div id='calendar'></div>
                        </div>
                        <div class="description_rdv">
                            
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
                <div class="contenu_onglet" id="contenu_onglet_liste_med">
                    <h1>Vos médecins</h1>
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

