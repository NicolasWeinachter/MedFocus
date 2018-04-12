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
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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


  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Critère');
        data.addColumn('number', 'Note');
        data.addRows([
          ['Accueil', 3],
          ['Confiance', 1],
          ['Lieux', 5],
          ['Ponctualité', 2],
        ]);

        // Set chart options
        var options = {'width':400,
                       'height':300,
                        'colors': ['#a6d7d1']
                      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
  </script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Avis', 'Accueil', 'Confiance', 'Lieu', 'Ponctualité'],
          ['',  5, 3, 2, 3],
          ['',  2, 1, 4, 2],
          ['',  4, 3, 1, 3],
          ['',  5, 5, 3, 5],
          
        ]);

        var options = {'width':400,
                       'height':300,
          curveType: 'function',
          'colors': ['#a6d7d1','#17a2b8','#000000', '#696969'],

          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

  <script>
        function afficher_cacher(id)
            {
                if(document.getElementById(id).style.display=="none")
                {
                    document.getElementById(id).style.display="inline";
                    document.getElementById('bouton_'+id).innerHTML='Masquer détails';
                }
                else
                {
                    document.getElementById(id).style.display="none";
                    document.getElementById('bouton_'+id).innerHTML='Voir détails';
                }
                return true;
            };

        function afficher_cacher_graph(id_graph)
            {
                if(document.getElementById(id_graph).style.display=="none")
                {
                    document.getElementById(id_graph).style.display="inline";
                    document.getElementById('bouton_graph_'+id_graph).innerHTML='Masquer détails graph';
                }
                else
                {
                    document.getElementById(id_graph).style.display="none";
                    document.getElementById('bouton_graph_'+id_graph).innerHTML='Voir détails graph';
                }
                return true;
            };
    </script>


</head>

<body>
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

        <h1>Mon espace personnel</h1>
        <div class="row">
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>
          <div class="col"></div>  
          <div class="col">
            <div class="row">
              <div class="col">
                <img src="<?php echo base_url('assets/images/website/notif.png'); ?>" width=35px height =35px>
              </div>

              <div class="col">
                <span class="onglet-notif btn btn-secondary btn-150 btn-center" id="onglet_notifications" onclick="javascript:change_onglet('notifications');">Notifications</span>
              </div>
              
            </div>
            </div>
        </div>
            
        </div>
        
        <div class="systeme_onglets center_onglets">
            <!--<div class="onglets">-->
<<<<<<< HEAD
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
            <div class="contenu_onglet" id="contenu_onglet_notifications">
              <br>
              <h2 class="center light border-bottom">Vos dernières notifications</h2>
              <br>
              <div class="info_medecin">
              </div>

            </div>

            <div class="contenu_onglet" id="contenu_onglet_info">
                
                    <div class="info">
                        <h1 class="light border-bottom">Mes informations</h1>
                        
                        <div class="row">
                          <div class="col-2"></div>
                          <div class="col-4">
                                  <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Nom :</li>
                                      <li class="list-group-item">Spécialité :</li>
                                      <li class="list-group-item">N° RPPS :</li>
                                      <li class="list-group-item">Adresse :</li>
                                      <li class="list-group-item">Ville :</li>
                                  </ul>
                          </div>
                          <div class="col-4">
                                  <ul class="list-group list-group-flush">
                                      <li class="list-group-item">Prénom :</li>
                                      <li class="list-group-item">Je suis :</li>
                                      <li class="list-group-item">Tél professionel :</li>
                                      <li class="list-group-item">Email :</li> 
                                  </ul>
                          </div>
                          <div class="col-2"></div>
=======
            <div class="row">
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
            <div class="contenu_onglet" id="contenu_onglet_notifications">
                <br>
                <h2 class="center italic">Vos dernières notifications</h2>
                <br>
                <div class="info_medecin">

                </div>

            </div>

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
>>>>>>> 2c5901aeea42879fda722e426c62b145eb033e0f
                          <br>
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

                <div class="row">
                  <div class="col-1"></div>
                  <div class="col-4">
                    <h2 class="center">Analyses de vos avis</h2>

                      <p class="bouton lien-normal aff_avis center" id="bouton_graph" onclick="javascript:afficher_cacher_graph('graph');">Cliquez pour voir l'évolution de vos avis</p>
                                <div id="graph">
                                <div id="curve_chart" style="width: 900px; height: 500px"></div>
                                </div>

                                <p></p>
                                <script type="text/javascript">
                                    //<!--
                                    afficher_cacher_graph('graph');
                                    //-->
                                </script>
                    
                                <div id="chart_div" style="width: 1000px; height: 500px"></div>
      
                  </div>
                  <div class="col-1"></div>
                  <div class="col-5">
                    <h2 class="center">Vos avis</h2>

                    <p class="light">Nom du patient :   </p>
                    <p class="light">Avis global :      </p>
                    <p class="bouton lien-normal aff_avis" id="bouton_texte" onclick="javascript:afficher_cacher('texte');">Afficher plus de détails</p>
                                <div id="texte">
                                
                                  <div class="texte col-md-12">
                                      <p class="light">Qualité de l'accueil :</p>
                                      <p class="light">Mise en confiance :</p>
                                      <p class="light">Propreté des lieux :</p>
                                      <p class="light">Poncutalité (hors urgence) :</p>   
                                  </div>
                                </div>
                                
                        <p></p>
                        <script type="text/javascript">
                            //<!--
                            afficher_cacher('texte');
                            //-->
                        </script>

                  </div>
                  <div class="col-1"></div>

              </div>
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

