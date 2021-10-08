<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <?php
  session_start();
  if (!isset($_SESSION['profile_id'])) {
    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location: log_in.php');
    exit();
  } else {
    if ($_SESSION['profile_id'] == 3) {
      header('Location: admin.php');
      exit();
    }

    if ($_SESSION['profile_id'] == 1) {
      header('Location: log_in.php');
      exit();
    }
  }

  $nomesessao = $_SESSION['username'];
  ?>


  <title>My Care Shoe</title>
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

<body>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
      <p>Loading...</p>
    </div>
  </div><a class="section section-banner d-none d-xl-block" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" target="_blank" style="background-image: url(images/background-02-1920x60.jpg); background-image: -webkit-image-set( url(images/background-02-1920x60.jpg) 1x, url(images/background-02-3840x120.jpg) 2x )"></a>
  <div class="page">
    <header class="section page-header">



      <!--RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>

          <?php include('header_navbar.html') ?>


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
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">My Patients</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="settings.php">Account settings</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About My Care Shoe</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="logout.php">Log out</a>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>




    <!--Secção Inicial-->
    <section class="section main-section parallax-scene-js" style="background-color:powderblue;">
      <div class="container">
        <div class="row justify-content-center">

          <div class="main-decorated-box text-center text-xl-left">
            <h1 class="text-white text-xl-center wow slideInRight" data-wow-delay=".3s"><span class="big font-weight-bold d-inline-flex offset-right-170">My Care Shoe</span>
              <div class="decorated-subtitle text-italic text-white wow slideInLeft">Welcome back, <?php
                                                                                                    echo $nomesessao;
                                                                                                    ?></div>

          </div>

          <!--Botão para descer ate as info dos pacientes-->
          <div class="col-12 text-center offset-top-75" data-wow-delay=".2s"><a class="button-way-point d-inline-block text-center d-inline-flex flex-column justify-content-center" href="#" data-custom-scroll-to="search"><span class="fa-chevron-down"></span></a></div>
        </div>

      </div>


      <!--Aqueles triângulos que se mexem-->

      <div class="decorate-layer">
        <div class="layer-1">
          <div class="layer" data-depth=".20"><img src="images/parallax-item-1-563x532.png" alt="" width="563" height="266" />
          </div>
        </div>
        <div class="layer-2">
          <div class="layer" data-depth=".30"><img src="images/parallax-item-2-276x343.png" alt="" width="276" height="171" />
          </div>
        </div>
        <div class="layer-3">
          <div class="layer" data-depth=".40"><img src="images/parallax-item-3-153x144.png" alt="" width="153" height="72" />
          </div>
        </div>
        <div class="layer-4">
          <div class="layer" data-depth=".20"><img src="images/parallax-item-4-69x74.png" alt="" width="69" height="37" />
          </div>
        </div>
        <div class="layer-5">
          <div class="layer" data-depth=".40"><img src="images/parallax-item-5-72x75.png" alt="" width="72" height="37" />
          </div>
        </div>
        <div class="layer-6">
          <div class="layer" data-depth=".30"><img src="images/parallax-item-6-45x54.png" alt="" width="45" height="27" />
          </div>
        </div>
      </div>
    </section>



    <section class="section custom-section position-relative section-md" id="search">
      <div class="container">

        <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">Search <span class="text-primary"> Patient</span></h3>
        <div class="container section-md">
          <!--    <div class="row justify-content-center">
						<form action="">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search by</button>
									<div class="dropdown-menu">
									  <a class="dropdown-item" href="#">Name</a>
									  <a class="dropdown-item" href="#">Patient Number</a>
									</div>
								</div>
								<input type="text" class="form-control" aria-label="Search input with dropdown button">
								<div class="input-group-append">
									<button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal">Search</button>
								</div>
							</div>
						</form>


                 </div>
				      -->
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Patient Number</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>

              <?php

              include('C:/xampp/htdocs/mycareshoeapi/patient/patient_search_all.php');
              ?>

            </tbody>
          </table>

        </div>
      </div>



    </section>

    <?php include('footer.html') ?>


    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      jQuery(document).ready(function($) {

        $(".clickable-row").click(function() {


          window.location = $(this).data("href");

        });
      });
    </script>



</body>

</html>