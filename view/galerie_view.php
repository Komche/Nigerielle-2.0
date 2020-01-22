<?php
$title = "galerie";
ob_start();
?>
<div class="hero" id="highlighted">
  <div class="inner">
    <!--Slideshow-->
    <div class="container">
      <h2 class="h1 text-weight-light">
        <span class="text-primary">Galerie photos</span>
      </h2>
      <img src="public/img/slide4.JPG" width="1500px" height="200" class="center-block img-responsive">
    </div>
  </div>
</div>
<!-- ======== @Region: #content ======== -->
<div id="content">
  <!-- Mission Statement -->
  <div class="mission text-center block block-pd-sm block-bg-noise">
    <div class="container">
      <h2 class="text-shadow-white">
        Créer un réseau de femmes entrepreneures, qui permettra l’échange de bonnes pratiques, d’expériences, et mutualiser les moyens et les compétences.

      </h2>
    </div>
  </div>
  <!--Showcase-->
  <div class="showcase block block-border-bottom-grey">
    <div class="container">
      <h2 class="block-title">
        Galerie
      </h2>

      <div class="row">
                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="playa" class="link-gallery">
                            <img class="img-gallery modal-img" src="public/img/n1.JPG" width="90px" height="60px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="flores" class="link-gallery">
                            <img class="img-gallery" src="public/img/n3.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>-->
                <!--<div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n12.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n10.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n6.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>
                <div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n10.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cancha en el bosque" class="link-gallery">
                            <img class="img-gallery" src="public/img/n2.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>


                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="playa" class="link-gallery">
                            <img class="img-gallery modal-img" src="public/img/n3.JPG" width="90px" height="60px" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="flores" class="link-gallery">
                            <img class="img-gallery" src="public/img/n4.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>-->
                <!--<div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n5.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n6.JPG" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="rocas" class="link-gallery">
                            <img class="img-gallery" src="public/img/n12.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <!--</div>
                <div class="row">-->
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cascada" class="link-gallery">
                            <img class="img-gallery" src="public/img/n13.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a title="cancha en el bosque" class="link-gallery">
                            <img class="img-gallery" src="public/img/n14.jpg" width="90px" height="60px">
                        </a>
                    </div>
                </div>

            </div>
    </div>
  </div>
</div>

  <?php
  $content = ob_get_clean();
  require('template.php');
  ?>