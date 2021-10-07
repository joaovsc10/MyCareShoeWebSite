<?php

session_start();

if (!isset($_SESSION['id'])) {
    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location: log_in.php');
    exit();
}else{
    if($_SESSION['id']==3){
        header('Location:index.php');
    exit();
    }
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Change Patient Information</title>
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


    <!--Caracteristicas-->


    <section class="section custom-section position-relative section-md">
        <div class="container wow fadeInLeft">
            <h2 class="font-weight-bold">Change your patient's personal information</h2>
            <form id="form" method="post">
                <div class="form-group mt-4">
                    <label for="name"><strong>Name</strong></label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                </div>
                <div class="form-group">
                    <label for="patient_number"><strong>Patient Number</strong></label>
                    <input type="number" class="form-control" id="patient_number" placeholder="Enter patient number" name="patient_number">
                </div>
                <div class="form-group">
                    <label for="gender"><strong>Gender</strong></label>
                    <select id="gender" class="form-control" name="gender">
                        <option value="0">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <select>
                </div>
                <div class="form-group">
                    <label for="weight"><strong>Weight (in kilograms)</strong></label>
                    <input type="number" class="form-control" id="weight" placeholder="Enter weight" name="weight" min="20" max="700">
                </div>
                <div class="form-group">
                    <label for="height"><strong>Height (in meters)</strong></label>
                    <input type="number" class="form-control" id="height" placeholder="Enter height" name="height" min="0.5" max="3">
                </div>
                <div class="form-group">
                    <label for="feet_size"><strong>Feet Size</strong></label>
                    <input type="number" class="form-control" id="feet_size" placeholder="Enter feet size" name="feet_size" min="15" max="75">
                </div>

                <div class="form-group">
                    <label for="diabetes"><strong>Diabetes</strong></label>
                    <select id="diabetes" class="form-control" name="diabetes">
                        <option value="0">Select Diabetes Status</option>
                        <option value="Present">Present</option>
                        <option value="Absent">Absent</option>
                        <select>
                </div>

                <div class="form-group">
                    <label for="feet_type"><strong>Feet Type</strong></label>
                    <select id="feet_type" class="form-control" name="feet_type">
                        <option value="0">Select Feet Type</option>
                        <option value="Normal foot">Normal foot</option>
                        <option value="Flat foot">Flat foot</option>
                        <option value="Hollow foot">Hollow foot</option>
                        <select>
                </div>

                <div class="form-group">
                    <label for="birthdate"><strong>Birthday</strong></label>
                    <input type="date" class="form-control" id="birthdate" placeholder="Enter birthday" name="birthdate">
                </div>

                <button type="submit" class="button-width-190 button-primary button-circle button-lg button offset-top-30">Submit</button>
            </form>
        </div>


    </section>

    <?php include('footer.html') ?>

    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        $(document).ready(function($) {

            $.ajax({
                url: "http://localhost/mycareshoeapi/patient/patient_search.php",
                method: "POST",
                data: {
                    p: '<?php echo $_GET['patient_number']; ?>'
                },
                dataType: "JSON",
                success: function(data) {

                    $('#name').val(data.name);
                    $('#patient_number').val(data.patient_number);
                    $('#gender').val(data.gender).change();
                    $('#weight').val(data.weight);
                    $('#height').val(data.height);
                    $('#feet_size').val(data.feet_size);
                    //     var newdate = data.birth.split("-").reverse().join("/");
                    $('#birthdate').val(data.birth);
                    $('#diabetes').val(data.diabetes).change();
                    $('#feet_type').val(data.type_feet).change();
                }
            })
        });
    </script>


    <script>
        $("#form").submit(function(e) {
            e.preventDefault();
            
            $.ajax({
                url: "http://localhost/mycareshoeapi/patient/update_patient_info.php",
                method: "POST",
                data: {
                    patient_number: '<?php echo $_GET['patient_number']; ?>',
                    name: document.getElementById('name').value,
                    gender: document.getElementById('gender').value,
                    weight: document.getElementById('weight').value,
                    height: document.getElementById('height').value,
                    feet_size: document.getElementById('feet_size').value,
                    birth: document.getElementById('birthdate').value,
                    diabetes: document.getElementById('diabetes').value,
                    type_feet: document.getElementById('feet_type').value,
                },
                dataType: "JSON",
                success: function(data) {
                    alert("Patient's maximum pressure threshold updated!");
                }
            })

        });
    </script>

</body>

</html>