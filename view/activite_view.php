<?php
$title = "Nos activités";
ob_start();
?>
<div class="container">
<div class="row">
   <!--main content-->
   <div class="col-md-6 col-md-push-6">
      <div class="page-header">
         <h1 id="activite-h1">
            Nigerielles Events
         </h1>
      </div>
      <div class="block block-border-bottom-grey block-pd-sm">
         <h3 id="activite-tile" class="block-title">
            Nigerielles Events est le pôle événementiel de l’organisation.
         </h3>
         <img id="activite-img" src="public/img/n5.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
         <p id="activite-content">
            Nigerielles Events est le pôle événementiel de l’organisation. Tout au long de l’année,
            nous organisons des séries d’événements d’envergure nationale et sous-régionale pour créer
            un cadre d’échange et de partenariat entre femmes entrepreneures et potentiels
            partenaires/investisseurs. Notre principal cible étant les femmes, nous menons des campagnes de
            sensibilisations aux femmes de toutes les couches sociales, mais aussi des campagnes de leadership
            adressées aux jeunes filles pour les motiver à donner le meilleur d’elles-mêmes dans la société,
            le tout commençant par une meilleure scolarisation.
            Notre événement phare de l’année est le Salon National de l’Entrepreneuriat Féminin organisé
            en fin d’année qui mobilise entre 3.000 et 5.000 visiteurs à chaque édition.
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
                           <i class="fa fa-clock-o"></i>
                           <span class="forActive"></span>
                        </span>
                        <!--<span class="itemDot itemDot2" data-tab="2">
                           <i class="fa fa-comments"></i>
                           <span class="forActive"></span>
                           </span>-->
                        <span class="itemDot itemDot3" data-tab="3">
                           <i class="fa fa-tags"></i>
                           <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot4" data-tab="4">
                           <i class="fa fa-briefcase"></i>
                           <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot5" data-tab="5">
                           <i class="fa fa-home"></i>
                           <span class="forActive"></span>
                        </span>
                        <span class="itemDot itemDot6" data-tab="6">
                           <i class="fa fa-book"></i>
                           <span class="forActive"></span>
                        </span>
                     </div>
                     <div class="contentCircle">
                        <div class="CirItem title-box active CirItem1">
                           <h2 class="title"><span>Nigerielles Events</span></h2>
                           <p>Nigerielles Events est le pôle événementiel de l’organisation. Tout au long de l’année, nous organisons des séries...
                              
                           </p>
                           <i class="fa fa-clock-o"></i>
                        </div>
                        <!--<div class="CirItem title-box CirItem2">
                              <h2 class="title"><span>Chat </span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-comments"></i>
                           </div>-->
                        <div class="CirItem title-box CirItem3">
                           <h2 class="title"><span>Nigerielles Business Club</span></h2>
                           <p>Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir, regroupées en... </p>
                           <i class="fa fa-tags"></i>
                        </div>
                        <div class="CirItem title-box CirItem4">
                           <h2 class="title"><span>Nigerielles Training</span></h2>
                           <p>C’est le volet formation de l’organisation. En partenariat avec des institutions et des cabinets de formation de la place... </p>
                           <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="CirItem title-box CirItem5">
                           <h2 class="title"><span>La Smart House</span></h2>
                           <p>La Smart House de Nigerielles est le projet de la mise en place d’un centre incubateur pour femmes entrepreneures... </p>
                           <i class="fa fa-home"></i>
                        </div>
                        <div class="CirItem title-box CirItem6">
                           <h2 class="title"><span>Nigerielles Le Magazine</span></h2>
                           <p>Au sortir de chaque édition du Salon National de l’entrepreneuriat féminin, un magazine d’éducation...  </p>
                           <i class="fa fa-book"></i>
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