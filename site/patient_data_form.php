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
        <h2 class="font-weight-bold">Patient Information</h2>
        <form id="form" method="post">
            <div class="form-group mt-4">
                <label for="name"><strong>Name</strong></label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group mt-4">
                <label for="patient_number"><strong>Patient Number</strong></label>
                <input type="number" class="form-control" id="patient_number" placeholder="Enter patient number" name="patient_number">
            </div>
            <div class="form-group mt-4">
                <label for="gender"><strong>Gender</strong></label>
                <select id="gender" class="form-control" name="gender">
                    <option value="0">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    <select>
            </div>
            <div class="form-group mt-4">
                <label for="weight"><strong>Weight (in kilograms)</strong></label>
                <input type="number" class="form-control" id="weight" placeholder="Enter weight" name="weight" min="20" max="700">
            </div>
            <div class="form-group mt-4">
                <label for="height"><strong>Height (in meters)</strong></label>
                <input type="number" class="form-control" id="height" placeholder="Enter height" name="height" min="0.50" max="3.00" step="0.01">
            </div>
            <div class="form-group mt-4">
                <label for="feet_size"><strong>Feet Size</strong></label>
                <input type="number" class="form-control" id="feet_size" placeholder="Enter feet size" name="feet_size" min="15" max="75">
            </div>

            <div class="form-group mt-4">
                <label for="diabetes"><strong>Diabetes</strong></label>
                <select id="diabetes" class="form-control" name="diabetes">
                    <option value="0">Select Diabetes Status</option>
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                    <select>
            </div>

            <div class="form-group mt-4">
                <label for="feet_type"><strong>Feet Type</strong></label>
                <select id="feet_type" class="form-control" name="feet_type">
                    <option value="0">Select Feet Type</option>
                    <option value="Normal foot">Normal foot</option>
                    <option value="Flat foot">Flat foot</option>
                    <option value="Hollow foot">Hollow foot</option>
                    <select>
            </div>

            <div class="form-group mt-4">
                <label for="birthdate"><strong>Birthday</strong></label>
                <input type="date" class="form-control" id="birthdate" placeholder="Enter birthday" name="birthdate">
            </div>

            <div class="form-group mt-4">
              <label for="access_status"><strong>Access Status</strong></label>
              <select name="access_status" class="form-control" id="access_status">

                <option value="1">Enable access</option>';
                <option value="0">Disable access</option>';

              </select>
            </div>

            <button type="submit" class="button-width-190 button-primary button-circle button-lg button offset-top-30">Submit</button>
        </form>
    </div>



</section>

<?php include('footer.html') ?>

<div class="snackbars" id="form-output-global"></div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
