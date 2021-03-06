
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ergotherapie Burtscher</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-11 col-xl-4">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-white mb-0">Kontakt<span class="text-primary"></span> </a></h1>
          </div>
          <div class="col-12 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                  <li><a href="index.html"><span>Home</span></a></li>
                  <li><a href="ergotherapie.html"><span>Ergotherapie</span></a></li>
                  <li><a href="Klettern.html"><span>Klettern als Therapie</span></a></li>
                  <li><a href="about.html"><span>zur Person</span></a></li>
                  <li class="active"><a href="contact.php"><span>Kontakt</span></a></li>
                  </ul> 
                </li>
                
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  

    <div class="site-blocks-cover overlay" style="background-image: url(images/christineschaukel99.jpg);" data-aos="fade" data-stellar-background-ratio="0.9">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Kontaktieren Sie mich<span class="typed-words"></span></h1>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5"  data-aos="fade">

            

            <form action="contact.php" method="POST" class="p-5 bg-white" style="margin-top: -150px;">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Vorname</label>
                  <input type="text" name="vorname" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Nachname</label>
                  <input type="text" name="nachname" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Betreff</label> 
                  <input type="subject" name="betreff" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Nachricht</label> 
                  <textarea name="nachricht" id="message" cols="30" rows="7" class="form-control" placeholder="Schreiben Sie mir Ihre Nachricht hier....."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="abschicken" value="absenden" class="btn btn-pill btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5"  data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Adresse</p>
              <p class="mb-4">Auf der Huben 1, 6200 Jenbach</p>

              <p class="mb-0 font-weight-bold">Telefon</p>
              <p class="mb-4">0680 1345784</p>

              <p class="mb-0 font-weight-bold">Email Adresse</p>
              <p class="mb-0">info@ergotherapie-burtscher.at</p> <p> </p>
              <p<li><a href="datenschutzerklaerung.html">Datenschutz / Impressum</li> </p>

            </div>

            <?php  

              if(isset($_POST['abschicken']))

              {

                mail("info@ergotherapie-burtscher.at", "Kontaktformular", 'Vorname: '.$_POST["vorname"].' Nachname: '.$_POST["nachname"].' Email: ' .$_POST["email"].' Betreff:  '. $_POST["betreff"].' Nachricht:  '. $_POST["nachricht"]);
                ?> 

                <h1 style="color: green;">Vielen Dank! Ich habe Ihre Nachricht erhalten!</h1> 
                <?php 



              }
             

            ?>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Wegbeschreibung</h3>
             <!--<a href="datenschutzerklaerung.html"target="_blank"><span>Datenschutzerkl??rung</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="datenschutzerklaerung.html"target="_blank"><span>Impressum</span></a> &nbsp;&nbsp;&nbsp;&nbsp; -->
              <p></p>
              <div>
                <iframe width="400" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=500&cp=47.39056109528359~11.772584169311507&lvl=18&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
                </iframe>
                <div style="white-space: nowrap; text-align: center; width: 400px; padding: 6px 0;">
                   <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=47.39056109528359~11.772584169311507&amp;sty=r&amp;lvl=18&amp;FORM=MBEDLD">Gr????ere Karte anzeigen</a> &nbsp; | &nbsp;
                   <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=47.39056109528359~11.772584169311507&amp;sty=r&amp;lvl=18&amp;rtp=~pos.47.39056109528359_11.772584169311507____&amp;FORM=MBEDLD">Wegbeschreibung abrufen</a>
               </div>
           </div>       
              <!-- <p><a href="index.html" class="btn btn-primary px-4 py-2 text-white btn-pill btn-sm">Home</a></p> -->
            </div> 

          </div>
        </div>
      </div>
    </div>
    

    <!-- <div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('images/hero_bg_2.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">besuchen Sie mich! </h2>
            <p class="mb-0 text-white lead">so finden Sie den Weg!</p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="map.html"target="_blank" class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">Karte ??ffnen</a></p>
          </div>
        </div>
      </div>
    </div> -->
    
    <!-- <footer class="site-footer">
     
      
      <div class="col-12 col-md-8 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

            
                <a href="index.html"><span>Home</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="ergotherapie.html"><span>Ergotherapie</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="Klettern.html"><span>Klettern als Therapie</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="about.html"><span>zur Person</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="datenschutzerklaerung.html"target="_blank"><span>Datenschutzerkl??rung</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="datenschutzerklaerung.html"target="_blank"><span>Impressum</span></a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contact.html"><span>Kontakt</span></a> <br> <br> 
                
                
        </nav>
    </div>


    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

</div>

</div>
</div>
    </footer> --> 


    <footer>

<div class="block-quick-info-2">
  <div class="container">
      <div class="block-quick-info-2-inner">
          <div class="row">
              <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="d-flex quick-info-2">
                      <!-- <span class="icon icon-home mr-3"></span> -->
                      <div class="text">
                          <strong class="d-block heading"></strong>
                          <a href="index.html"><span class="excerpt">Startseite <br></span> </a>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="d-flex quick-info-2">
                      <!-- <span class="icon icon-phone mr-3"></span> -->
                      <div class="text">
                          <a href="datenschutzerklaerung.html" d-block heading>Impressum</strong> </a>
                          <span class="excerpt"></span>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="d-flex quick-info-2">
                    <!-- <span class="icon icon-phone mr-3"></span> -->
                    <div class="text">
                        <a href="contact.php" d-block heading>Kontakt</strong> </a>
                        <span class="excerpt"></span>
                    </div>
                </div>
            </div>
              <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
                  <div class="d-flex quick-info-2">
                     <!--<span class="icon icon-envelope mr-3"></span> -->
                      <div class="text">
                        <a href="datenschutzerklaerung.html" d-block heading>Datenschutz</strong> </a>
                          <span class="excerpt"></span>
                      </div>
                  </div>
              </div>
              
            </div>
              </div>
          </div>
      </div>
  </div>
</div>

</footer>




  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <!-- <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: [],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script> -->

  <script src="js/main.js"></script>
  
  </body>
</html>

