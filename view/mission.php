<?php 
    $title = "Présentation";
    ob_start();
?>

<!-- ======== @Region: #content ======== -->
<div id="content">
    <div class="container" id="about">
    <div class="jumbotron">
          <h1>
              Qui sommes-nous?
            </h1>
          <p>
          Nigerielles est une association de jeunes femmes nigériennes entrepreneures et porteuses de projets qui a été créé en Mai 2017 dans le but de promouvoir l’entreprenariat et le leadership féminin au Niger. Elle vise à regrouper
           les jeunes femmes chefs et dirigeantes d’entreprise afin valoriser l’entreprenariat féminin au Niger, de promouvoir l’image de la femme chef d’entreprise au Niger et de participer à la promotion de la femme en tant que qu’acteur économique et créatrice de richesse. Il propose un espace ressources et des actions de valorisation pour développer les projets des femmes nigériennes : co-working, évènements, mise en réseau, Networking, formation, appui technique et financier aux projets, etc. A terme nous visons à regrouper toutes les femmes chefs d’entreprises et porteuses de projets autour d’une seule structure capable de :
          </p>
          <ul>
            <li>Encourager et faciliter la création d’entreprises féminines au Niger</li>
            <li>Défendre les intérêts de ses membres afin de les aider a pérenniser leurs entreprises</li>
            <li>Assumer le rôle d’encadrement, assistance, sensibilisation, formation, promotion, vulgarisation de concepts, impulsion et intermédiaire.</li>
            <li>Devenir l’interlocuteur unique auprès des institutions publiques et privées.</li>
          </ul>
        </div>
        <hr>
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
                Nos Missions
                <small> </small>
              </h1>
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            
            
          </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="index.php?action=mission" class="first">
                  Nos Missions 
                  <small>How It All Began</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=objectif">
                  Nos objectifs 
                  <small>Our team of stars</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=valeur">
                  Nos Valeurs
                  <small>How to get in touch</small>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- misssion -->

   <!-- ======== @Region: #content ======== -->
   <div id="content">
    <div class="container" id="about">
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
              Notre objectif
            </h1> 
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
              Encourager la création d’entreprise par les femmes, vulgariser l’entreprenariat féminin et Promouvoir l’image de la Femme Chef d’Entreprise nigérienne au Niger et à l’étranger
              </h3>
            <img src="public/img/slide5.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>
              L’objectif principal de l’association Nigerielles est de promouvoir et d’appuyer l’entrepreneuriat et le leadership féminin au Niger à travers plusieurs projets dont celui de la mise en place d’un centre incubateur spécialement dédié aux entreprises des femmes et la tenue du premier salon de l’entreprenariat féminin au Niger. En ce sens, nous visons à:<br>
            <ul>
              <li> Orienter, encadrer, informer et assister la Femme Chef d’Entreprise dans la recherche de la compétitivité.</li>
              <li> Créer un réseau de femmes entrepreneures, qui permettra l’échange de bonnes pratiques, d’expériences, et mutualiser les moyens et les compétences</li>
            </ul></p>
          
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
            <li >
              <a href="about.html" class="first">
                  Mission
                  <small>Notre mission</small>
                </a>
            </li>
            <li class="active">
              <a href="index.php?action=objectif">
                  Objectif
                  <small>Notre objectif</small>
                </a>
            </li>
            <li>
              <a href="valeurs.php">
                  Valeurs
                  <small>Vos valeurs</small>
                </a>
            </li>
            <li>
              <a href="engagement.php">
                  Engagement
                  <small>Nos engagements</small>
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