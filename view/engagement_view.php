<?php 
    $title = "Notre engagement";
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
              Nos engagements
            </h1> 
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
      
              </h3>
            <img src="public/img/n14.jpg" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>
            Nigerielles s’engage à innover le monde entrepreneurial féminin nigérien et à rendre possible l’impossible. Nous nous engageons pour une réussite au féminin !! Notre objectif est d’assurer un développement permanent de l’entrepreneuriat féminin en assurant à toutes les femmes des programmes d’accompagnement et des événements pointus et innovants qui répondent constamment à leurs besoins et objectifs.</p>
          
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
              <a href="index.php?action=presentation">
                  Présentation
                  <small>Notre présentation</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=mission" class="first">
                  Missions
                  <small>Nos missions</small>
                </a>
            </li>
            <li class="active" >
              <a href="index.php?action=engagement">
                  Engagements
                  <small>Nos engagements</small>
                </a>
            </li>
            <li >
              <a href="index.php?action=objectif">
                  Objectif
                  <small>Nos objectifs</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=valeur">
                  Valeurs
                  <small>Nos valeurs</small>
                </a>
            </li>
            
        </div>
      </div>
    </div>
  </div>
  <?php
  $content = ob_get_clean();
  require("template.php");
  ?>
</body>

</html>
