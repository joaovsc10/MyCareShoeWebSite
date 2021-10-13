<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
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


  <section class="section section-intro context-dark">
    <div class="intro-bg" style="background-color:powderblue;" background-position: top center;></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-8 text-center">
          <h1 class="font-weight-bold wow fadeInLeft">My Care Shoe</h1>
          <p class="intro-description wow fadeInRight"> We want to help you, we will analyze your patient's sensor readings, and guide you to a better diagnose</p>
        </div>
      </div>
    </div>
  </section>


  <!--Caracteristicas-->


  <section class="section custom-section position-relative section-md">
    <div class="container">
      <div class="row">

        <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">Why <span class="text-primary"> Choose us</span></h3>
        <div class="row row-15">
          <div class="col-xl-6 wow fadeInUp mt-4" data-wow-delay=".2s">
            <div class="box-default">
              <div class="box-default-title">Innovative Solutions</div>
              <p class="box-default-description">We will use several areas of engineering such as Biomedical, Computer Science and Electrical Engineering in order to bring the most innovative solution for the prevention of diabetic ulcers.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-lightbulb-gears"></span>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInUp  mt-4" data-wow-delay=".3s">
            <div class="box-default">
              <div class="box-default-title">Strategic Thinking</div>
              <p class="box-default-description">We simply have an intentional and rational thought process that focuses on the analysis of critical factors and variables that will influence the long-term success of our team.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-target-2"></span>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInUp mt-3" data-wow-delay=".4s">
            <div class="box-default">
              <div class="box-default-title">Experienced Team</div>
              <p class="box-default-description">We come from different areas of engineering and along this path we have acquired all the knowledge necessary to carry out this project, in order to guarantee success.</p><span class="box-default-icon novi-icon icon-lg mercury-icon-user"></span>
            </div>
          </div>
          <div class="col-xl-6 wow fadeInUp mt-3" data-wow-delay=".5s">
            <div class="box-default">
              <div class="box-default-title">Creative Approach</div>
              <p class="box-default-description">We will use a method of analysis of the human gait in order to be able to correct mistakes made by the patient which, if systematic, could lead to the appearance of ulcers. </p><span class="box-default-icon novi-icon icon-lg mercury-icon-partners"></span>
            </div>
          </div>



        </div>
      </div>
    </div>

    


    <div class="container" >


        <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">My Care Shoe <span class="text-primary"> APP</span></h3>
</div>
  <div class="container" style="width:55%; height:55%;" >
<div class="row row-30 text-center">
<div class="container section-sm wow fadeInUp " data-wow-delay=".3s">
        <div class="team-classic-img "><img src="images/app_pictures.png" alt="" style="width:100%; height:100%;" />
        </div>
</div>
        </div>
<div class="row row-30 justify-content-center" id="downloadApp">
        <a href="./files/mycareshoe.apk" style="margin: 0 auto;font-size: 30px;" class="text-primary wow fadeInLeft downloadLink" data-wow-delay=".2s">Download the latest version of the APP</a>
</div>
<div class="row row-30 justify-content-center" id="downloadAppManual">
<a href="./files/user_manual_app.pdf" style="margin: 0 auto;font-size: 15px;" class="text-primary wow fadeInLeft mt-4" data-wow-delay=".2s" download>Download the user guindance manual to APP usage </a>
</div>
</div>
  </section>

  <!--Counters-->
  <section class="style=background-color:gainsboro;">
    <div class="container section-md">
      <div class="row row-30 text-center">

        <div class="col-xl-6 col-sm-6 col-12">
          <div class="counter-classic">
            <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-time"></span><span class="counter text-blue" data-speed="2000">2021</span>
            </div>
            <div class="counter-classic-title">Year of Establishment</div>
          </div>
        </div>


        <div class="col-xl-6 col-sm-6 col-12">
          <div class="counter-classic">
            <div class="counter-classic-number"><span class="icon-lg novi-icon offset-right-10 mercury-icon-group"></span><span class="counter text-blue" data-speed="2000">4</span>
            </div>
            <div class="counter-classic-title">Team Members</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include('footer.html') ?>

  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

  <script>
  $(".downloadLink").click(
    function(e) {
        e.preventDefault();

        //open download link in new page
        window.open( $(this).attr("href") );

        //redirect current page to success page
        window.location="http://10.8.129.207/mycareshoewebsite/site/about.php";
        window.focus();
    }
);

      </script>

</body>

</html>
