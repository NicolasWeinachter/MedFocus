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

    <header class="container1_search">
            <div id="head">
                <div class="logo"><a href="<?php echo site_url("home/homepage"); ?>"><img src="<?php echo base_url('/assets/images/website/Logo-03.png'); ?>" width=200px></a></div>
                <div class="connexion">
                    <ul id="onglets">
                        <li><a class="btn btn-outline-light" href="#" role="button">Deconnexion</a></li>
                        <li><a class="btn btn-outline-light" href="<?php echo site_url("user/profile"); ?>" role="button">Mon compte</a></li>
                    </ul>
                </div>
            </div> 
    </header>
    
        <h1>Mon espace personnel</h1>
        <div class="systeme_onglets center_onglets">
            <!--<div class="onglets">-->
                    <div class="row row_onglets">
                        <div class="col">
                            <span class="onglet_0 onglet" id="onglet_presentation" onclick="javascript:change_onglet('presentation');">Présentation</span>
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
                          <div class="col-3">
                            <div class="row">
                              <div class="col"></div>
                              <div class="col">
                                <!--Si Fille-->
                                <img src="<?php echo base_url('/assets/images/avatar/user_profile_male.png'); ?>" width=200px>
                                <!--Si Garçon
                                  avatar/user_profile_mal.png
                                -->

                              </div>
                              <div class="col"></div>
                        
                          
                            </div>  
                          </div>

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
                          <div class="col"></div>
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
                    
                    <?php foreach ($proComments as $myComment) : ?>
                    
                                <td>
                                    Nom : <?= $myComment['email_pro'] ?><br>
                                    Spécialité : <?= $myComment['speciality'] ?><br>
                                    Adresse : <?= $myComment['address'] ?><br>
                                </td>
                                <td>
                                    Note : <?php echo (($myComment['reception'] + 
                                                        $myComment['clean_place'] + 
                                                        $myComment['feel_good'] + 
                                                        $myComment['on_time'])/4)?> / 5<br>
                                    <br>
                                    Commentaire : <?= $myComment['comment'] ?><br>
                                </td>  
                                <td>
                                    <a href="#" class="btn btn-info btn-sm btn-200 btn-center">Prendre un rendez-vous</a>
                                    <br>
                                    <a href="<?php echo site_url("home/profil_doc_rdv"); ?>">En savoir plus</a>
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
                                <div id="carouselExampleControl" class="height-inherit carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">

                                    <div class="carousel-item active">
                                      <p class="center"><?php echo $proRdv[0]['date']; ?> - <?php echo $proRdv[0]['time']; ?></p>
                                      <table class="table">
                                      <tr>
                                        <td>Nom : <?= $proRdv[0]['name'] ?><br>
                                            Téléphone : 0<?= $proRdv[0]['num_tel'] ?><br>
                                        </td>
                                      <td>Prénom : <?= $proRdv[0]['surname'] ?><br>
                                        <a href="<?php echo site_url("home/profil_doc_rdv"); ?>" class="text-info">Voir la fiche complète</a>
                                      </td> 
                                      </tr>
                                      </table>
                                      <table class="table">
                                      <tr>
                                        <td>Informations rendez-vous : <?= $proRdv[0]['cause'] ?><br>
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

                                    <?php foreach ($proRdv as $myRdv) : 
                                  
                                    if($myRdv['date'] > date("Y-m-d")) :
                                    ?>

                                    <div class="carousel-item">
                                      <p class="center"><?= $myRdv['date'] ?> - <?= $myRdv['time'] ?></p>
                                      <table class="table">
                                      <tr>
                                        <td>Nom : <?= $myRdv['name'] ?><br>
                                            Téléphone : 0<?= $myRdv['num_tel'] ?><br>
                                        </td>
                                      <td>Prénom : <?= $myRdv['surname'] ?><br>
                                        <a href="<?php echo site_url("home/profil_doc_rdv"); ?>" class="text-info">Voir la fiche complète</a>
                                      </td> 
                                      </tr>
                                    </table>
                                    <table class="table">
                                      <tr>
                                        <td>Informations rendez-vous : <?= $myRdv['cause'] ?><br>
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

                                    <?php endif; ?>

                                    <?php endforeach; ?>
                                  

                                  <a class="carousel-control-prev" href="#carouselExampleControl" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon fleche-caroussel-gauche" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleControl" role="button" data-slide="next">
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

                <?php foreach ($proRdv as $myRdv) : 
                                  
                if($myRdv['date'] < date("Y-m-d")) :
                ?>

                  <div id="container4_historique_rdv">
                    <div class="info-medecin-rdv">
                      <table class="table">
                        <tr>
                          <td>
                              Nom : <?= $myRdv['name'] ?><br>
                              Adresse : <?= $myRdv['address'] ?><br>
                              <!--
                              Note : <?php /* echo (($myRdv['reception'] + 
                                                $myRdv['clean_place'] + 
                                                $myRdv['feel_good'] + 
                                                $myRdv['on_time'])/4)*/ ?> / 5<br> -->
                          </td>
                          <td>
                              Spécialité : <?= $myRdv['speciality'] ?><br>
                              Téléphone : 0<?= $myRdv['num_tel'] ?><br>
                              <a href="#" class="text-info">Voir la fiche complète</a>
                          </td> 
                        </tr>
                      </table>
                    </div>
                    <div class="info-rdv">
                      <p class="center"><?= $myRdv['date'] ?> - <?= $myRdv['time'] ?></p>
                      <div class="info-rdv2">
                        <p class="center">Informations relatives au rendez-vous : <?= $myRdv['cause'] ?></p>
                      </div>
                    </div>
                    <div class="partage-exp">
                      <button type="button" class="btn btn-info" id="btn-partage-exp" ><a class="lien-normal text-blanc" href="#">Partager <br> mon expérience</a></button>
                    </div>
                  </div>

                  <?php endif; ?>

                    <?php endforeach; ?>

                </div>

                <div class="contenu_onglet" id="contenu_onglet_liste_med">
                    <h1 class="light ">Mes médecins</h1>

                <?php if(!$proRdv) : ?> 
                    <h5>Vous n'avez pris aucun rdv pour le moment !</h5>
                <?php else : 
                    
                    foreach ($proRdv as $myPro) : ?>
                    
                    <table class="table">
                    <tr>
                        <td>
                            Nom : <?= $myPro['name'] ?><br>
                            Spécialité : <?= $myPro['speciality'] ?><br>
                            Adresse : <?= $myPro['address'] ?><br>
                            <a href="<?php echo site_url("home/profil_doc_rdv"); ?>" >Voir la fiche complète</a>
                        </td>
                        <td>
                        <!-- 
                            Note : <?php /* echo (($myPro['reception'] + 
                                                $myPro['clean_place'] + 
                                                $myPro['feel_good'] + 
                                                $myPro['on_time'])/4) */?> / 5<br>
                            <br> -->
                        </td>  
                        <td>
                            <a href="<?php echo site_url("home/profil_doc_rdv"); ?>" class="btn btn-info btn-sm btn-center btn-200">Prendre un rendez-vous</a>
                            <br>
                            <a href="<?php echo site_url("user/avis"); ?>" class="btn btn-info btn-sm btn-center btn-200">Partager mon expérience</a>
                        </td>
                    </tr>         
                    </table>

                <?php endforeach; 
                        endif;?> 
                    
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
        <div class="containerFin">
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

