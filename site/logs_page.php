<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Logs table</title>
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
if (!isset($_SESSION['profile_id'])) {

    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location:log_in.php');
    exit();
}
else{
    if($_SESSION['profile_id']==2){
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

    <section class="section section-md bg-xs-overlay " style="background-color:gainsboro;;background-size:cover">
        <div class="container">

            <div class="row row-50 justify-content-center">
                <form id="form" align-content="center">
                    <label for="start_end">Choose start and end date:</label>
                    <input type="datetime-local" id="start_date" name="start_date">
                    <input type="datetime-local" id="end_date" name="end_date">
                    <input type="submit" id="submit" value="Search">
                </form>

            </div class="row row-50 justify-content-center">


        </div>

        <div class="container section-md">

            <table class="table table-striped table-bordered" style="display:none" id="table">
                <thead>
                    <tr>
                        <th>Tracking ID</th>
                        <th>Table name</th>
                        <th>Data ID</th>
                        <th>Field</th>
                        <th>Old Value</th>
                        <th>New Value</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>



    </section>

    <?php include('footer.html') ?>

    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>


    <script>
        $("#form").submit(function(e) {
            $('#table').find("tr:gt(0)").remove();
            $('#table').show();
            var start_date_format = document.getElementById('start_date').value.replace("T", " ");
            var end_date_format = document.getElementById('end_date').value.replace("T", " ");
            e.preventDefault();
            $.ajax({
                url: "http://localhost/mycareshoeapi/search.php",
                method: "POST",
                data: {
                    start_date: start_date_format,
                    end_date: end_date_format,
                    topic: "logs"
                },
                dataType: "JSON",
                success: function(data) {

                    $.each(data['records'], function(index, value) {


                        var html = '<tr>' +
                            '<td style=" vertical-align: middle">' + value['tracking_id'] + '</td>' +
                            '<td style=" vertical-align: middle">' + value['table_name'] + '</td>' +
                            '<td style=" vertical-align: middle">' + value['data_id'] + '</td>' +
                            '<td style=" vertical-align: middle">' + value['field'] + '</td>' +
                            '<td style=" vertical-align: middle">' + value['old_value'] + '</td>' +
                            '<td style=" vertical-align: middle">' + value['new_value'] + '</td>' +
                            '<td style=" vertical-align: middle">' + value['modified'] + '</td>' +
                            '</tr>';

                        $('#table tr').first().after(html);
                    });
                },
                 error:function(data)
           			{
                   $('#table').hide();
                   alert("No data found!");

           			}
            })
        });
    </script>

</body>

</html>
