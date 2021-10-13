<?php

session_start();
if (!isset($_SESSION['profile_id'])) {

  // restrição para o caso de inserir o endereço sem ter feito login
  header('Location:log_in.php');
  exit();
} else {
  if ($_SESSION['profile_id'] == 2) {
    header('Location:index.php');
    exit();
  }
}


$connect = mysqli_connect("10.8.129.207", "root", "", "mycareshoe");
$query2 = "SELECT * FROM user";
$result2 = mysqli_query($connect, $query2);

$query = "SELECT * FROM profile_type";
$result = mysqli_query($connect, $query);

$user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_STRING);
$profile_id = filter_input(INPUT_POST, 'profile_id', FILTER_SANITIZE_STRING);

?>


<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Patient Details</title>
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
          <p class="intro-description wow fadeInRight"> Welcome to your administrator view! </p>
        </div>
      </div>
    </div>
  </section>
  <br /><br />


  <section class="section custom-section position-relative section-md">
    <div class="container wow fadeInLeft">
      <h3 class="text-capitalize devider-left wow fadeInLeft" data-wow-delay=".2s">Change <span class="text-primary"> User Permissions</span></h3>


      <br />
      <form method="post" id="form" enctype="multipart/form-data">

        <div class="form-group mt-4">
          <label for="user_id"><strong>User ID</strong></label>
          <select name="user_id" class="form-control" id="user_id">
            <?php
            while ($row2 = mysqli_fetch_array($result2)) {
              echo '<option value="' . $row2['user_id'] . '">' . $row2['user_id'] . ' - ' . $row2['username'] . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="form-group mt-4">
          <label for="profile_id"><strong>Profile ID</strong></label>
          <select name="profile_id" class="form-control" id="profile_id">
            <?php
            while ($row = mysqli_fetch_array($result)) {
              echo '<option value="' . $row['profile_id'] . '">' . $row['profile'] . '</option>';
            }
            ?>
          </select>
        </div>
        <div class="form-group mt-4">
          <label for="access_status"><strong>Access Status</strong></label>
          <select name="access_status" class="form-control" id="access_status">

            <option value="1">Enable access</option>';
            <option value="0">Disable access</option>';

          </select>
        </div>
        <input type="submit" name="insert" id="insert" value="Submit" class="button-width-190 button-primary button-circle button-lg button offset-top-30" />
      </form>
      <br />
      <br />

    </div>
    </div>
  </section>
  <?php include('footer.html') ?>

  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>

  <script>
    $('#form').on('submit', function(e) {

      e.preventDefault();
      $.ajax({
        url: "http://10.8.129.207/mycareshoeapi/user/update_user_info.php",
        method: "POST",
        data: {
          user_id: $('#user_id option:selected').val(),
          profile_id: $('#profile_id option:selected').val(),
          access_permission: $('#access_status option:selected').val()
        },
        dataType: "JSON",
        success: function(data) {
          alert("Permissions updated!");
        }
      })
    });
  </script>
</body>

</html>