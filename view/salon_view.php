<?php 
    $title = "SANEF";
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
              <img src="public/img/slide4.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>
            Depuis 2017, Nigérielles organisa le Salon National de l’Entrepreneuriat Féminin SANEF qui est un cadre d’échanges et de partages entre femmes entrepreneurs de l’espace UEMOA. Après le succès éclatant de la 1ere édition qui s’est tenue du 09 au 11 Novembre 2017 au Palais des Congres de Niamey et parrainé par la première dame du Niger Hajia Aissata Issoufou, le SANEF s’est ouvert aux jeunes femmes entrepreneurs des 8 pays de l’UEMOA. Ainsi donc, depuis 2018, Niamey accueille les entrepreneurs ouest-africaine durant une semaine pour discuter de différents thématiques afin de trouver de meilleures voies au développement de l’écosystème entrepreneurial en Afrique.
            Le Sanef se clôture par un diner de gala dénommé Nigerielles Awards au cours duquel des femmes nigériennes au parcours exceptionnel sont récompensées .</p>
          <a href="#">SANEF 2019</a><br>
          <a href="#">SANEF 2018</a><br>
          <a href="#">SANEF 2017</a>
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
              <a href="index.php?action=salon">
              Salon national de l'entrepreneuriat feminin
                  <small>Notre salon national</small>
                </a>
            </li>
            <li>
              <a href="index.php?action=boutique" class="first">
                  Boutique de vente des produits fabriqués au Niger
                  <small>Notre boutique</small>
                </a>
            </li>
            <li>
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