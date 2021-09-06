 <?php
      
  session_start();
 
  if(!isset($_SESSION['id']))
{
    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location: user_login.php');
    exit();
}
?>

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Definições da conta</title> 
           <link href="css/main_1.css" rel="stylesheet" media="all"> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
     <body>  
           <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Settings</h2>
                    <form form method="POST" enctype="multipart/form-data">
                        
                        <div class="p-t-20">
                        <a href="mudarStatus.php">
                            <input type="button" name="mudarStatus" id="mudarStatus" value="Change Status" class="btn btn--radius btn--green"  />
                            </a>
                            </div>
                        
                        <br>
                    
                        <div class="p-t-20">
                        <a href="mudarFuncao.php">  
                     <input type="button" name="mudarFuncao" id="mudarFuncao" value="Change Function"  class= "btn btn--radius btn--green"/> 
                   </a>
                    </div>
                   <br>

                   <div class="p-t-20">
                       <a href="logs.php">  
                     <input type="button" name="logs" id="logs" value="Logs Table"  class= "btn btn--radius btn--green"/> 
                   </a> 
                  </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      </body>
 </html>   
 

