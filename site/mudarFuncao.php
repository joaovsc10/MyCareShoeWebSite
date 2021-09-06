
  <?php  
      
        session_start();
        if(!isset($_SESSION['id']))
      {
          // restrição para o caso de inserir o endereço sem ter feito login
          header('Location: log_in.html');
          exit();
      }
      
      
       $connect = mysqli_connect("localhost", "root", "", "telesaude");
      $query2= "SELECT * FROM login_signup";
      $result2 = mysqli_query($connect, $query2);
      
       $query= "SELECT * FROM funcao";
      $result = mysqli_query($connect, $query);
       
       $id_user=filter_input(INPUT_POST, 'id_user', FILTER_SANITIZE_STRING);  
       $funcao_id=filter_input(INPUT_POST, 'funcao_id', FILTER_SANITIZE_STRING);  
       if(isset($_POST["insert"]))  
       {  
             
            $query = "UPDATE login_signup SET funcao_id='$funcao_id' WHERE id='$id_user' "; 
            if(mysqli_query($connect, $query))  
            {  
                  header("location: admin.php");  
            }
             
       }  
       ?>

 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Give user permissions</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Give user permissions</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">
                     
                      <select name="id_user">
                      <?php
                          while($row2 = mysqli_fetch_array($result2))  
                          { 
                          echo '<option value="'.$row2['id'].'">'.$row2['id'].'</option>';
                          }
                      ?>
                          </select>

                          <select name="funcao_id">
                      <?php
                          while($row = mysqli_fetch_array($result))  
                          { 
                          echo '<option value="'.$row['funcao_id'].'">'.$row['funcao'].'</option>';
                          }
                      ?>
                          </select>

                     <input type="submit" name="insert" id="insert" value="Submit" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                       
    
           </div>  
      </body>  
 </html>  
 