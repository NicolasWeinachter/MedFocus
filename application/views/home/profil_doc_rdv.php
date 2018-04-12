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
    <link rel='stylesheet' href="<?php echo base_url("assets/calendar/fullcalendar.css"); ?>">
    <script src="<?php echo base_url("assets/calendar/lib/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/calendar/lib/moment.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/calendar/fullcalendar.js"); ?>"></script>
    <script>
        function afficher_cacher(id)
            {
                if(document.getElementById(id).style.display=="none")
                {
                    document.getElementById(id).style.display="inline";
                    document.getElementById('bouton_'+id).innerHTML='Prendre rendez-vous chez ce médecin.';
                }
                else
                {
                    document.getElementById(id).style.display="none";
                    document.getElementById('bouton_'+id).innerHTML='Prendre rendez-vous chez ce médecin.';
                }
                return true;
            };
    </script>
    <script>$(function() {
        $('#calendar').fullCalendar({
            defaultView: 'agendaFourDay',
    groupByResource: true,
    header: {
      left: 'prev,next',
      center: 'title',
      right: 'agendaDay,agendaFourDay'
    },
    views: {
      agendaFourDay: {
        type: 'agenda',
        duration: { days: 4 }
      }
    },
  });
    });</script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
        'packages': ['map'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
        });
        google.charts.setOnLoadCallback(drawMap);

        function drawMap () {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Address');
        data.addColumn('string', 'Location');

        data.addRows([
            ['78 bis Avenue Henri Martin, 75116, Paris, France', 'Home']
        ]);

        var options = {
            mapType: 'styledMap',
            zoomLevel: 12,
            showTooltip: true,
            showInfoWindow: true,
            useMapTypeControl: true,
            maps: {
            // Your custom mapTypeId holding custom map styles.
            styledMap: {
                name: 'Styled Map', // This name will be displayed in the map type control.
                styles: [
                {featureType: 'poi.attraction',
                stylers: [{color: '#fce8b2'}]
                },
                {featureType: 'road.highway',
                stylers: [{hue: '#0277bd'}, {saturation: -50}]
                },
                {featureType: 'road.highway',
                elementType: 'labels.icon',
                stylers: [{hue: '#000'}, {saturation: 100}, {lightness: 50}]
                },
                {featureType: 'landscape',
                stylers: [{hue: '#259b24'}, {saturation: 10}, {lightness: -22}]
                }
            ]}}
        };

        var map = new google.visualization.Map(document.getElementById('map_div'));

        map.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        function change_onglet(name)
        {
            document.getElementById('onglet_'+anc_onglet).className = 'onglet_0_rdv onglet_rdv light';
            document.getElementById('onglet_'+name).className = 'onglet_1_rdv onglet_rdv light';
            document.getElementById('contenu_onglet_'+anc_onglet).className = 'contenu_onglet_off';
            document.getElementById('contenu_onglet_'+name).className = 'contenu_onglet_on';
            anc_onglet = name;
        }
    </script>
    <title>MedFocus</title>
</head>

<body class="background">
    <div class="page d-flex">
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
        <main class="site-content col-md-11 d-flex flex-row background">
            <div class="col-md-6">
                <div class="container_avis">
                    <div class="avis d-flex flex-row">
                        <div class="col-md-4 d-flex flex-column"> 
                            <div class="row">
                                <!--variable-->
                                <img class="col-md-6 user_profile" src="<?php echo base_url('/assets/images/website/user_profile_female.png'); ?>">
                            </div>
                            <div class="row name">
                                <!--variable-->
                                <p>Nom<b class="light"> Prénom</b></p>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex flex-column">
                            <div class="row container_chart">
                                <div>
                                    <!--variable-->
                                    Avis sous forme de chart
                                </div>
                            </div>
                            <div class="row container_comm">
                                <div>
                                    <!--variable-->
                                    <p class="light">Commentaire du patient</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="avis d-flex flex-row">
                        <div class="col-md-4 d-flex flex-column"> 
                            <div class="row">
                                <!--variable-->
                                <img class="col-md-6 user_profile" src="<?php echo base_url('/assets/images/website/user_profile_male.png'); ?>">
                            </div>
                            <div class="row name">
                                <!--variable-->
                                <p>Nom<b class="light"> Prénom</b></p>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex flex-column">
                            <div class="row container_chart">
                                <div>
                                    <!--variable-->
                                    Avis sous forme de chart
                                </div>
                            </div>
                            <div class="row container_comm">
                                <div>
                                    <!--variable-->
                                    <p class="light">Commentaire du patient</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 bloc_doc">
                <div class="container_info_doc d-flex flex-column">
                    <div class="row row1 d-flex flex-row">
                        <div class="col-md-4">
                            <!--variable-->
                            <img class="col-md-12" src="<?php echo base_url('/assets/images/website/photo_profile_med_default.png'); ?>">
                        </div>
                        <div class="col-md-8 d-flex flex-column">
                            <!--variable-->
                            <p class="light">Dr. NOM Prénom</p>
                            <p class="light">Spécialité</p>
                        </div>
                    </div>
                    <div class="row row2">
                        <div class="systeme_onglets center_onglets ">
                            <!--<div class="onglets">-->
                            <div class="row col-md-12">
                                <div class="col-md-3">
                                    <div class="onglet_0_rdv onglet_rdv light" id="onglet_infos" onclick="javascript:change_onglet('infos');">Infos</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="onglet_0_rdv onglet_rdv light" id="onglet_tarif" onclick="javascript:change_onglet('tarif');">Tarifs </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="onglet_0_rdv onglet_rdv light" id="onglet_lieu" onclick="javascript:change_onglet('lieu');">Lieu</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="onglet_0_rdv onglet_rdv light" id="onglet_contact" onclick="javascript:change_onglet('contact');">Contact</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row3">
                        <div class="col-md-12">
                            <div class="contenu_onglet_off" id="contenu_onglet_infos">
                                <div class="d-flex flex-column">
                                    <p class="light">Diplôme(s) : </p>
                                    <p class="light">Photos : </p>
                                </div>
                            </div>
                            <div class="contenu_onglet_off" id="contenu_onglet_tarif">
                                <div class="d-flex flex-row">
                                    <div class="col-md-6">
                                        <h5 class="light">Tarifs et Remboursements</h4>
                                        <div class="d-flex flex-column">
                                            <p class="light">Conventionné</p>
                                            <p class="light">Carte vitale</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="light">Moyens de paiement</h4>
                                        <div class="d-flex flex-column">
                                            <p class="light">Carte Bleue</p>
                                            <p class="light">Chèques</p>
                                            <p class="light">Espèces</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contenu_onglet_off" id="contenu_onglet_lieu">
                                <div class="d-flex flex-row">
                                        <div class="col-md-6">
                                            <h5 class="light">Informations</h4>
                                            <div class="d-flex flex-column">
                                                <p class="light">Adresse : </p>
                                                <p class="light">Moyen(s) de transport : </p>
                                                <p class="light">Parkings : </p>
                                                <p class="light">Pratiques : Accès handicapé</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class ="col-md-12 maps_rdv" id="map_div"></div>                                        
                                        </div>
                                </div>
                            </div>
                            <div class="contenu_onglet_off" id="contenu_onglet_contact">
                                <p class="light">Tel : +33 1 76 54 09 54</p>
                            </div>
                        </div>
                        <script type="text/javascript">
                            //<!--
                                var anc_onglet = 'infos';
                                change_onglet(anc_onglet);
                            //-->
                        </script>
                        
                    </div>
                    <div class="row row4">
                        <!--button type="button" class="btn btn-info" onclick="javascript:afficher_cacher('texte');">Prendre rendez-vous chez ce médecin.</button-->
                        <p class="bouton lien-normal aff_comm" id="bouton_texte" onclick="javascript:afficher_cacher('texte');">Prendre rendez-vous chez médecin.</p>
                                    <div id="texte" class="texte col-md-12">
                                        <select>
                                            <option value="0">Motif de consultation</option>
                                            <option value="1">Motif 1</option>
                                            <option value="1">Motif 2</option>
                                            <option value="1">Motif 3</option>
                                        </select>
                                        <div class="col-md-12 calendar3" id='calendar'></div>
                                    </div>
                                <script type="text/javascript">
                                    //<!--
                                    afficher_cacher('texte');
                                    //-->
                                </script>
                    </div>
                </div>
            </div>
        </main>
        <footer>
		    <div id="containerFin">
		        <img class="logo-fin" src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px>
		        <table class="table">
			        <thead>
				        <tr>
					
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
    </div>
</body>
</html>