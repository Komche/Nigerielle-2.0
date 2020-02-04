<?php 
    $title = "La foire 3N";
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
            En partenariat avec le Haut-Commissariat à l’Initiative 3N et d’autres structures d’accompagnement des femmes entrepreneurs, Nigerielles organise chaque trimestre la Foire des Nigériennes qui Nourrissent les Nigériens, la Foire des 3N, a la devanture du Siege du Haut-Commissariat à l’Initiative 3N.
              </h3>
              <img src="public/img/slide2.JPG" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b">
            <p>
            Elle regroupe une cinquantaine de femmes transformatrices agroalimentaires qui viennent exposer et vendre leurs produits et services durant 48h. Cette initiative plébiscitée par la population de Niamey et ses alentours rentre dans le cadre de la campagne ConsommonsNigerien qui vise à inciter les nigériens a consommer les produits Fabriqués au Niger. </p>
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
            <li>
              <a href="index.php?action=exellence">
                  Nigerielle d'exellence
                  <small>Notre nigerielle d'exellence</small>
                </a>
            </li>
            <li class="active" >
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