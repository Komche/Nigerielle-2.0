<?php
    $title = "contact";
    ob_start();
?>
<div class="hero" id="highlighted">
      <div class="inner">
        <!--Slideshow-->
        <div  class="container">
        <h2 class="h1 text-weight-light">
                      <span class="text-primary">Contactez-nous</span>
                    </h2>
                  <img src="public/img/n3.JPG" width="1500px" height="100" class="center-block img-responsive">
        </div>
      </div>
  </div>
   <!-- ======== @Region: #footer ======== -->
            <div class="container">
                <div class="row" id="contact">
                    <div class="col-md-3">
                        <address>
                            <address>
                            <strong>Adresse</strong><br>
                            <i class="fa fa-map-pin fa-fw text-primary"></i> Niamey-Niger
                            <br>
                            <i class="fa fa-phone fa-fw text-primary"></i> + 227 90 95 63 64/ +227 93956364
                            <br>
                            <i class="fa fa-envelope-o fa-fw text-primary"></i> contact@nigerielle.ne
                            <br>
                        </address>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-uppercase">
                            contactez-nous
                        </h4>
                        <div class="form">
                            <div id="sendmessage">votre message a été envoyé. Merci!</div>
                            <div id="errormessage"></div>
                            <form action="" method="post" role="form" class="contactForm">
                                <div class="form-group">
                                    <input type="text" name="nom" class="form-control" id="nom" placeholder="votre nom" data-rule="minlen:4" data-msg="entrer votre nom" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="votre adresse email" data-rule="email" data-msg="entrer votre adresse mail" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="objet" id="objet" placeholder="objet" data-rule="minlen:4" data-msg="entrer l'objet" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validation"></div>
                                </div>
                                <div class="text-center"><button type="submit">envoyer Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="text-uppercase">
                          rejoingnez-nous:
                        </h4>
                        <!--social media icons-->
                        <div class="social-media social-media-stacked">
                            <!--@todo: replace with company social media details-->
                            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
                            <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
                            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
                        </div>
                    </div>
                </div>
  <!-- ======== @Region: #content ======== -->
  

    </div>
    <!-- Services -->
    
    <!--
Background image callout with CSS overlay
Usage: data-block-bg-img="IMAGE-URL" to apply a background image clearly via jQuery .block-bg-overlay = overlays the background image, colour is inherited from block-bg-* classes .block-bg-overlay-NUMBER = determines opcacity value of overlay from 1-9 (default is 5) ie. .block-bg-overlay-2 or .block-bg-overlay-6
-->
  
   <!-- Call out block -->
   
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    $content = ob_get_clean();
    require('template.php');
  ?>