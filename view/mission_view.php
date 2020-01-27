<?php 
    $title = "Nos missions";
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
            </h1> 
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
            Nigerielles a pour mission d’accompagner les femmes nigériennes, qu’elles soient porteuses de 
              projets ou déjà chefs d’entreprises, dans l’atteinte de leurs objectifs professionnels. 
              </h3>
              <img src="public/img/n3.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>
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
          <li>
              <a href="index.php?action=presentation">
                  Présentations
                  <small>Notre présentation</small>
                </a>
            </li>
            <li class="active">
              <a href="index.php?action=mission" class="first">
                  Missions
                  <small>Nos missions</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=engagement">
                  Engagements
                  <small>Nos engagements</small>
                </a>
            </li>
            <li >
              <a href="index.php?action=objectif">
                  Objectifs
                  <small>Nos objectifs</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=valeur">
                  Valeurs
                  <small>Vos valeurs</small>
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