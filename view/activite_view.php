<?php 
    $title = "Nos activités";
    ob_start();
?>
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
                           <i class="fa fa-book"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot5" data-tab="5">
                           <i class="fa fa-home"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot6" data-tab="6">
                           <i class="fa fa-briefcase"></i>
                           <span class="forActive"></span>
                           </span>
                        </div>
                        <div class="contentCircle">
                           <div class="CirItem title-box active CirItem1">
                              <h2 class="title"><span>Nigerielles Events</span></h2>
                              <p>Nigerielles Events est le pôle événementiel de l’organisation. Tout au long de l’année, nous organisons des séries... 
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
                              <h2 class="title"><span>Nigerielles Business Club</span></h2>
                              <p>Notre organisation est composée de dynamiques femmes d’affaires et des femmes leaders en devenir, regroupées en... <a href="#" class="btn btn-more">Lire plus</a></p>
                              <i class="fa fa-tags"></i>
                           </div>
                           <div class="CirItem title-box CirItem4">
                              <h2 class="title"><span>Nigerielles Training</span></h2>
                              <p>C’est le volet formation de l’organisation. En partenariat avec des institutions et des cabinets de formation de la place... <a href="#" class="btn btn-more">Lire plus</a></p>
                              <i class="fa fa-book"></i>
                           </div>
                           <div class="CirItem title-box CirItem5">
                              <h2 class="title"><span>La Smart House</span></h2>
                              <p>La Smart House de Nigerielles est le projet de la mise en place d’un centre incubateur pour femmes entrepreneures... <a href="#" class="btn btn-more">Lire plus</a></p>
                              <i class="fa fa-home"></i>
                           </div>
                           <div class="CirItem title-box CirItem6">
                              <h2 class="title"><span>Nigerielles Le Magazine</span></h2>
                              <p>Au sortir de chaque édition du Salon National de l’entrepreneuriat féminin, un magazine d’éducation... <a href="#" class="btn btn-more">Lire plus</a> </p>
                              <i class="fa fa-briefcase"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12"></div>
               </div>
            </div>
        </section>
  <?php
  $content = ob_get_clean();
  require("template.php");
  ?>