<?php 
    $title = "Nos activités";
    ob_start();
?>
 <!-- ======== @Region: #content ======== -->
 <div id="content">
    <div class="container" id="about">
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
              <?= $title ?>
              <small>Nigerielles training</small>
            </h1> 
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
             C’est le volet formation de l’organisation.
              </h3>
              <img src="public/img/n5.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p> En partenariat avec des institutions et des cabinets de formation de la place, Nigerielles s’engage à former ‘’autrement’’ les femmes entrepreneurs, les porteuses de projets ou leaders du Niger dans toutes les régions. Il s’agit principalement des formations de développement personnel et professionnel, des formations techniques et managériales en entrepreneuriat et création d’entreprise et des coachings personnalisés. A travers ces formations, nous souhaiterons rehausser le nombre de femmes entrepreneurs dynamiques avec des idées innovantes et un système de gestion inégalé en vue de pérenniser les activités des femmes.</p>
          </div>
          <div class="block-highlight block-pd-h block-pd-sm">
          </div>
          <div class="block">
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4"> 
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="index.php?action=mission" class="first">
                  Notre training
                  <small>Nigerielles training</small>
                </a>
            </li>
            <li >
              <a href="index.php?action=objectif">
             Nigerielles business club
                  <small>Notre business club</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=valeur">
                  Nigerielles envents
                  <small>Vos events</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=engagement">
                  Nigerielles magasine
                  <small>Nos magasines</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=engagement">
                  La smart haouse
                  <small>pépinière pour les femmes entrepreneures</small>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>   
  <?php
  $content = ob_get_clean();
  require("template.php");
  ?>