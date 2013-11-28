<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Justen Doherty - Web Developer</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon" /> 
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css"/>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster&subset=latin" type="text/css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        <style>
            
            .mask-galaxy h1 {
                font-family: "Lobster", sans-serif;
                font-size: 30px;
                font-weight: bold;
                text-align: center;
                text-transform: none;
                line-height: 1.4;
                margin: 0;
                padding: 0;                
            }

            .mask-galaxy {
                background: url('http://www.jpl.nasa.gov/spaceimages/v2/getMediumImage.php?id=PIA03519') center center;
                -webkit-text-fill-color: transparent;
                -webkit-background-clip: text;
                -webkit-animation: travelGalaxy 10s linear infinite;
                -moz-animation: travelGalaxy 10s linear infinite;
                -moz-text-fill-color: transparent;
                -moz-background-clip: text;
                -moz-animation: travelGalaxy 10s linear infinite;
                -o-text-fill-color: transparent;
                -o-background-clip: text;
                -o-animation: travelGalaxy 10s linear infinite;
            }

            @-webkit-keyframes travelGalaxy {
                0% {background-position: right bottom;}
                100% {background-position: left top;}
            }
            @-moz-keyframes travelGalaxy {
                0% {background-position: right bottom;}
                100% {background-position: left top;}
            }            
        </style>

    </head>

    <body data-spy="scroll" data-target="#my-nav" id="cbp-so-scroller">
        <!-- Navigation Bar -->
        <div class="navbar navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <article class="mask-galaxy"><h1>Justen Doherty</h1></article>                    
                      
                </div>

                <nav id="my-nav" class="navbar-collapse collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a href="#header">Home</a></li>
                        <li><a href="#about">Who Am I</a></li>
                        <li><a href="#services">What I Do</a></li>
                        <li><a href="#portfolio">What I've Done</a></li>
                        <li><a href="#testimonials">What People Said</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="cv/Justen_Doherty_Snr_PHP_Developer_2013.docx">CV</a></li>                        
                    </ul>
                </nav><!--/.navbar-collapse -->

            </div>
        </div>
        <!-- End of Navigation Bar -->


        <!-- Jumbotron -->
        <section class="jumbotron" id="header" style="opacity:0.8;filter:alpha(opacity=80);">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="main-photo" id="header-photo">
                            <figure class="round-outline"><img class="round-photo" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1a0/35c/00dcf08.jpg" alt=""></figure>
                        </div>
                        <h1>Hello, I'm Justen Doherty</h1>
                        <p>I am a full service web design and development expert. I specialise in developing ideas into beautiful websites that add value and make people happy.</p>
                        <p>
                            <a href="#about">
                                <i class="fa fa-chevron-down fa-2x pulsate-opacity"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Jumbotron -->


        <!-- About Section -->
        <section id="about" class="cbp-so-section cbp-so-init" style="position: relative;z-index: 99;opacity:1.0;filter:alpha(opacity=100);">
            <div class="container cbp-so-side cbp-so-side-top">

                <h1>Who is Justen Doherty?</h1>

                <?php /* 
                <div class="row">
                    <div class="col-sm-2 col-sm-offset-3">
                        <figure class="round-outline">
                            <a href="assets/photo1.jpg" class="round-photo-anchor" rel="prettyPhoto[about-gal]">
                                <img class="round-photo img-responsive" src="assets/photo1-sm.jpg" alt="">
                                <div class="round-caption-bg"></div>
                                <i class="fa fa-search fa-lg"></i>
                            </a>
                        </figure>
                    </div>
                    <div class="col-sm-2">
                        <figure class="round-outline">
                            <a href="assets/photo2.jpg" class="round-photo-anchor" rel="prettyPhoto[about-gal]">
                                <img class="round-photo img-responsive" src="assets/photo2-sm.jpg" alt="">
                                <div class="round-caption-bg"></div>
                                <i class="fa fa-search fa-lg"></i>
                            </a>
                        </figure>
                    </div>
                    <div class="col-sm-2">
                        <figure class="round-outline">
                            <a href="assets/photo3.jpg" class="round-photo-anchor" rel="prettyPhoto[about-gal]">
                                <img class="round-photo img-responsive" src="assets/photo3-sm.jpg" alt="">
                                <div class="round-caption-bg"></div>
                                <i class="fa fa-search fa-lg"></i>
                            </a>
                        </figure>
                    </div>
                </div>
                */ ?>
                <p>I'm an easy going kind of guy who enjoys tackling technical challenges, discussing current web trends and learning new tricks.</p>
                <p>I believe in keeping things simple while constantly delivering quality using the best tools available.</p>                
                <p>When I'm not coding; you can normally find me drinking tea, mountain biking, snowboarding (badly) and watching films.</p>

                <div class="row social-icons">
                    <div class="col-sm-1 col-sm-offset-4">
                        <a class="icon-social icon-facebook" href="https://www.facebook.com/justen.doherty">Facebook</a>
                    </div>
                    <div class="col-sm-1">
                        <a class="icon-social icon-twitter" href="http://www.twitter.com/phpchap">Twitter</a>
                    </div>
                    <div class="col-sm-1">
                        <a class="icon-social icon-skype" href="skype:phpchap?call">Skype</a>
                    </div>
                    <div class="col-sm-1">
                        <a class="icon-social icon-dribbble" href="#">Dribbble</a>
                    </div>                    
                </div>

            </div>
        </section>
        <!-- End of About Section -->


        <!-- Services Section -->
        <section id="services" class="cbp-so-section cbp-so-init" style="position: relative;z-index: 99;opacity:1.0;filter:alpha(opacity=100);">
            <div class="container cbp-so-side cbp-so-side-top">
                <h1>What I do Exactly</h1>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <p>Over the years I have adopted the lean way of thinking when it comes to software development, i believe its essential to have short feedback loops to constantly drive development and deliver quality</p>
                    </div>
                    <div class="col-md-3 service-column">
                        <figure class="service-icon">
                            <i class="fa fa-thumbs-up"></i>
                        </figure>
                        <h2><a href="#">Decide</a></h2>
                        <p class="service-description">Confirm requirements and identify value, aim to reduce waste and produce list of deliverables.</p>
                    </div>
                    <div class="col-md-3 service-column">
                        <figure class="service-icon">
                            <i class="fa fa-pencil"></i>
                        </figure>
                        <h2><a href="#">Develop</a></h2>
                        <p class="service-description">Turn stories into code using the right tools for the right job, turn stories into testable code to confirm requirements</p>
                    </div>
                    <div class="col-md-3 service-column">
                        <figure class="service-icon">
                            <i class="fa fa-truck"></i>
                        </figure>
                        <h2><a href="#">Deliver</a></h2>
                        <p class="service-description">Review and deploy production code in seconds using a scripted delivery pipeline with rollback capabilities</p>
                    </div>
                    <div class="col-md-3 service-column">
                        <figure class="service-icon">
                            <i class="fa fa-smile-o"></i>
                        </figure>
                        <h2><a href="#">Discuss</a></h2>
                        <p class="service-description">Showcase functionality and discuss next iteration of requirements, fix defects and refine requirements</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Services Section -->


        <!-- Portfolio Section -->
        <section id="portfolio" class="cbp-so-section cbp-so-init" style="position: relative;z-index: 99;opacity:1.0;filter:alpha(opacity=100);">
            <div class="container cbp-so-side cbp-so-side-top">
                <h1>My latest work</h1>
                <ul id="portfolio-grid" class="row portfolio-row">
                    <li class="portfolio-mix col-md-3 ui-design">
                        <figure class="portfolio-item">
                            <a href="http://www.timeout.com/london" target="_blank">
                                <img class="img-responsive" src="assets/timeout.jpg" alt="TimeOut" title="TimeOut">
                                <div class="caption-bg"></div>
                                <h3>TimeOut Global Platform</h3>
                                <p class="portfolio-item-description">symfony 2.0, symfony 1.2, Apache solr, Varnish, REST, SOA, CMS development, API integration, Code Reviews using github, git feature branches, capistrano, PHPunit, selenium, jenkins, HTML/CSS development using LESS</p>
                            </a>
                        </figure>
                    </li>
                    <li class="portfolio-mix col-md-3 web-design">
                        <figure class="portfolio-item">
                            <a href="http://www.appboxmedia.com/" target="_blank">
                                <img class="img-responsive" src="assets/appbox.jpg" alt="AppBox Media" title="AppBox Media">
                                <div class="caption-bg"></div>
                                <h3>AppBox Media</h3>
                                <p class="portfolio-item-description">Laravel4, Full build and delivery, Amazon EC2, Route 53, SNS, HTML5, CSS3, Responsive Layout</p>
                            </a>
                        </figure>
                    </li>
                    <li class="portfolio-mix col-md-3 add-ons">
                        <figure class="portfolio-item">
                            <a href="http://www.atlashostels.com" target="_blank">
                                <img class="img-responsive" src="assets/atlashostel.jpg" alt="Atlas Hostels" title="Atlas Hostels">
                                <div class="caption-bg"></div>
                                <h3>Atlas Hostels</h3>
                                <p class="portfolio-item-description">Concrete5, Booking Engine Integration, Amazon EC2, Route 53, SNS, HTML5, CSS3, Responsive Layout</p>
                            </a>
                        </figure>
                    </li>
                    <li class="portfolio-mix col-md-3 ui-design">
                        <figure class="portfolio-item">
                            <a href="http://beta.connectingtravel.com" target="_blank">
                                <img class="img-responsive" src="assets/connectingtravel.jpg" alt="Connecting Travel" title="Connecting Travel">
                                <div class="caption-bg"></div>
                                <h3>Connecting Travel</h3>
                                <p class="portfolio-item-description">symfony 2.0, Elgg, REST, API integration, Code Reviews using github, git feature branches, PHPunit, selenium, HTML/CSS</p>
                            </a>
                        </figure>
                    </li>
                    <li class="portfolio-mix col-md-3 graphics">
                        <figure class="portfolio-item">
                            <a href="http://neverforget.tributefunds.com" target="_blank">
                                <img class="img-responsive" src="assets/neverforget.jpg" alt="Never Forget Tribute Funds" title="Never Forget Tribute Funds">
                                <div class="caption-bg"></div>
                                <h3>Tribute Funds</h3>
                                <p class="portfolio-item-description">symfony 1.4, symfony plugin development, mysql 5, APC, doctrine 1.2, Apostrophe CMS, SVN, SAML, SagePay, SMARTDebit, SOAP, REST, JSON, XML, jQuery, HTML, CSS, JIRA, DNS, SSL, Apache config</p>
                            </a>
                        </figure>
                    </li>
                    <li class="portfolio-mix col-md-3 ui-design">
                        <figure class="portfolio-item">
                            <a href="http://www.viridor.com" target="_blank">
                                <img class="img-responsive" src="assets/viridor.jpg" alt="Viridor" title="Viridor">
                                <div class="caption-bg"></div>
                                <h3>Viridor</h3>
                                <p class="portfolio-item-description">Wordpress, Amazon EC2, CMS training</p>
                            </a>
                        </figure>
                    </li>
                    <li class="portfolio-mix col-md-3 graphics">
                        <figure class="portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="assets/richardson.jpg" alt="Richardson Hotels" title="Richardson Hotels">
                                <div class="caption-bg"></div>
                                <h3>Richardson Hotels</h3>
                                <p class="portfolio-item-description">SilverStripe, Amazon EC2, CMS training</p>
                            </a>
                        </figure>
                    </li>
                    <li class="portfolio-mix col-md-3 graphics">
                        <figure class="portfolio-item">
                            <a href="#">
                                <img class="img-responsive" src="assets/sega.jpg" alt="SEGA" title="SEGA">
                                <div class="caption-bg"></div>
                                <h3>SEGA</h3>
                                <p class="portfolio-item-description">OO PHP5, Omniture, SilverPOP, jQuery, API integration, payment gateway integration, code reviews, pair programming, release planning and management </p>
                            </a>
                        </figure>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End of Portfolio Section -->


        <!-- Testimonials Section -->
        <section id="testimonials" class="cbp-so-section cbp-so-init" style="position: relative;z-index: 99;opacity:1.0;filter:alpha(opacity=100);">
            <div class="container cbp-so-side cbp-so-side-top">
                <h1>What my colleagues said about me</h1>
                <div class="testimonials">
                    <div id="da-slider" class="da-slider">
                        <div class="da-slide">
                            <div class="da-img">
                                <div class="round-outline">
                                    <img class="round-photo" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/6/005/01e/149/0e097fe.jpg" title="Stephen Breakey, Senior Technical Project Manager. Net Mobile AG" alt="Stephen Breakey, Senior Technical Project Manager. Net Mobile AG" />
                                </div>
                            </div>
                            <p class="block-cite">Stephen Breakey, Senior Technical Project Manager. Net Mobile AG</p>
                            <blockquote><p>We hired Justen for a few months on contract and he performed excellently and above our expectations. Justen performed so well, we in fact wanted to hire him on a permanent basis, unfortunately we acted too late. I would have no problem recommending Justen for any technical role.</p></blockquote>
                        </div>

                        <div class="da-slide">
                            <div class="da-img">
                                <div class="round-outline">
                                    <img class="round-photo" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/1/000/018/054/37e1cc8.jpg" title="Richard Patterson, Head of Digital. Whitewater Creative Services" alt="Richard Patterson, Head of Digital. Whitewater Creative Services" />
                                </div>
                            </div>
                            <p class="block-cite">Richard Patterson, Head of Digital. Whitewater Creative Services</p>
                            <blockquote><p>Justen was a great asset to our team and he will be really missed here. He takes great pride in his work and always rises to the challenge of any development issues. He is dedicated and passionate about his work, his easy going nature and sense of humour made working with Justen an all round enjoyable experience.</p></blockquote>
                        </div>

                        <div class="da-slide">
                            <div class="da-img">
                                <div class="round-outline">
                                    <img class="round-photo" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/8/000/211/371/10bc734.jpg" title="Julian Simpson, Digital Production Manager. Galileo Integrated Marketing" alt="Julian Simpson, Digital Production Manager. Galileo Integrated Marketing" />
                                </div>
                            </div>
                            <p class="block-cite">Julian Simpson, Digital Production Manager. Galileo Integrated Marketing</p>
                            <blockquote><p>Justen was a joy to work with. On numerous occasions, his contributions were both above and beyond the call of duty and vital to the success of difficult and incredibly time-intense projects. As a team member he makes outstanding contributions, leads fellow team members where necessary and is never afraid to jump in with both feet when times are difficult.</p></blockquote>
                        </div>

                        <div class="da-slide">
                            <div class="da-img">
                                <div class="round-outline">
                                    <img class="round-photo" src="http://m.c.lnkd.licdn.com/media/p/4/000/161/0c5/34ee886.jpg" title="Paul Allen, Senior Project Manager. Sense Internet" alt="Paul Allen, Senior Project Manager. Sense Internet" />
                                </div>
                            </div>
                            <p class="block-cite">Paul Allen, Senior Project Manager. Sense Internet</p>
                            <blockquote><p>Justen is always actively and enthusiastically keen to learn and to evolve, making him an innovative developer for whom no challenge is ever too big to handle. Justen is always generous in sharing his knowledge and experience too, and is an all round great guy to work with. I have no problem in recommending Justen to any potential employer.</p></blockquote>
                        </div>

                        <nav class="da-arrows">
                            <span class="da-arrows-prev"></span>
                            <span class="da-arrows-next"></span>
                        </nav>
 
                   </div>

                </div>
            </div>
        </section>
        <!-- End of Testimonials Section -->


        <!-- Contact Section -->
        <section id="contact" class="cbp-so-section cbp-so-init" style="position: relative;z-index: 99;opacity:1.0;filter:alpha(opacity=100);">
            <div class="container cbp-so-side cbp-so-side-top">
                <h1>Contact me</h1>
                <div class="row">
                    <div class="col-sm-2 col-sm-offset-3">
                        <div class="icon">
                            <i class="fa fa-map-marker fa-2x"></i>
                        </div>
                        <p class="contact-meta">Not giving you my personal address!</p>
                    </div>
                    <div class="col-sm-2">
                        <div class="icon">
                            <i class="fa fa-envelope fa-2x"></i>
                        </div>
                        <p class="contact-meta"><a href="mailto:phpchap@gmail.com">phpchap@gmail.com</a></p>
                    </div>
                    <div class="col-sm-2">
                        <div class="icon">
                            <i class="fa fa-phone fa-2x"></i>
                        </div>
                        <p class="contact-meta">07825 788953</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form action="contact.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" id="nameinput" placeholder="Name" name="contact-name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control input-lg" id="emailinput" placeholder="Email" name="contact-email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" name="contact-message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-white btn-big">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Contact Section -->

        <!-- Footer -->
        <div class="footer" style="position: relative;opacity:1.0;filter:alpha(opacity=100);opacity:1.0;filter:alpha(opacity=100);">
            <div class="container">
                <p>© www.anotherwebdeveloper.com</p>
            </div>
        </div>
        <!-- End of Footer -->

        <div class="scrolltotop">
            <i class="fa fa-chevron-up"></i>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/cbpScroller.js"></script>
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="/js/jquery.tubular.1.0.js"></script>        

    </body>
</html>