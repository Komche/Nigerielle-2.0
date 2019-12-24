<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
    <link href="public/lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="public/css/style.css" rel="stylesheet">

    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
    <link href="#" id="colour-scheme" rel="stylesheet">

    <!-- =======================================================
    Theme Name: Flexor
    Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body class="page-index has-hero">
    <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
    <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">
        <!-- ======== @Region: #navigation ======== -->
        <div id="navigation" class="wrapper">
            <!--Hidden Header Region-->
            <div class="header-hidden collapse">
                <div class="header-hidden-inner container">
                    <div class="row">
                        <div class="col-md-3">
                            <h3>
                                About Us
                            </h3>
                            <p>Flexor is a super flexible responsive theme with a modest design touch.</p>
                            <a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i> Learn more</a>
                        </div>
                        <div class="col-md-3">
                            <!--@todo: replace with company contact details-->
                            <h3>
                                Contact Us
                            </h3>
                            <address>
                                <strong>Flexor Bootstrap Theme Inc</strong>
                                <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                                Sunshine House, Sunville. SUN12 8LU.
                                <br>
                                <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                                019223 8092344
                                <br>
                                <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                                info@flexorinc.com
                            </address>
                        </div>
                        <div class="col-md-6">
                            <!--Colour & Background Switch for demo - @todo: remove in production-->
                            <h3>
                                Theme Variations
                            </h3>
                            <div class="switcher">
                                <div class="cols">
                                    Backgrounds:
                                    <br>
                                    <a href="#benches" class="background benches active" title="Benches">Benches</a> <a href="#boots" class="background boots " title="Boots">Boots</a> <a href="#buildings" class="background buildings " title="Buildings">Buildings</a>
                                    <a href="#city" class="background city " title="City">City</a> <a href="#metro" class="background metro " title="Metro">Metro</a>
                                </div>
                                <div class="cols">
                                    Colours:
                                    <br>
                                    <a href="#orange" class="colour orange active" title="Orange">Orange</a> <a href="#green" class="colour green " title="Green">Green</a> <a href="#blue" class="colour blue " title="Blue">Blue</a> <a href="#lavender" class="colour lavender " title="Lavender">Lavender</a>
                                </div>
                            </div>
                            <p>
                                <small>Selection is not persistent.</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Header & navbar-branding region-->
            <div class="header">
                <div class="header-inner container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                            <a class="navbar-brand" href="index.html" title="Home">
                                <h1 class="">
                                    <img src="public/img/logo.jpg" width="200px" height="150px" alt="Flexor Logo"> 
                                </h1>
                            </a>
                            
                        </div>
                        <!--header rightside-->
                        <div class="col-md-4">
                            <!--user menu-->
                            <ul class="list-inline user-menu pull-right">
                                <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="register.html" class="text-uppercase">Enregistrer</a></li>
                                <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="login.html" class="text-uppercase">Se connecter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="navbar navbar-default">
                    <!--mobile collapse menu button-->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <!--social media icons-->
                    <div class="navbar-text social-media social-media-inline pull-right">
                        <!--@todo: replace with company social media details-->
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav" id="main-menu">
                            <li class="icon-link">
                                <a href="index.html"><i class="fa fa-home"></i></a>
                            </li>
                            <li><a href="#">Accueil</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prèsentation<b class="caret"></b></a>
                                <!-- Dropdown Menu -->
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Missions</li>
                                    <li><a href="elements.html" tabindex="-1" class="menu-item">Objectifs</a></li>
                                    <li><a href="about.html" tabindex="-1" class="menu-item">Valeurs</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Activités</a></li>
                            <li><a href="#">Programmes</a></li>
                            <li><a href="#">Actualités</a></li>
                            <li><a href="#">Galerie</a></li>
                            <li><a href="#">Contact</a></li>

                         <!--<li class="dropdown dropdown-mm">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mega Menu<b class="caret"></b></a>
                                
                                <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                                    <li class="row">
                                        <ul class="col-md-6">
                                            <li class="dropdown-header">Websites and Apps</li>
                                            <li><a href="#">Analysis and Planning</a></li>
                                            <li><a href="#">User Experience / Information Architecture</a></li>
                                            <li><a href="#">User Interface Design / UI Design</a></li>
                                            <li><a href="#">Code &amp; Development / Implementation &amp; Support</a></li>
                                        </ul>
                                        <ul class="col-md-6">
                                            <li class="dropdown-header">Enterprise solutions</li>
                                            <li><a href="#">Business Analysis</a></li>
                                            <li><a href="#">Custom UX Consulting</a></li>
                                            <li><a href="#">Quality Assurance</a></li>
                                        </ul>
                                    </li>
                                    
                                
                                    <li class="dropdown-footer">
                                        <div class="row">
                                            <div class="col-md-7">Like the lite version? <strong>Get the extended version of Flexor.</strong></div>
                                            <div class="col-md-5">
                                                <a href="https://bootstrapmade.com" class="btn btn-more btn-lg pull-right"><i class="fa fa-cloud-download"></i> Get It Now</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>-->
                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </div>
    </div>
    <?= $content ?>
        <!-- ======== @Region: #footer ======== -->
        <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
            <div class="container">

                <div class="row" id="contact">

                    <div class="col-md-3">
                        <address>
                            <strong>Nigerielles:</strong><br>
                            Association des femmes nigeriennes entrepreneures et porteuses de projet pour le développement économique du Niger
                            <br>
                            <address>
                            <strong>Adresse</strong><br>
                            <i class="fa fa-map-pin fa-fw text-primary"></i> Niamey-Niger
                            <br>
                            <i class="fa fa-phone fa-fw text-primary"></i> + 227 90 95 63 64/ +227 939à6364
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
                            <div id="sendmessage">Your message has been sent. Thank you!</div>
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
                <div class="row subfooter">
                    <!--@todo: replace with company copyright details-->
                    <div class="col-md-7">
                        <strong>Nigerielle</strong>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flexor
            -->
                            Developpée par <a href="https://bootstrapmade.com/">NOVATECH</a>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <ul class="list-inline pull-right">
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <a href="#top" class="scrolltop">Top</a>

            </div>
        </footer>

        <!-- Required JavaScript Libraries -->
        <script src="public/lib/jquery/jquery.min.js"></script>
        <script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="public/lib/stellar/stellar.min.js"></script>
        <script src="public/lib/waypoints/waypoints.min.js"></script>
        <script src="public/lib/counterup/counterup.min.js"></script>
        <script src="public/contactform/contactform.js"></script>

        <!-- Template Specisifc Custom Javascript File -->
        <script src="public/js/custom.js"></script>

        <!--Custom scripts demo background & colour switcher - OPTIONAL -->
        <script src="public/js/color-switcher.js"></script>

        <!--Contactform script -->
        <script src="public/contactform/contactform.js"></script>
</body>

</html>