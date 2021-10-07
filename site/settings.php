<?php
	    
  session_start();
  
  if(!isset($_SESSION['id']))
{
    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location: log_in.php');
    exit();
}
?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Settings</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:300,400,700%7CPoppins:300,400,500,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
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
   <h2 class="font-weight-bold">Change your personal data</h2>
   <form id="form" method="post">
   <div class="form-group mt-4">
       <label for="username"><strong>Username</strong></label>
       <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
     </div>
     <div class="form-group">
       <label for="email"><strong>Email</strong></label>
       <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
     </div>
     <div class="form-group">
       <label for="pwd"><strong>Password</strong></label>
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
     </div>
     <button type="submit" class="button-width-190 button-primary button-circle button-lg button offset-top-30">Submit</button>
   </form>
 </div>
                
                
      </section>

      <?php include('footer.html')?>
	  
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
    <script> 
	$("#form").submit(function(e) {
e.preventDefault();
		$.ajax({
    url:"http://localhost/mycareshoeapi/user/update_user_info.php",
    method:"POST",
    data:{user_id:'<?php echo $_SESSION['id']; ?>', email: document.getElementById('email').value, username: document.getElementById('username').value, password: '<?php echo sha1($_POST['pswd']);?>'},
    dataType:"JSON",
    success:function(data)
    {
     alert(data['message']);
    }
   })
}); 
</script>

  </body>
</html>
