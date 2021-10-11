<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Login</title>
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

  <section class="section custom-section position-relative section-md">
    <div class="container wow fadeInLeft">
      <h2 class="font-weight-bold">Account Login</h2>
      <form id="form" action="http://10.8.129.207/mycareshoeapi/user/login.php" method="POST">
        <label for="username" class="mt-4"><strong>Username/E-mail</strong></label>
        <div class="input-group form-group ">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>

          <input type="text" class="form-control" placeholder="Enter your username / email" name="usernameEmail">

        </div>

        <label for="password" class="mt-4"><strong>Password</strong></label>
        <div class="input-group form-group ">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" name="password" class="form-control" placeholder="Enter your password">
        </div>

        <div class="row row-30 text-center">
          <div class="col-xl-6 col-sm-6 col-12">
            <button type="submit" class="button-width-190 button-primary button-circle button-lg button offset-top-30">Submit</button>
          </div>
          <div class="col-xl-6 col-sm-6 col-12">
            <a href='sign_up.php' class="button-width-190 button-primary button-circle button-lg button offset-top-30">Sign up</a>
          </div>
        </div>
      </form>
    </div>


  </section>






  <?php include('footer.html') ?>

  <script src="js/main.js"></script>
  <!--===============================================================================================-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
