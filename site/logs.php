<!DOCTYPE html>  
 <html>
  <?php
  session_start();
  if(!isset($_SESSION['id']))
{
    // restrição para o caso de inserir o endereço sem ter feito login
    header('Location: log_in.html');
    exit();
}
?>

<table border="1"> 
 
                     <tr> <th>Table name</th> 
                          <th>Tracking ID</th> 
                          <th>Data ID</th>
                          <th>Field</th>
                          <th>Old Value</th>  
                          <th>New Value</th>
                          <th>Modified</th>  
                     </tr>  
                <?php  
        
				
				  $connect = mysqli_connect("localhost", "root", "", "telesaude");
                $query = "SELECT * FROM log_table";
                $result = mysqli_query($connect, $query); 

            

                while($row = mysqli_fetch_array($result)){

                        echo "<tr>"; 

                               echo "<td>"
                                    .$row['table_name']. 
                               "</td>";

                               
                                echo "<td>"
                                    .$row['tracking_id']. 
                               "</td>";
                               

                               
                                echo "<td>"
                                    .$row['data_id']. 
                               "</td>";

                               echo "<td>"
                                    .$row['field']. 
                               "</td>";

                               echo "<td>"
                                    .$row['old_value']. 
                               "</td>";

                               echo "<td>"
                                    .$row['new_value']. 
                               "</td>";

                               echo "<td>"
                                    .$row['modified']. 
                               "</td>";
                                }

                          echo "</tr>";  
                          
                     
                  

                ?>  
                </table>
</html>
