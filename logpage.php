<?php
    
    
        $i=$_POST['user_name'];
        $j=$_POST['password_in'];
        
     
        
       
        
           require_once('db_config.php');
       
       
        $sql="SELECT * FROM registerinfo WHERE user_name='$i' and password_in='$j' ";
   
      $conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
	$rowcount=mysqli_num_rows($result);
	


        if ($rowcount == 1)
        {
            
            session_start();
            $_SESSION["isloggedin"]=true;
            
            echo "<script>location.assign('homepage.php');</script>";
        }
        else{
         
            echo "<script>location.assign('index.html');</script>";
        }
        
    
$conn->close();
  ?>

   
    
