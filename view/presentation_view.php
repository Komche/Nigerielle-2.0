<?php 
    $title = "Notre présentation";
    ob_start();
?>
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
              Nigerielles est une organisation a caractère associatif qui accompagne les femmes entrepreneurs nigériennes et les porteuses de projets dans le but de promouvoir l’entreprenariat et le leadership féminin au Niger.
            </h3>
             <img src="public/img/n5.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>Créé en Mai 2017, elle vise à regrouper les jeunes femmes chefs d’entreprise afin valoriser l’entreprenariat féminin au Niger, de promouvoir l’image de la femme chef d’entreprise au Niger et de participer à la promotion de la femme en tant que qu’acteur économique et créatrice de richesse. Pour ce faire, Nigerielles se divise en plusieurs pôles d’activités : Evènementiel, Formation, Magazine d’éducation entrepreneuriale, Business Club de femmes, Centre incubateur etc…. 
             A terme nous visons à regrouper toutes les femmes chefs d’entreprises et porteuses de projets autour d’une seule structure capable de :
            <p> Encourager et faciliter la création d’entreprises féminines au Niger</p>
            <p> Défendre les intérêts de ses membres afin de les aider à pérenniser leurs entreprises</p>
            <p> Assumer le rôle d’encadrement, assistance, sensibilisation, formation, promotion, vulgarisation de concepts, intermédiaire<p>
             <p>Devenir l’interlocuteur unique auprès des institutions publiques et privées</p>
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
              <a href="index.php?action=presentation" class="first">
                  Présentation
                  <small>Notre présentation</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=mission">
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
                  <small>Nos objectifS</small>
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
  require("template.php");
  ?>