<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Contacts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/mycareshoeicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    html.ie-10 .ie-panel,
    html.lt-ie-10 .ie-panel {
      display: block;
    }
  </style>
</head>
<?php
session_start();

?>

<body>

  <?php include('header.html') ?>


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
            <div class="team-classic-img"><img src="images/profile_photo.jpg" alt="" width="370" height="198" />
            </div>
            <div class="block-320 text-center">
              <h4 class="font-weight-bold">Pedro Martins</h4><span class="d-block">1160308@isep.ipp.pt</span>
              <p>Biomedical Engineering degree</p>
              <hr class="offset-top-40" />
              <ul class="justify-content-center social-links offset-top-30">
                <li><a class="fa fa-linkedin" href="#"></a></li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
          <div class="team-classic-wrap">
            <div class="team-classic-img"><img src="images/joao.jpg" alt="" width="370" height="198" />
            </div>
            <div class="block-320 text-center">
              <h4 class="font-weight-bold">João Coelho</h4><span class="d-block">1160796@isep.ipp.pt</span>
              <p>Biomedical Engineering degree</p>
              <hr class="offset-top-40" />
              <ul class="justify-content-center social-links offset-top-30">
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com/in/jo%C3%A3ocoelho10/"></a></li>

              </ul>
            </div>
          </div>
        </div>


        <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
          <div class="team-classic-wrap">
            <div class="team-classic-img"><img src="images/profile_photo.jpg" alt="" width="370" height="198" />
            </div>
            <div class="block-320 text-center">
              <h4 class="font-weight-bold">Sara Lopes</h4><span class="d-block">1190148@isep.ipp.pt</span>
              <p>Electrical and Computer Engineering degree</p>
              <hr class="offset-top-40" />
              <ul class="justify-content-center social-links offset-top-30">
                <li><a class="fa fa-linkedin" href="#"></a></li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-10 wow fadeInUp" data-wow-delay=".3s">
          <div class="team-classic-wrap">
            <div class="team-classic-img"><img src="images/profile_photo.jpg" alt="" width="370" height="198" />
            </div>
            <div class="block-320 text-center">
              <h4 class="font-weight-bold">Carolina Silva</h4><span class="d-block">1170654@isep.ipp.pt</span>
              <p>Electrical and Computer Engineering degree</p>
              <hr class="offset-top-40" />
              <ul class="justify-content-center social-links offset-top-30">
                <li><a class="fa fa-linkedin" href="#"></a></li>

              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>




  <?php include('footer.html') ?>

  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>
