<?php 
    $title = "Notre missions";
    ob_start();
?>
 <!-- ======== @Region: #content ======== -->
 <div id="content">
    <div class="container" id="about">
    <div class="jumbotron">
      <h1>Presentation</h1>
      <p>
      
      Nigerielles est une association de jeunes femmes nigériennes entrepreneures et porteuses de projets qui a été créé en Mai 2017 dans le but de promouvoir l’entreprenariat et le leadership féminin au Niger. Elle vise à regrouper les jeunes femmes chefs et dirigeantes d’entreprise afin valoriser l’entreprenariat féminin au Niger, de promouvoir l’image de la femme chef d’entreprise au Niger et de participer à la promotion de la femme en tant que qu’acteur économique et créatrice de richesse. Il propose un espace ressources et des actions de valorisation pour développer les projets des femmes nigériennes : co-working, évènements, mise en réseau, Networking, formation, appui technique et financier aux projets, etc. A terme nous visons à regrouper toutes les femmes chefs d’entreprises et porteuses de projets autour d’une seule structure capable de :
        <ul>
          <li>Encourager et faciliter la création d’entreprises féminines au Niger</li>
          <li>Défendre les intérêts de ses membres afin de les aider a pérenniser leurs entreprises</li>
          <li>Assumer le rôle d’encadrement, assistance, sensibilisation, formation, promotion, vulgarisation de concepts, impulsion et intermédiaire.</li>
          <li>Devenir l’interlocuteur unique auprès des institutions publiques et privées.</li>
        </ul>
      </p>
    </div>
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
              <?= $title ?>
              <small>Accompagner les femmes</small>
            </h1> 
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
              Encourager la création d’entreprise par les femmes, vulgariser l’entreprenariat féminin et Promouvoir l’image de la Femme Chef d’Entreprise nigérienne au Niger et à l’étranger
              </h3>
              <img src="public/img/n3.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>Nigerielles a pour mission d’accompagner les femmes nigériennes, qu’elles soient porteuses de 
              projets ou déjà chefs d’entreprises, dans l’atteinte de leurs objectifs professionnels. 
              Nous les amènerons à gagner en confiance, en assurance et en leadership ainsi qu’à élaborer
               des stratégies gagnantes pour leurs entreprises, en leur créant un cadre propice de rencontres et 
               d’échanges selon leurs centres d’intérêt. Nous souhaitons contribuer à une plus grande mixité au niveau économique et sociétal pour faire face aux enjeux 
              de compétitivité et de performance, en permettant aux femmes d’y prendre la place qui leur revient.</p>
            <p>Notre volonté est de permettre à toutes les femmes nigériennes d’oser. Oser entreprendre sa vie,
               oser affronter les autres, oser s’affronter soi-même,
               oser s’affirmer, avoir confiance en soi, en son influence et en ses capacités. Oser la Différence.</p>
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
                  Mission
                  <small>Notre mission</small>
                </a>
            </li>
            <li >
              <a href="index.php?action=objectif">
                  Objectif
                  <small>Notre objectif</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=valeur">
                  Valeurs
                  <small>Vos valeurs</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=engagement">
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