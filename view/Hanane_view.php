<?php 
    $title = "Hanane";
    ob_start();
?>

<!-- ======== @Region: #content ======== -->
<div id="content">
    <div class="container" id="about">
    <div class="jumbotron">
          <h1>
            Hanane
            </h1>
          <p>
          Nigerielles Hanane : entreprise sociale offrant des kits d'hygiène menstruelle composés de serviettes lavables et réutilisables à moindre coût pour permettre à chaque jeune femme nigérienne d'avoir accès à des protections hygiéniques lors de leurs règles. Le projet comporte un volet formation et sensibilisation sur les questions de sexualité féminine. 
          </p>
        </div>
        <hr>
      <div class="row">
        <!--main content-->
        <div class="col-md-9 col-md-push-3">
        
          <div class="block block-border-bottom-grey block-pd-sm">
            
            <img src="public/img/n3.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>Hanane, ce sont des serviettes hygiéniques lavables et réutilisables qui se portent confortablement et qui soulageront les gènes des femmes pendant leurs cycles menstruels. C’est la solution menstruelle confortable, économique et satisfaisante. Utilisée pendant les règles, après la maternité, pour les fuites urinaires ou encore pour les femmes fistuleuses, elle est fabriquée localement par des femmes et des jeunes, préalablement formés pour une production uniforme et une meilleure efficacité dans la confection. Les serviettes HANANE sont faites de tissus en coton qui respectent les parois vaginales. Un doux coton en dessus (coté vagin) et en dessous (coté culotte) doublé d’un tissu imperméable pour éviter les fuites et respirant pour éviter les odeurs à l’intérieur duquel se trouve une couche de tissus en coton doux absorbant pour contenir le flux sanguin. Le tout est cousu spécialement pour digérer le flux dans la longueur de la serviette et garantir une parfaite protection. La serviette peut être repliée sur elle-même et maintenue par des boutons pressions, elle est discrète et se glisse facilement dans la poche ou le sac qu’elle soit propre ou utilisée. Pratique et facile d’entretien, la serviette lavable et réutilisable Hanane est saine et économique et s’utilise partout, au travail, à l'école
              </p>
         </div>
        </div>
      </div>
     </div>
        <!-- sidebar -->
        <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
          <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="index.php?action=mission" class="first">
                  Notre Mission 
                  <small>How It All Began</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=objectif">
                  Notre objectif 
                  <small>Our team of stars</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=valeur">
                  Notre Valeur
                  <small>How to get in touch</small>
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