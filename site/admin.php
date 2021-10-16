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
  ?>

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

   <section class="section custom-section position-relative section-md">


     <section class="section section-md bg-xs-overlay">
       <div class="container">
         <div class="row row-50 justify-content-center">
           <div class="col-12 text-center col-md-10 col-lg-8">
             <!--criar link para a nova pagina da BD DE ENVIAR IMAGENS-->

             <h3 class="wow fadeInLeft text-capitalize" data-wow-delay=".3s">Check here your<span class="text-primary"> Administrator operations</span></h3>
             <p>Through option "Logs table", you will be able to see the activity on the several tables of the database, and through "Permissions", you will be capable of giving registred user their permissions. </p>
           </div>
         </div>



         <div class="row row-30 justify-content-center">

           <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
             <div class="pricing-box bg-gray-primary">

               <hr />
               <div class="pricing-box-inner"><span class="pricing-box-price">My Care Shoe</span></div>
               <div class="pricing-box-label bg-gray-primary-light">Logs table</div>
               <a class="button button-190 button-circle btn-rounded-outline" href="logs_page.php"> Go </a>

             </div>
           </div>

           <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
             <div class="pricing-box bg-gray-primary">

               <hr />
               <div class="pricing-box-inner"><span class="pricing-box-price">My Care Shoe</span></div>
               <div class="pricing-box-label bg-gray-primary-light">Permissions</div>
               <a class="button button-190 button-circle btn-rounded-outline" href="user_permissions.php"> Go </a>

             </div>
           </div>
         </div>
       </div>
     </section>
   </section>



   <?php include('footer.html') ?>

   <script src="js/core.min.js"></script>
   <script src="js/script.js"></script>
 </body>

 </html>
