<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Patient Details</title>
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
if (!isset($_SESSION['profile_id'])) {

  // restrição para o caso de inserir o endereço sem ter feito login
  header('Location:log_in.php');
  exit();
} else {
  if ($_SESSION['profile_id'] == 3) {
    header('Location:index.php');
    exit();
  }
}
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
    <div class="container wow fadeInLeft">
      <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">Patient's <span class="text-primary"> personal information</span></h3>
      <div class="row row-40 mt-5">
        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".2s">
          <div class="box-default">
            <div class="box-default-title">Name</div>
            <p class="box-default-description" id="name"></p><span class="box-default-icon novi-icon icon-lg fas fa-user"></span>
          </div>
        </div>
        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".3s">
          <div class="box-default">
            <div class="box-default-title">Patient Number</div>
            <p class="box-default-description" id="patient_number"></p><span class="box-default-icon novi-icon icon-lg fas fa-calculator"></span>
          </div>
        </div>
        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".4s">
          <div class="box-default">
            <div class="box-default-title">Gender</div>
            <p class="box-default-description" id="gender"></p><span class="box-default-icon novi-icon icon-lg fas fa-question"></span>
          </div>
        </div>
        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".5s">
          <div class="box-default">
            <div class="box-default-title">Birth</div>
            <p class="box-default-description" id="birth"></p><span class="box-default-icon novi-icon icon-lg fas fa-calendar"></span>
          </div>
        </div>

        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".6s">
          <div class="box-default">
            <div class="box-default-title">Diabetes</div>
            <p class="box-default-description" id="diabetes"></p><span class="box-default-icon novi-icon icon-lg fas fa-medkit"></span>
          </div>
        </div>

        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".7s">
          <div class="box-default">
            <div class="box-default-title">Height</div>
            <p class="box-default-description" id="height"></p><span class="box-default-icon novi-icon icon-lg fas fa-sort"></span>
          </div>
        </div>
        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".8s">
          <div class="box-default">
            <div class="box-default-title">Weight</div>
            <p class="box-default-description" id="weight"></p><span class="box-default-icon novi-icon icon-lg fas fa-tachometer"></span>
          </div>
        </div>
        <div class="col-xl-4 wow fadeInUp" data-wow-delay=".9s">
          <div class="box-default">
            <div class="box-default-title">Feet Size</div>
            <p class="box-default-description" id="feet_size"></p><span class="box-default-icon novi-icon icon-lg fas fa-arrows-h"></span>
          </div>
        </div>

        <div class="col-xl-4 wow fadeInUp" data-wow-delay="1s">
          <div class="box-default">
            <div class="box-default-title">Feet Type</div>
            <p class="box-default-description" id="type_feet"></p><span class="box-default-icon novi-icon icon-lg fas fa-question-circle"></span>
          </div>
        </div>



      </div>
      <div class="col-xl-4 wow fadeInUp mt-4" data-wow-delay="1s">
        <a class="button-width-190 button-primary button-circle button-lg button offset-top-30" href="change_patient_info.php?patient_number=<?php echo $_GET['patient_number']; ?>">Edit patient informations</a>
      </div>
    </div>

    <div class="container wow fadeInLeft">
      <div class="row row-50 justify-content-left ">
        <h3 class="text-capitalize devider-left wow fadeInLeft mt-4" data-wow-delay=".2s">Warnings <span class="text-primary"> specifications</span></h3>
      </div>

      <form id="form" method="post">
        <div class="form-group mt-5">
          <label for="hyperpressureValue"><strong>Hyperpressure Value (in kPa)</strong></label>
          <input type="number" class="form-control" id="hyperpressureValue" placeholder="Enter hyperpressure value" name="hyperpressureValue">
        </div>
        <div class="form-group mt-4">
          <label for="occurencesNumber"><strong>Number of occurences needed to create a warning</strong></label>
          <input type="number" class="form-control" id="occurencesNumber" placeholder="Enter occurrences number" name="occurencesNumber">
        </div>
        <div class="form-group mt-4">
          <label for="timeInterval"><strong>Time interval considered (in seconds)</strong></label>
          <input type="number" class="form-control" id="timeInterval" placeholder="Enter the time interval" name="timeInterval">
        </div>
        <button type="submit" class="button-width-190 button-primary button-circle button-lg button offset-top-40">Submit</button>
      </form>
    </div>
  </section>



  <section class="section section-md bg-xs-overlay" style="background-color:gainsboro;;background-size:cover">
    <div class="container">
      <div class="row row-50 justify-content-center">
        <div class="col-12 text-center col-md-10 col-lg-8">


          <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Check here your<span class="text-primary"> Patient statistics and warnings</span></h3>
          <p>Through this menu, you will be able to see the data captured by My Care shoe, in a period of time choosed by you! </p>
        </div>
      </div>



      <div class="row row-30 justify-content-center">

        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
          <div class="pricing-box bg-gray-primary">

            <hr />
            <div class="pricing-box-inner"><span class="pricing-box-price">My Care Shoe</span></div>
            <div class="pricing-box-label bg-gray-primary-light">Statistics</div>
            <a class="button button-190 button-circle btn-rounded-outline" href="patient_statistics.php?patient_number=<?php echo $_GET['patient_number']; ?>"> Search </a>

          </div>


        </div>

        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
          <div class="pricing-box bg-gray-primary">

            <hr />
            <div class="pricing-box-inner"><span class="pricing-box-price">My Care Shoe</span></div>
            <div class="pricing-box-label bg-gray-primary-light">Warnings</div>
            <a class="button button-190 button-circle btn-rounded-outline" href="patient_warnings.php?patient_number=<?php echo $_GET['patient_number']; ?>"> Search </a>

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
    $("#form").submit(function(e) {

      e.preventDefault();
      $.ajax({
        url: "http://10.8.129.207/mycareshoeapi/patient/update_patient_info.php",
        method: "POST",
        data: {
          patient_number: '<?php echo $_GET['patient_number']; ?>',
          pressure_threshold: document.getElementById('hyperpressureValue').value,
          occurences_number: document.getElementById('occurencesNumber').value,
          time_interval: document.getElementById('timeInterval').value
        },
        dataType: "JSON",
        success: function(data) {
          alert(data.message);
        }
      })
    });
  </script>

  <script>
    $(document).ready(function($) {

      $.ajax({
        url: "http://10.8.129.207/mycareshoeapi/patient/patient_search.php",
        method: "POST",
        data: {
          p: '<?php echo $_GET['patient_number']; ?>'
        },
        dataType: "JSON",
        success: function(data) {
          jQuery('#name').html(data.name);
          jQuery('#patient_number').html(data.patient_number);
          jQuery('#gender').html(data.gender);
          jQuery('#birth').html(data.birth);
          jQuery('#diabetes').html(data.diabetes);
          jQuery('#height').html(data.height);
          jQuery('#weight').html(data.weight);
          jQuery('#feet_size').html(data.feet_size);
          jQuery('#type_feet').html(data.type_feet);
          $('#hyperpressureValue').val(data.pressure_threshold);
          $('#occurencesNumber').val(data.occurences_number);
          $('#timeInterval').val(data.time_interval);
        }
      })
    });
  </script>

</body>

</html>
