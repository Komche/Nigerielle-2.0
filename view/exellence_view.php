<?php 
    $title = "Nigerielle d'exellence";
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
            Mis en œuvre pour une durée de 10 mois, le projet Nigérielles d’Excellence vise à accompagner 100 femmes entrepreneures dans la création et/ou le renforcement de leurs entreprises dans le secteur formel et à créer une plateforme web et mobile destinée à faciliter la mise en relation entre entrepreneures et clients..
              </h3>
              <img src="public/img/n12.jpg" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>
            Financé par le fonds PISCCA (Projets Innovants de la Société Civile et des Coalitions d’Acteurs) de l’Ambassade de France au Niger, ces formations ont traité des aspects concrets de la vie d’une entreprises tels que la fiscalité, le management de proximité, la gestion de la relation client, le marketing digital ou encore la gestion de la trésorerie .</p>
         <p>La seconde partie du projet consistera à créer une plateforme web et mobile offrant des services de formation et de vente en ligne. Destinée aux entrepreneurs en général, cette plateforme leur donnera accès à des modules de formation téléchargeables. Le site web et l’application mobile permettront également à des responsables d’entreprises n’ayant pas les moyens d’acquérir une boutique de bénéficier d’une vitrine à moindre frais, dans une démarche solidaire. </p>
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
              <a href="index.php?action=salon">
              salon national de l'entrepreneuriat feminin
                  <small>Notre salon national</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=boutique" class="first">
                  Boutique de vente des produits fabriqués au Niger
                  <small>Notre boutique</small>
                </a>
            </li>
            <li class="active">
              <a href="index.php?action=exellence">
                  Nigerielle d'exellence
                  <small>Notre nigerielle d'exellence</small>
                </a>
            </li>
            <li >
              <a href="index.php?action=foire">
                  La foire 3N
                  <small>Nos foires</small>
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