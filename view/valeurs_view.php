<?php 
  $title = "Nos valeurs";
  ob_start();
?>
  
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
          <div class="page-header">
            <h1>
              Nos valeurs
            </h1> 
          </div>
          <div class="block block-border-bottom-grey block-pd-sm">
            <h3 class="block-title">
              Crédibilité, Confiance, Professionnalisme 
              </h3>
            <img src="public/img/n10.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
          
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
            <li >
              <a href="index.php?action=presentation">
                  Présentations
                  <small>Notre présentation</small>
                </a>
            </li>
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
            <li class="active" >
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
        
</body>

</html>
