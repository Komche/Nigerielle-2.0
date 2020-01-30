<?php
$title = "Nos services";
ob_start();
?>
<div class="container">
<div class="row">
   <!--main content-->
   <div class="col-md-6 col-md-push-6">
      <div class="page-header">
         <h1 id="activite-h1">
          Espace coworking 
         </h1>
      </div>
      <div class="block block-border-bottom-grey block-pd-sm">
         <h3 id="activite-tile" class="block-title">
         Nigérielles vous offre un espace de travail optimisé pour le coworking
         </h3>
         <img id="activite-img" src="public/img/n5.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
         <p id="activite-content">
         Nigérielles vous offre un espace de travail optimisé pour le coworking : connexion internet, espace libre, espace Café, ordinateurs, accompagnement, collaboration … à des tarifs abordables. 
         Un accompagnement spécial est réservé aux femmes entrepreneures ou porteuses de projets afin de les aider à réaliser et/ou optimiser leur entreprise.
         </p>
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
   <div class="col-md-6 col-md-pull-9 sidebar visible-md-block visible-lg-block">
      <section class="iq-features">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-12"></div>
               <div class="col-lg-6 col-md-12">
                  <div class="holderCircle">
                     <div class="round"></div>
                     <div class="dotCircle">
                        <span class="itemDot active itemDot1" data-tab="1">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <span style="color: black" class="fa  fa-group fa-stack-1x fa-inverse"></span>
                        </span>
                        <!--<span class="itemDot itemDot2" data-tab="2">
                           <i class="fa fa-comments"></i>
                           <span class="forActive"></span>
                        </span>-->
                        <span class="itemDot active itemDot3" data-tab="3">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <span style="color: black" class="fa fa-pencil fa-stack-1x fa-inverse"></span>
                        </span>
                        <span class="itemDot active itemDot4" data-tab="4">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                           <span style="color: black" class="fa fa-cogs fa-stack-1x fa-inverse"></span>
                        </span>
                     </div>
                     <div class="contentCircle">
                        <div class="CirItem title-box active CirItem1">
                           <h2 class="title"><span>Espace coworking </span></h2>
                           <p>Nigérielles vous offre un espace de travail optimisé pour le coworking...
                              <a href="#" class="btn btn-more">Lire plus</a>
                           </p>
                           <i class="fa fa-clock-o"></i>
                        </div>
                        <!--<div class="CirItem title-box CirItem2">
                              <h2 class="title"><span>Chat </span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-comments"></i>
                           </div>-->
                        <div class="CirItem title-box CirItem3">
                           <h2 class="title"><span>Prestations de services traiteurs </span></h2>
                           <p>NigerVous organisez un séminaire résidentiel, un team building, ou une réunion ?.... <a href="#" class="btn btn-more">Lire plus</a></p>
                           <i class="fa fa-tags"></i>
                        </div>
                        <div class="CirItem title-box CirItem4">
                           <h2 class="title"><span> Location de salles de réunion </span></h2>
                           <p>Vous organisez un séminaire résidentiel, un team building, ou une réunion ?... <a href="#" class="btn btn-more">Lire plus</a></p>
                           <i class="fa fa-briefcase"></i>
                        </div>
                      
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-12"></div>
            </div>
         </div>
      </section>
   </div>
</div>
</div>
</div>

<?php
$content = ob_get_clean();
require("template.php");
?>