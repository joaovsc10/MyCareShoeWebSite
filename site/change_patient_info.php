<?php

session_start();

if (!isset($_SESSION['profile_id'])) {
    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location: log_in.php');
    exit();
} else {
    if ($_SESSION['profile_id'] == 3) {
        header('Location:index.php');
        exit();
    }
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


  <?php include('patient_data_form.php') ?>

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
                url: "http://10.8.129.207/mycareshoeapi/patient/update_patient_info.php",
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
                    //  $("#myAlert").fadeIn();
                    $.ajax({
                      url: "http://10.8.129.207/mycareshoeapi/user/update_user_info.php",
                      method: "POST",
                      data: {
                        patient_number: '<?php echo $_GET['patient_number']; ?>',
                        profile_id: 1,
                        access_permission: $('#access_status option:selected').val()
                      },
                      dataType: "JSON",
                      success: function(data) {
                        alert(data.message);
                      }
                    })
                    alert(data.message);
                }
            })

        });
    </script>

</body>

</html>
