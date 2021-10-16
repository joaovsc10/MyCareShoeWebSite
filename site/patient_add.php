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
    <title>Add a new patient</title>
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


<body>

 <?php include('patient_data_form.php') ?>



    <script>
        $("#form").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "http://10.8.129.207/mycareshoeapi/patient/update_patient_info.php",
                method: "POST",
                data: {
                    patient_number: document.getElementById('patient_number').value,
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
                        patient_number: document.getElementById('patient_number').value,
                        profile_id: 1,
                        access_permission: access_permission: $('#access_status option:selected').val()
                      },
                      dataType: "JSON",
                      success: function(data) {

                      }
                    })
                    alert(data.message);
                }
            })

        });
    </script>

</body>

</html>
