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
                    document.getElementById('bouton_'+id).innerHTML='Cacher les commentaires sur ce médecin.';
                }
                else
                {
                    document.getElementById(id).style.display="none";
                    document.getElementById('bouton_'+id).innerHTML='Afficher les commentaires sur ce médecin.';
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
    <title>MedFocus</title>
</head>

<body>
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
        <main class="site-content col-md-11">
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