<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Contactos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
   </head>
     <?php
  session_start();
  
?>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div><a class="section section-banner d-none d-xl-block" target="_blank" style="background-image: url(images/background-02-1920x60.jpg); background-image: -webkit-image-set( url(images/background-02-1920x60.jpg) 1x, url(images/background-02-3840x120.jpg) 2x )"></a>
    <div class="page">
      <header class="section page-header">
       
          
          
          <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer rd-navbar-collapse bg-gray-dark">
              <div class="rd-navbar-aside">
                <ul class="list-inline navbar-contact-list">
                    
                    <!-- morada, número e mail-->
                    
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-phone"></span></div>
                      <div class="unit-body"><a href="tel:#">+351 22 83 40 500</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-envelope"></span></div>
                      <div class="unit-body"><a href="mailto:#">telesaude@gmail.com</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left"><span class="icon text-middle fa-map-marker"></span></div>
                      <div class="unit-body"><a href="#">R. Dr. António Bernardino de Almeida 431, 4200-072 Porto</a></div>
                    </div>
                  </li>
                </ul>
                
                  <!-- imagens das redes sociais-->
                  
               
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  
                    
                    <!--Barra de separadores-->

              

                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <?php
                      if(!isset($_SESSION['id'])){

                      ?>
                    
                      <li class="rd-nav-item"><a class="rd-nav-link" href="welcome.php">About IMAGEMED Diagnosis</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="log_in.html">Log in</a>

                      <?php
                      }else{


                        ?>
                      <li class="rd-nav-item "><a class="rd-nav-link" href="index.php">My profile</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About IMAGEMED Diagnosis</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="logout.php">Log out</a>
                      </li>
                    <?php } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
        
        
      <!-- Our team-->
      <section class="section section-md">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md col-12 text-center">
              <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Meet Our <span class="text-primary"> Team</span></h3>
              <p class="block-675">We are students from different Masters at the Polytechnic of Porto - School of Engineering</p>
            </div>
          </div>
            
            
          <div class="row row-50 justify-content-center">
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInLeft" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/profile_photo.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Pedro Martins</h4><span class="d-block">1160308@isep.ipp.pt</span>
                  <p>Biomedical Engineering degree</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com/in/carloscarvalhopereira/"></a></li>
                 
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/joao.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">João Coelho</h4><span class="d-block">1160796@isep.ipp.pt</span>
                  <p>Biomedical Engineering degree</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com/in/jo%C3%A3ocoelho10/"></a></li>
                   
                  </ul>
                </div>
              </div>
            </div>
        
              
              <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/profile_photo.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Sara Lopes</h4><span class="d-block">1190148@isep.ipp.pt</span>
                  <p>Electrical and Computer Engineering degree</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com/in/luiseppfernandes/"></a></li>
               
                  </ul>
                </div>
              </div>
            </div>
                     <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
              <div class="team-classic-wrap">
                <div class="team-classic-img"><img src="images/profile_photo.jpg" alt="" width="370" height="198"/>
                </div>
                <div class="block-320 text-center">
                  <h4 class="font-weight-bold">Carolina Silva</h4><span class="d-block">1170654@isep.ipp.pt</span>
                  <p>Electrical and Computer Engineering degree</p>
                  <hr class="offset-top-40"/>
                  <ul class="justify-content-center social-links offset-top-30">
                    <li><a class="fa fa-linkedin" href="https://www.linkedin.com/in/lucília-freitas/"></a></li>
            
                  </ul>
                </div>
              </div>
            </div>
              
          </div>
        </div>
      </section>
    
        
      
     
   <!--RODAPÉ-->
        
        
        <a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank" style="background-color:gainsboro; background-color:gainsboro;"></a>
      <footer class="section footer-classic section-sm">
        <div class="container">
          <div class="row row-30">
            
              <!--primeira coluna-->
              
              <div class="col-lg-3 wow fadeInLeft">
              <!--Brand--><a class="brand" href="index.html"></a>
              <p class="footer-classic-description offset-top-0 offset-right-25">ImageMed Diagnosis it is a project for the application of the technical knowledge obtained in a curricular unit of our master. We are students of the Master of Biomedical Engineering at the Polytechnic of Porto - School of Engineering</p>
              </div>
              
              
            <div class="col-lg-3 col-sm-8 wow fadeInUp">
              <P class="footer-classic-title">Contact Info</P>
              <div class="d-block offset-top-0">R. Dr. António Bernardino de Almeida 431<span class="d-lg-block"> 4200-072 Porto</span></div><a class="d-inline-block accent-link" href="mailto:#">telesaude@gmail.com</a><a class="d-inline-block" href="tel:#">+351 22 83 40 500</a>
            </div>
              
                            <!--segunda coluna-->

            <div class="col-lg-2 col-sm-4 wow fadeInUp" data-wow-delay=".3s">
              <P class="footer-classic-title">Quick Links</P>
              <ul class="footer-classic-nav-list">
                <li><a href="index.php">My Profile</a></li>
                <li><a href="about.php">About ImageMed Diagnosis</a></li>
                <li><a href="contacts.php">Contacts</a></li>
              </ul>
            </div>
              
              
          </div>
        </div>
        <div class="container wow fadeInUp" data-wow-delay=".4s">
          <div class="footer-classic-aside">
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved.</p>
            
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--coded by Drel-->
  </body>
</html>