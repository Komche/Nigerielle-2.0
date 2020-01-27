<?php 
  $title = "Nos objectifs";
  ob_start();
?>
 
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
              Nos objectifs
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
        <li>
              <a href="index.php?action=presentation">
                  Présentations
                  <small>Notre présentation</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=mission" class="first">
                  Missions
                  <small>Notre missions</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=engagement">
                  Engagements
                  <small>Nos engagements</small>
                </a>
            </li>
            <li class="active" >
              <a href="index.php?action=objectif">
                  Objectifs
                  <small>Nos objectif</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=valeur">
                  Valeurs
                  <small>Nos valeurs</small>
                </a>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </div> 
<?php
  $content = ob_get_clean();
  require('template.php');
?>